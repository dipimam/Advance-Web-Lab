<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Validuser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('initiator.email'))
        {
            return $next($request);
        }

        return redirect()->route('initiator.login');
        
    }
}
