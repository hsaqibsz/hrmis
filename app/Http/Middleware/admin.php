<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class admin
{
     
    public function handle($request, Closure $next)
    {
        if (\Auth::user()->admin==0){
        Session::flash('info','You do not has the aughority to visit this page');
         return redirect(route('welcome'));

}
        return $next($request);
    }

}
