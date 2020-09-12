<?php

namespace App\Http\Controllers;

use App\Exports\OrderExport;
use App\Order;
use App\Traits\CustomAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Excel;

class OrderController extends Controller
{
    use CustomAuth;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!$this->IsAdmin()) {
                return RedirectController::Redirect(route('Dashboard'), 'شما اجازه دسترسی به این بخش را ندارید!!!');
            }
            return $next($request);
        });
    }
    public function All(){
        if (\request('SearchTerm')){
            $Orders = Order::where('CodeMeli','LIKE', '%' . request('SearchTerm') . '%')->paginate(25);
        }else{
            $Orders = Order::paginate(25);
        }
        return view('Admin.Order.All')->with('Orders', $Orders);
    }

    public function Exel($id){
        return (new OrderExport($id))->download('test.xlsx');
    }
    public function Pdf($id){
        $Orders = Order::find($id);
        return view('Admin.Order.pdf')->with(['Orders' => $Orders]);
    }
}
