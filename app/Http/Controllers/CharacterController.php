<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Character;

class CharacterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        if (!Auth::check()) {
            return redirect('login');
        }

        //$user = Auth::id();
        //$character = Character::index($user);
        //return view('character')->with('character', $character);
        return view('character');
    }

    public function characterDetails() {
        return ['one','two'];
    }
}
