<?php

namespace App\Http\Controllers;

use App\Game;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GameController extends Controller
{
    //
    public function create()
    {
        return view('game.create');
    }

    public function store()
    {
        do {
            $pin = rand(11111, 99999);
        } while (Game::where('pin', $pin)->exists());

        Game::create(compact('pin'));
        session(compact('pin'));
        return redirect(route('user.create'));
    }

    public function logpin()
    {
        request()->validate([
            'pin' => 'numeric|exists:games'
        ]);

        session(compact('pin'));

        // TODO: redirect to a user create page
        return redirect(route('user.create'));
    }

    public function update()
    {
        if(request('start')) {
            $game = Game::where(session('pin'),'pin')->first();
            $game->started = Carbon::now();
            $game->save();
        }

        return redirect()->route('home');
    }

    public function show()
    {
        return view('game.show');
    }
}
