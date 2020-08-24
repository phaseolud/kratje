<?php

namespace App\Http\Controllers\Auth;

use App\Game;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('index');
    }


    public function store()
    {
        request()->validate([
            'username' => 'required|alpha|max:10',
            'role' => 'required|in:coach,player',
        ]);

        $user = User::create([
            'username' => request('username'),
            'role' => request('role'),
            'game_id' => Game::where('pin', session('pin'))->first()->id,
        ]);

        Auth::login($user);
        return redirect(route('home'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function index()
    {
        $users = Game::where('pin', session(('pin')))->first()->users;
        return view('user.index', compact('users'));
    }
}
