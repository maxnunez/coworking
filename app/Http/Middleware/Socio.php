<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Socio
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
        if(!Auth::check())
        {
            return redirect()->route('loginUser');
        }

        if(Auth::user()->rol == 'socio' || Auth::user()->rol == 'invitado')
        {
            return $next($request);
        }


    }
}
