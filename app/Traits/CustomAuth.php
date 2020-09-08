<?php


namespace App\Traits;

use Auth;

trait CustomAuth
{
    //Check Authed user is admin or not
    public function IsAdmin()
    {
        if (\Auth::user()->Rule == 'Admin') {
            return true;
        } else {
            return false;
        }
    }

    /*Check Authed user is publisher or not
    Param{
    PublishID
    }*/
    public function CheckPublisher($Pubid)
    {
        if ($Pubid == \Auth::id()) {
            return true;
        } else {
            return false;
        }
    }


}
