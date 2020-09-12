<?php

namespace App\Exports;

use App\Order;
use App\Shop;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class OrderExport implements FromArray, WithHeadings
{

    use Exportable;

    public function __construct($id)
    {
        $this->id = $id;
    }


    public function array(): array
    {
        $Order = Order::where('id' , $this->id)->first();
        foreach (json_decode($Order->ProductsID) as $product) {
            $Product[] = Shop::find($product)->Name;
        }
        $Product = implode( "    /    ",$Product );
        $FinalOrder = array([
            'Name' => $Order->User->FirstName . ' ' . $Order->User->LastName,
            'Price' => $Order->Price,
            'Products' => $Product,
            'CodeMeli' => $Order->CodeMeli,
            'created_at' => $Order->created_at
        ]);
        return $FinalOrder;
    }

    public function headings(): array
    {
        return [
            'نام کاربر',
            'مبلغ فاکتور',
            'محصولات',
            'کد ملی',
            'تاریخ خرید',
        ];
    }


}
