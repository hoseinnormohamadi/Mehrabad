<?php

namespace App\Http\Controllers;

use App\Order;
use App\Shop;
use App\WishList;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyController extends Controller
{
    public function WishList($ProductID)
    {
        $Product = Shop::find($ProductID);
        if ($Product == null || $Product->count() == 0) {
            return redirect()->back();
        }

        if ($Product->Count <= 0) {
            return RedirectController::Redirect(url()->previous(), 'محصول مورد نظر شما به اتمام رسید');
        }
        $WishList = WishList::create([
            'UserID' => Auth::user()->id,
            'ProductID' => $Product->id
        ]);
        return RedirectController::Redirect(url()->previous(), 'محصول مورد نظر به سبد خرید شما اضافه شد');


    }

    public function WishListShow()
    {
        return view('Front.WishList');
    }

    public function Buy()
    {

        return view('Front.OrderStep1');
    }


    public function Complete(Request $request)
    {
        if ($request->OrderDate == null){
            $OrderDate = Carbon::tomorrow()->format('Y-m-d');
        }else{
            $OrderDate = $request->OrderDate;
        }
        if (WishList::where('UserID', Auth::id())->count() <= 0){
            return RedirectController::Redirect(url()->previous(), 'ابتدا مواردی را به سبد خرید خود اضافه کنید');
        }
        $Products = [];
        $Price = 0;
        foreach (WishList::where('UserID', Auth::id())->get() as $item) {
            $Product = Shop::find($item->ProductID);
            $Product->Count = $Product->Count - 1;
            $Product->save();
            if ($Product->Takhfif != null){
                $Price += $Product->Takhfif;
            }else{
                $Price += $Product->Price;
            }
            $Products[] = $Product->id;
            $item->delete();
        }
        $Order = Order::create([
            'UserID' => Auth::id(),
            'ProductsID' => json_encode($Products),
            'Price' => $Price,
            'CodeMeli' => Auth::user()->CodeMeli,
            'OrderDate' => $OrderDate,
        ]);


        return RedirectController::Redirect(route('Buy.Completed', $Order->id));


    }

    public function Completed($id)
    {
        $Order = Order::find($id);
        if ($Order == null || empty($Order)) {
            return RedirectController::Redirect(route('Index'));
        }
        return view('Front.Complete')->with(['Order' => $Order]);
    }


    public function Remove($id)
    {
        $Wish = WishList::where('UserID', Auth::id())->where('ProductID', $id)->get();
        try {
            $Wish[0]->delete();
            return RedirectController::Redirect(url()->previous(), 'محصول مورد نظر شما به موفقیت از سبد خرید شما حذف شد.');
        } catch (\Exception $exception) {
            return RedirectController::Redirect(url()->previous(), 'مشکلی پیش آمده.لطفا دوباره تلاش کنید');
        }
    }
}
