<?php

namespace App\Http\Controllers;

use App\Traits\Uploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class MyProfile extends Controller
{
    use  Uploader;
    public function index(){
        return view('Admin.MyProfile.Profile');
    }

    public function General(Request $request){
        $request->validate([
            'FirstName' => 'required|string',
            'LastName' => 'required|string',
            'email' => 'nullable|string|email',
            'PhoneNumber' => 'nullable|integer',
            'Image' => 'nullable|image',
        ]);
        try {
            $User = Auth::user();
            $User->FirstName = $request->FirstName;
            $User->LastName = $request->LastName;
            $User->email = $request->email;
            $User->PhoneNumber = $request->PhoneNumber;
            $User->Image = $request->hasFile('Image') ? $this->UploadPic($request,'Image',$User->FirstName . ' ' . $User->LastName,'Profile') : $User->Image;
            $User->save();
            return RedirectController::Redirect(route('MyProfile.MyProfile') , 'پروفایل شما با موفقیت بروزرسانی شد');


        }catch (\Exception $exception){
            return RedirectController::Redirect(route('MyProfile.MyProfile') , $exception->getMessage());
        }
    }

    public function Security(Request $request){
        $request->validate([
            'OldPassword' => 'required|string|min:6',
            'password' => 'required|string|min:6|confirmed',
        ]);
        try {
            if (Hash::check($request->OldPassword, Auth::user()->password)) {
                $User = Auth::user();
                $User->password = Hash::make($request->password);
                $User->save();
                return RedirectController::Redirect(route('MyProfile.MyProfile') , 'کلمه عبور شما با موفقیت تغییر پیدا کرد');

            }else {
                return RedirectController::Redirect(route('MyProfile.MyProfile'), 'پسورد فعلی خود را درست وارد کنید.');
            }
        }catch (\Exception $exception){
            return RedirectController::Redirect(route('MyProfile.MyProfile') , $exception->getMessage());

        }
    }
}
