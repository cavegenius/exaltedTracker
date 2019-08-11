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

        
        return view('character');
    }

    public function characterDetails() {
        $return = [];
        $user = Auth::id();
        $model = new Character;
        $character = $model->where('userId', $user);
        if($character->count()) {
            $return[] = $character;
            $return[] = 'hello';
        } else {
            $return[] = 'No Character';
        }
        return $return;
        //return view('character')->with('character', $character);
    }
}
