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

        // If the character does not exist stop here and return
        if(!$character->count()) {
           return ['No Character'];
        }

        $return[] = $character;
        $return[] = 'hello';

        $return['character']       = '';
        $return['attributes']      = '';
        $return['abilities']       = '';
        $return['specializations'] = '';
        $return['willpower']       = '';
        $return['essence']         = '';
        $return['merits']          = '';
        $return['anima']           = '';
        $return['aura']            = '';
        $return['experience']      = '';
        $return['dbExperience']    = '';
        $return['weapons']         = '';
        $return['defense']         = '';
        $return['health']          = '';
        $return['armor']           = '';
        $return['intimacies']      = '';
        $return['charms']          = '';
        $return['inventory']       = '';

        return $return;
    }

    public function store(Request $request) {
        if (!Auth::check()) {
            return redirect('login');
        }
        
        $this->validate($request, [
            'name' => 'required',
            'player' => 'required',
            'aspect' => 'required',
            'concept' => 'required',
            'anima' => 'required',
            'origin' => 'required'
        ]);
        
        // Format the data to send to the save or edit functions
        // CURRENT STOPPING POINT NEED TO FINISH FORMATTING DATA IF I WANT TO GROUP THEM EVEN FURTHER
        // IF NOT THEN MOVE ON TO SAVING THE DATA
        $results = $this->formatCharacterData($request->post());

        $user = Auth::id();
        $model = new Character;
        $character = $model->where('userId', $user);

        // If the character does not exist Save as a new character otherwise edit the existing.
        if(!$character->count()) {
            $this->saveNewCharacter($request);
        } else {
            $this->editExistingCharacter($request);
        }

        //return redirect('/character')->with('status', 'Saved');
    }

    private function formatCharacterData( $data ) {
        $results = [];
        foreach ( $data as $key => $value ){
            if( !empty($value) ) {
                $results[$key] = $value;
            }
        }

        return $results;
    }

    private function saveNewCharacter( $data ) {
        $user = Auth::id();
        $character = new Character;

        // Save the main Character Details first
        $character->userId = $user;
        $character->name = $data('name');
        $character->player = $data('player');
        $character->aspect = $data('aspect');
        $character->concept = $data('concept');
        $character->anima = $data('anima');
        $character->origin = $data('origin');
        //$character->save();

        // Now we start using the other controllers to save the rest of the information on bit at a time.
    }

    private function editExistingCharacter( $data ) {
        
    }
}
