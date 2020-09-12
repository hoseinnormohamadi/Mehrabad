<?php

namespace App\Http\Controllers;

use App\Shop;
use App\ShopCategory;
use App\SubCategory;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function Admin(){
        return view('Admin.dashbord');
    }
    public function index(){
        return view('Front.index');
    }
    public function Product($id){
        $Product = Shop::find($id);
        if ($Product == null || $Product->count() <= 0 || empty($Product)){
            return redirect()->back();
        }
        return view('Front.Product')->with(['Product' => $Product]);
    }

    public function Search(){
        if (\request('SearchTerm')){
            $Items = Shop::where('Name','LIKE', '%' . request('SearchTerm') . '%')->paginate(16);

        }else{
            $Items = Shop::paginate(16);
        }
        return view('Front.Search')->with(['Items' => $Items]);
    }

    public function Category($CategoryID){
        $Category = ShopCategory::find($CategoryID);
        if ($Category == null || empty($Category)){
            return redirect()->back();
        }
        $Products = Shop::where('Category' , $CategoryID)->paginate(16);
        return view('Front.Search')->with(['Items' => $Products]);
    }
    public function SubCategory($CategoryID,$SubCatID){
        $Category = SubCategory::find($SubCatID);
        if ($Category == null || empty($Category)){
            return redirect()->back();
        }
        $Products = Shop::where('Category' , $CategoryID)->where('SubCategory' , $Category->id)->paginate(16);
        return view('Front.Search')->with(['Items' => $Products]);
    }

    public function Amazing(){
        if (\request('Name')){
            $Items = Shop::where('Name' , \request('Name'))->where('Amazing' , 'Yes')->paginate(16);
        }else{
            $Items = Shop::where('Amazing' , 'Yes')->paginate(16);
        }
        return view('Front.Amazing')->with(['Items' => $Items]);
    }
}
