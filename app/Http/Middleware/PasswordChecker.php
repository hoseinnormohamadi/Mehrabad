<?php

namespace App\Http\Middleware;

use App\Http\Controllers\RedirectController;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Hash::check(Auth::user()->CodeMeli,Auth::user()->password)){
            return RedirectController::Redirect(route('Panel.Password'),'لطفا ابتدا رمز عبور خود را تعویض نمایید');
        }
        return $next($request);
    }
}
