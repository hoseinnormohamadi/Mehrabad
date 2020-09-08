<?php

namespace App\Http\Controllers;

use App\Shop;
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
        return view('Front.Product')->with(['Product' => $Product]);
    }
}
