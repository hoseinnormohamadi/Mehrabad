<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class WishList extends Model
{
    protected $fillable = [
        'UserID' , 'ProductID'
    ];


    public static function Price(){
        $Price = 0;
        foreach (WishList::where('UserID' , Auth::id())->get() as $item) {
            $Product = Shop::find($item->ProductID);
            $Price += $Product->Price;
        }
        return $Price;
    }

    public static function Wishes(){
        $Product = [] ;
        foreach (WishList::where('UserID' , Auth::id())->get() as $item) {
            $Product[] = Shop::find($item->ProductID);
        }
        return $Product;
    }
}
