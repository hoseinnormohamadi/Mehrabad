<?php

namespace App\Http\Controllers;

use App\Shop;
use App\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyController extends Controller
{
    public function WishList($ProductID){
        $Product = Shop::find($ProductID);
        if ($Product == null || $Product->count() == 0){
            return redirect()->back();
        }

        if ($Product->Count <= 0){
            return RedirectController::Redirect(url()->previous(),'محصول مورد نظر شما به اتمام رسید');
        }
        $WishList = WishList::create([
            'UserID' => Auth::user()->id,
            'ProductID' => $Product->id
        ]);
        return RedirectController::Redirect(url()->previous(),'محصول مورد نظر به سبد خرید شما اضافه شد');


    }
}
