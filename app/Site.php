<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = [
        'AboutUs','Name','Icon','Enamad','Smandehi','PhoneNumber','Address','Facebook','twitter','instagram','Telegram','Email'
    ];


    public static function Icon(){
        return 'assets/img/favicon.png';
    }

    public static function Name(){
        return Site::find(1)->Name;
    }

    public static function AboutUs(){
        return Site::find(1)->AboutUs;
    }
    public static function PhoneNumber(){
        return Site::find(1)->PhoneNumber;
    }
    public static function Email(){
        return Site::find(1)->Email;
    }
}
