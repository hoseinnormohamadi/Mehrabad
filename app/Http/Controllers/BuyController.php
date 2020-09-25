<?php

namespace App\Http\Controllers;

use App\Order;
use App\Shop;
use App\WishList;
use Carbon\Carbon;
use Hekmatinasser\Verta\Verta;
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
        if (WishList::where('UserID' , Auth::id())->where('ProductID' , $Product->id)->count() == 0){
            $WishList = WishList::create([
                'UserID' => Auth::id(),
                'ProductID' => $Product->id
            ]);
        }else{
            $WishList = WishList::where('UserID' , Auth::id())->where('ProductID' , $Product->id)->get()[0];
            $WishList->Count = $WishList->Count + 1;
            $WishList->save();
        }


        return RedirectController::Redirect(url()->previous(), 'محصول مورد نظر به سبد خرید شما اضافه شد');


    }

    public function WishListShow()
    {
        if (\request()->Action == 'AddOne') {
            $Wish = WishList::find(\request()->ID);
            $Wish->Count = $Wish->Count + 1;
            $Wish->save();
            return redirect()->back();

        }
        if (\request()->Action == 'RemoveOne') {
            $Wish = WishList::find(\request()->ID);
            $Wish->Count = $Wish->Count - 1;
            $Wish->save();
            return redirect()->back();
        }
        return view('Front.WishList');
    }

    public function Buy()
    {
        return view('Front.OrderStep1');
    }


    public function Complete(Request $request)
    {
        if ($request->OrderDate == null) {
            $OrderDate = Carbon::tomorrow()->format('Y-m-d');
        } else {
            $Date = explode('/', $request->OrderDate);
            $OrderDate = implode('-', Verta::getGregorian($Date[0], $Date[1], $Date[2]));
        }
        if (WishList::where('UserID', Auth::id())->count() <= 0) {
            return RedirectController::Redirect(url()->previous(), 'ابتدا مواردی را به سبد خرید خود اضافه کنید');
        }
        $Products = [];
        $Price = 0;


        foreach (WishList::where('UserID', Auth::id())->get() as $item) {
            for ($i = 0; $i < $item->Count; $i++) {
                $Product = Shop::find($item->ProductID);
                $Product->Count = $Product->Count - 1;
                $Product->save();
                if ($Product->Takhfif != null) {
                    $Price += $Product->Takhfif;
                } else {
                    $Price += $Product->Price;
                }
            }
            $Products[] = ['Product' => $item->ProductID, 'Count' => $item->Count];
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
