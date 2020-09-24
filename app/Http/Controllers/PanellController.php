<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PanellController extends Controller
{
    public function index(){
        return view('Front.Panel.Panel');
    }

    public function Password(){
        return view('Front.Panel.PasswordChange');
    }

    public function ChangePassword(Request $request){
        $request->validate([
            'OldPassword' => 'required',
            'password' => 'required|confirmed',
        ]);
        if (Hash::check($request->OldPassword,Auth::user()->password)){
            Auth::user()->password = Hash::make($request->password);
            Auth::user()->save();
            Auth::logout();
            return RedirectController::Redirect(route('Index') , 'کلمه عبور شما با موفقیت تغییر پیدا کرد');
        }
        return RedirectController::Redirect( url()->previous(), 'کلمه عبور فعلی خود را مجددا بررسی نمایید.');

    }

    public function Orders(){
        $Orders = Order::where('UserID' , Auth::id())->get();
        return view('Front.Panel.Orders')->with(['Orders' => $Orders]);
    }

    public function Edit(){
        return view('Front.Panel.Edit');
    }

    public function Update(Request $request){
        $request->validate([
            'FirstName' => 'required|string',
            'LastName' => 'required|string',
            'email' => 'required|string|email',
            'PhoneNumber' => 'required|string',
            'Address' => 'required|string',
        ]);
        try {
            $User = Auth::user();
            $User->FirstName = $request->FirstName;
            $User->LastName = $request->LastName;
            $User->email = $request->email;
            $User->PhoneNumber = $request->PhoneNumber;
            $User->Address = $request->Address;
            $User->save();
            return RedirectController::Redirect(url()->previous() , 'اطلاعات شما با موفقیت بروزرسانی شد');
        }catch (\Exception $exception){
            return RedirectController::Redirect(url()->previous() , 'لطفا مجدددا تلاش کنید');
        }
    }


}
