<?php

namespace App\Http\Controllers;

use App\Exports\OrderExport;
use App\Order;
use App\Shop;
use App\Traits\CustomAuth;
use Hekmatinasser\Verta\Verta;
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

    public function All()
    {
        if (\request('SearchTerm')) {
            $Orders = Order::where('CodeMeli', 'LIKE', '%' . request('SearchTerm') . '%')->paginate(25);
        } else {
            $Orders = Order::paginate(25);
        }
        return view('Admin.Order.All')->with('Orders', $Orders);
    }

    public function Exel($id)
    {
        return (new OrderExport($id))->download('test.xlsx');
    }

    public function Pdf($id)
    {
        $Orders = Order::find($id);
        return view('Admin.Order.pdf')->with(['Orders' => $Orders]);
    }


    public function Filter()
    {
        return view('Admin.Order.Filter');
    }


    public function Report(Request $request)
    {

        $products = [];
        $shop = [];
        $Price = 0;
        $StartDate = json_decode($request->Data)->StartDate;
        $FinishDate = json_decode($request->Data)->FinishDate;
        $CodeMeli = json_decode($request->Data)->CodeMeli;
        if (json_decode($request->Data)->CodeMeli != null) {
            $Orders = Order::whereBetween('created_at', [$StartDate, $FinishDate])->where('CodeMeli', $CodeMeli)->get();

        } else {
            $Orders = Order::whereBetween('created_at', [$StartDate, $FinishDate])->get();
        }

        foreach ($Orders as $order) {
            foreach (json_decode($order->ProductsID) as $item) {
                $Data = Shop::find($item);
                $shop[] = array(
                    'id' => $Data->id,
                    'Name' => $Data->Name,
                    'Price' => $Data->Price,
                    'Date' => Verta::instance($order->created_at)->format('Y/m/d')

                );
                $Price += $Data->Price;


            }
        }
        return view('Admin.Order.pdfAll')->with([
            'CodeMeli' => $CodeMeli,
            'StartDate' => Verta::instance($StartDate)->format('Y/m/d'),
            'FinishDate' => Verta::instance($FinishDate)->format('Y/m/d'),
            'Products' => $shop,
            'Price' => $Price

        ]);
    }


    public function FilterPost(Request $request)
    {
        if ($request->CodeMeli != null) {
            $Orders = Order::whereBetween('created_at', [$request->StartDate, $request->FinishDate])->where('CodeMeli', $request->CodeMeli)->paginate(25);

        } else {
            $Orders = Order::whereBetween('created_at', [$request->StartDate, $request->FinishDate])->paginate(25);
        }
        $Dates = [$request->StartDate, $request->FinishDate];
        return view('Admin.Order.Report')->with(['Orders' => $Orders, 'Dates' => $Dates]);
    }

    public function Mali($id)
    {
        $Orders = Order::find($id);
        return view('Admin.Order.Mali')->with(['Orders' => $Orders]);

    }
}
