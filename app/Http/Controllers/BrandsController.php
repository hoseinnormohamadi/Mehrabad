<?php

namespace App\Http\Controllers;

use App\Brands;
use App\Traits\CustomAuth;
use App\Traits\Uploader;
use Illuminate\Http\Request;

class BrandsController extends Controller
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
            $Brands = Brands::where('Name', 'LIKE', '%' . request('SearchTerm') . '%')->paginate(25);
        } else {
            $Brands = Brands::paginate(25);
        }
        return view('Admin.Brand.All')
            ->with('Brands', $Brands);
    }

    public function Add(){
        return view('Admin.Brand.Add');
    }

    public function Create(Request $request){
        $request->validate([
            'Name' => 'required|string|max:150',
            'Image' => 'required|image',
        ]);
        try {
            $Brands = Brands::create([
                'Name' => $request->Name,
                'Image' => $this->UploadPic($request,'Image','Brands'),
            ]);
            return RedirectController::Redirect(route('Brand.All'),'تلیغات شما با موفقیت ثبت شد');
        }
        catch (\Exception $exception){
            return RedirectController::Redirect(route('Brand.Add'),$exception->getMessage());
        }
    }

    public function Edit($id){
        $Brands = Brands::find($id);
        if ($Brands == '' || empty($Brands)){
            return  RedirectController::Redirect(route('Brand.All'),'برند مورد نظر شما یافت نشد.مجدداً تلاش کنید');
        }
        return view('Admin.Brand.Edit')->with(['Brands' => $Brands]);
    }

    public function Update($id,Request $request){
        $Brands = Brands::find($id);
        if ($Brands == '' || empty($Brands)){
            return  RedirectController::Redirect(route('Brand.All'),'برند مورد نظر شما یافت نشد.مجدداً تلاش کنید');
        }
        $request->validate([
            'Name' => 'required|string|max:150',
            'Image' => 'image',
        ]);
        try {
            $Brands->Name = $request->Name;
            $Brands->Image = $request->hasFile('Image') ? $this->UploadPic($request,'Image','Brands') : $Brands->Image;
            $Brands->save();
            return RedirectController::Redirect(route('Brand.All'),'برند شما با موفقیت ویرایش شد.');
        }
        catch (\Exception $exception){
            return RedirectController::Redirect(route('Brand.Edit'),$exception->getMessage());
        }
    }

    public function Delete($id){
        $Brands = Brands::find($id);
        if ($Brands == '' || empty($Brands)){
            return  RedirectController::Redirect(route('Brand.All'),'برند مورد نظر شما یافت نشد.مجدداً تلاش کنید');
        }
        try {
            $Brands->delete();
            return RedirectController::Redirect(route('Brand.All'),'برند شما با موفقیت حذف شد.');
        }
        catch (\Exception $exception){
            return RedirectController::Redirect(route('Brand.All'),$exception->getMessage());
        }
    }


}
