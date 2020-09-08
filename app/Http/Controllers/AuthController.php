<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {


    public function index(){
        return view('auth.login');
    }
    public function Login(Request $request)
    {
        $credentials = $request->only('CodeMeli', 'password');
        dd($credentials);

        if (Auth::attempt($credentials))
        {
            return redirect()->intended('dashboard');
        }
    }

}
