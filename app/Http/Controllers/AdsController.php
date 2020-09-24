<?php

namespace App\Http\Controllers;

use App\Ads;
use App\Traits\CustomAuth;
use App\Traits\Uploader;
use Illuminate\Http\Request;

class AdsController extends Controller
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
            $Ads = Ads::where('Name', 'LIKE', '%' . request('SearchTerm') . '%')->paginate(25);
        } else {
            $Ads = Ads::paginate(25);
        }
        return view('Admin.Ad.All')
            ->with('Ads', $Ads);
    }

    public function Add(){
        return view('Admin.Ad.Add');
    }

    public function Create(Request $request){
        $request->validate([
            'Name' => 'required|string|max:150',
            'Link' => 'required|string',
            'Image' => 'required|image',
        ]);
        try {
            $Ads = Ads::create([
                'Name' => $request->Name,
                'Link' => $request->Link,
                'Image' => $this->UploadPic($request,'Image','Ads'),
            ]);
            return RedirectController::Redirect(route('Ad.All'),'تلیغات شما با موفقیت ثبت شد');
        }
        catch (\Exception $exception){
            return RedirectController::Redirect(route('Ad.Add'),$exception->getMessage());
        }
    }

    public function Edit($id){
        $Ads = Ads::find($id);
        if ($Ads == '' || empty($Ads)){
            return  RedirectController::Redirect(route('Ad.All'),'تبلیغات مورد نظر شما یافت نشد.مجدداً تلاش کنید');
        }
        return view('Admin.Ad.Edit')->with(['Ads' => $Ads]);
    }

    public function Update($id,Request $request){
        $Ads = Ads::find($id);
        if ($Ads == '' || empty($Ads)){
            return  RedirectController::Redirect(route('Ad.All'),'تبلیغات مورد نظر شما یافت نشد.مجدداً تلاش کنید');
        }
        $request->validate([
            'Name' => 'required|string|max:150',
            'Link' => 'required|string',
            'Image' => 'image',
        ]);
        try {
            $Ads->Name = $request->Name;
            $Ads->Link = $request->Link;
            $Ads->Image = $request->hasFile('Image') ? $this->UploadPic($request,'Image','Ads') : $Ads->Image;
            $Ads->save();
            return RedirectController::Redirect(route('Ad.All'),'تبلیغات شما با موفقیت ویرایش شد.');
        }
        catch (\Exception $exception){
            return RedirectController::Redirect(route('Ad.Edit'),$exception->getMessage());
        }
    }

    public function Delete($id){
        $Ads = Ads::find($id);
        if ($Ads == '' || empty($Ads)){
            return  RedirectController::Redirect(route('Ad.All'),'تبلیغات مورد نظر شما یافت نشد.مجدداً تلاش کنید');
        }
        try {
            $Ads->delete();
            return RedirectController::Redirect(route('Ad.All'),'تبلیغات شما با موفقیت حذف شد.');
        }
        catch (\Exception $exception){
            return RedirectController::Redirect(route('Ad.All'),$exception->getMessage());
        }
    }


}
