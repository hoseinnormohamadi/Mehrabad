<?php

namespace App\Http\Controllers;

use App\Details;
use http\Url;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function Details($Name){
        $Data = Details::find(1);
        return view('Admin.Pages.Edit')->with(['Data' => $Data->$Name , 'Name' => $Name]);
    }

    public function DetailsPost($Name , Request $request){
        $request->validate([
            $Name => 'required|string'
        ]);
        $Data = Details::find(1);
        $Data->$Name = $request->$Name;
        $Data->save();
        return RedirectController::Redirect(\url()->previous() , 'بروزرسانی با موفقیت انجام شد');
    }
}
