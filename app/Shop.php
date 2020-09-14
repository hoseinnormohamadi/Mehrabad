<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'Name' , 'Images' , 'Description' , 'Price' , 'Count' , 'Status' , 'Category','Brand','Amazing','SubCategory','Takhfif'
    ];

    public function Categorys(){
        return $this->belongsTo(ShopCategory::class,'Category','id');
    }
}
