<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\Traits\CustomAuth;
use App\Traits\Uploader;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{
    use CustomAuth;
    use Uploader;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!$this->IsAdmin()) {
                return RedirectController::Redirect(route('Dashboard'), 'شما اجازه دسترسی به این بخش را ندارید!!!');
            }
            return $next($request);
        });
    }




    public function All()
    {
        if (\request('SearchTerm')) {
            $Items = User::where('CodeMeli','LIKE', '%' . request('SearchTerm') . '%')->paginate(25);
        }else {
            $Items = User::paginate(25);
        }
        return view('Admin.Users.All')
            ->with('Users', $Items);
    }

    public function Add()
    {
        return view('Admin.Users.Add');
    }

    public function Create(Request $request)
    {
        $request->validate([
            'FirstName' => 'required|string',
            'LastName' => 'required|string',
            'CodeMeli' => 'required',
            'password' => 'required|string|min:6',
            'email' => 'string|email',
            'Image' => 'image',
        ]);
        try {

            $User = User::create([
                'FirstName' => $request->FirstName,
                'LastName' => $request->LastName,
                'PhoneNumber' => $request->PhoneNumber,
                'CodeMeli' => $request->CodeMeli,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'AccountStatus' => $request->AccountStatus,
                'Image' => $request->hasFile('Image') ? $this->UploadPic($request,'Image',$request->FirstName . ' ' .$request->LastName,'Profile') : '/assets/img/default-avatar.png',
            ]);
            return RedirectController::Redirect(route('Users.All'),'کاربر با موفقیت اضافه شد.');
        } catch (\Exception $exception) {
            return RedirectController::Redirect(route('Users.Add'),$exception->getMessage());
        }
    }

    public function Edit($id)
    {
        $Item = User::find($id);
        if ($Item == '' || empty($Item) || $Item->count() == 0){
            return RedirectController::Redirect(route('Users.All'),'کاربر مورد نظر شما یافت نشد');
        }
        return view('Admin.Users.Edit')->with([
            'User' => $Item,
        ]);
    }

    public function Update($id, Request $request)
    {
        $Item = User::find($id);
        if ($Item == '' || empty($Item) || $Item->count() == 0){
            return RedirectController::Redirect(route('Users.All'),'کاربر مورد نظر شما یافت نشد');
        }
        if ($request->password){
            $request->validate([
                'FirstName' => 'required|string',
                'LastName' => 'required|string',
                'PhoneNumber' => 'integer',
                'CodeMeli' => 'required',
                'password' => 'required|string|min:6',
                'email' => 'string|email',
                'Image' => 'image',
            ]);
        }else{
            $request->validate([
                'FirstName' => 'required|string',
                'LastName' => 'required|string',
                'PhoneNumber' => 'integer',
                'CodeMeli' => 'required',
                'email' => 'string|email',
                'Image' => 'image',
            ]);
        }
        try {
            $Item->FirstName = $request->FirstName;
            $Item->LastName = $request->LastName;
            $Item->PhoneNumber = $request->PhoneNumber;
            $Item->CodeMeli = $request->CodeMeli;
            $Item->password = $request->password != null ? Hash::make($request->password) : $Item->password;
            $Item->email = $request->email;
            $Item->Image = $request->hasFile('Image') ? $this->UploadPic($request,'Image',$request->FirstName . ' ' .$request->LastName,'Profile') : $Item->Image;
            $Item->save();
            return RedirectController::Redirect(route('Users.All'),'کاربر با موفقیت بروزرسانی شد');

        }
        catch (\Exception $exception) {
            return RedirectController::Redirect(route('Users.Edit',$Item->id),$exception->getMessage());
        }

    }

    public function Delete($id)
    {
        $Item = User::find($id);
        if ($Item == '' || empty($Item) || $Item->count() == 0){
            return RedirectController::Redirect(route('Users.All'),'کاربر مورد نظر شما یافت نشد');
        }
        try {
            $Item->delete();
            return RedirectController::Redirect(route('Users.All'),'کاربر با موفقیت حذف شد');
        }
        catch (\Exception $exception) {
            return RedirectController::Redirect(route('Users.All'),$exception->getMessage());
        }
    }
    public function Import(){
        return view('Admin.Users.Import');
    }

    public function ImportExel(Request $request){
        Excel::Import(new UsersImport, request()->file('Exel'));
        return RedirectController::Redirect(route('Users.Import'), 'کاربران با موفقیت افزوده شدند');
    }

}
