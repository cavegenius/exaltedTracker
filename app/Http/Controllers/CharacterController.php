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
            'character-name' => 'required',
            'character-player' => 'required',
            'character-aspect' => 'required',
            'character-concept' => 'required',
            'character-anima' => 'required',
            'character-origin' => 'required'
        ]);
        
        // Format the data to send to the save or edit functions
        $results = $this->formatCharacterData($request->post());
//echo '<pre>';
//var_dump($results);
//echo '</pre>';
//die;
        // If the character does not exist Save as a new character otherwise edit the existing.
        $user = Auth::id();
        $model = new Character;
        $character = $model->where('userId', $user);
        if(!$character->count()) {
            $this->saveNewCharacter($request);
        } else {
            $this->editExistingCharacter($request);
        }

        //return redirect('/character')->with('status', 'Saved');
    }

    private function formatCharacterData( $data ) {
        $results = [];
        unset($data['_token']);
        foreach ( $data as $key => $value ){
            if( !empty($value ) ) {
                $keys = explode('-', $key);
                $results[$keys[0]][$keys[1]] = $value;
            }
        }

        return $results;
    }

    private function saveNewCharacter( $data ) {
        $user = Auth::id();

        // Save the main Character Details first
        $this->saveNewCharacterData( $data['character'], $user );

        // Now we start using the other controllers to save the rest of the information on bit at a time.
    }

    private function saveNewCharacterData( $data, $user ) {
        $character = new Character;
        $character->userId = $user;
        $character->name = $data['name'];
        $character->player = $data['player'];
        $character->aspect = $data['aspect'];
        $character->concept = $data['concept'];
        $character->anima = $data['anima'];
        $character->origin = $data['origin'];
        $character->save();
    }

    private function editExistingCharacter( $data ) {
        
    }
}
