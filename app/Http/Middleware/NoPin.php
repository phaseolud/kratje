<?php

namespace App\Http\Middleware;

use Closure;

class NoPin
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
        if(session()->has('pin')){
            return redirect()->route('home')->with('warning','You have already created a game. If you want to create a new game/pin, please log out first');
        }

        return $next($request);
    }
}
