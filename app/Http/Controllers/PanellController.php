<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanellController extends Controller
{
    public function index(){
        return view('Front.Panel.Panel');
    }

    public function ChangePassword(){

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
        ]);
        try {
            $User = Auth::user();
            $User->FirstName = $request->FirstName;
            $User->LastName = $request->LastName;
            $User->email = $request->email;
            $User->PhoneNumber = $request->PhoneNumber;
            $User->save();
            return RedirectController::Redirect(url()->previous() , 'اطلاعات شما با موفقیت بروزرسانی شد');
        }catch (\Exception $exception){
            return RedirectController::Redirect(url()->previous() , 'لطفا مجدددا تلاش کنید');
        }
    }

}
