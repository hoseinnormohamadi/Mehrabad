<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'UserID' , 'ProductsID' , 'Price' , 'CodeMeli' , 'OrderDate'
    ];

    public function User(){
        return $this->belongsTo(User::class,'UserID','id');
    }
}
