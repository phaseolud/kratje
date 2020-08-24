<?php

namespace App\Http\Middleware;

use App\Game;
use Closure;

class GameStarted
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
        if(Game::where('pin',session('pin')->first()->started != null)) {
            return $next($request);
        }
        return redirect()->route('home');
    }
}
