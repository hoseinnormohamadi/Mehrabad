<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Traits\CustomAuth;
use App\User;
use http\Env\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use CustomAuth;
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    public function authenticate(Request $request)
    {
        $credentials = $request->only('CodeMeli', 'password');
        if ($user = User::where($credentials)->first()) {
            auth()->login($user);
            if (Auth::user()->Rule == 'Admin'){
                return redirect()->intended('Dashboard');
            }else{
                return redirect()->intended();

            }
        }
        return Redirect::to("login");
    }


    public function username()
    {
        return 'CodeMeli';
    }

}
