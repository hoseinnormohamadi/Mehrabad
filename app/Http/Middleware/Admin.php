<?php

namespace App\Http\Middleware;

use App\Http\Controllers\RedirectController;
use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if(Auth::user()->Rule == 'Admin'){
            return $next($request);
        }
        return RedirectController::Redirect(route('Index') , 'شما اجازه دسترسی به این بخش را ندارید');
    }
}
