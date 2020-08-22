<?php

namespace App\Http\Middleware;

use Closure;

class CheckPin
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
        if(!session()->has('pin')){
            return redirect()->route('home')->with('warning',"You don't have a game/pin yet. Please create a game first or log in on the top right");
        }
        
        return $next($request);
    }
}
