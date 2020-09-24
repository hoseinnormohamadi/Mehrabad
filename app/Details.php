<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    protected $fillable = [
        'HowToBuy' , 'SendProduct' , 'PaymentMethod' ,
        'Questions' , 'UseSite' , 'Privacy' ,
        'WorkWithCompany' , 'Jobs' , 'CallUs' , 'AboutUs'
    ];
}
