<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Character;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\AbilityController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\WillpowerController;
use App\Http\Controllers\EssenceController;
use App\Http\Controllers\MeritController;
use App\Http\Controllers\AnimaController;
use App\Http\Controllers\AuraController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\DragonExperienceController;
use App\Http\Controllers\WeaponController;
use App\Http\Controllers\ArmorController;
use App\Http\Controllers\DefenseController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\IntimacieController;
use App\Http\Controllers\CharmController;
use App\Http\Controllers\InventoryController;

class CharacterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
        $this->model = new Character;
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

    /**
     * Returns JSON formatted data about a character
     * 
     */
    public function characterDetails() {
        $return = [];
        $user = Auth::id();
        $types = ['attribute', 'ability', 'specialization', 'willpower', 'essence', 'merit', 'anima', 'aura', 'experience', 'dragonExperience', 'weapon', 'defense', 'health', 'armor', 'intimacie', 'charm', 'inventory'];

        $character = $this->model->getCharacter($user);
        // If the character does not exist stop here and return
        if(!$character->id) {
           return ['No Character'];
        }

        $return['character']       = $character;

        // Loop through the different character information sections
        foreach( $types as $type) {
            $controllerName = 'App\\Http\\Controllers\\'.ucfirst($type).'Controller';
            $controller = new $controllerName();
            $result = $controller->retrieve($character->id);
            $return[$type]      = $result;
        }

        return $return;
    }

    /**
     * Processes the form request to save the character sheet.
     * 
     */
    public function store(Request $request) {
        if (!Auth::check()) {
            return redirect('login');
        }
        
        // Set Validation rules.
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

        // If the character does not exist Save as a new character otherwise edit the existing.
        $user = Auth::id();
        $model = new Character;

        //Check for existing character
        $character = $model->where('userId', $user);
        
        $this->saveCharacter($results);
        
        // Once saved return to the character screen
        return redirect('/character')->with('status', 'Saved');
    }

    /**
     * Formats the character data in to an easy to manage array with identifiable keys.
     * 
     */
    private function formatCharacterData( $data ) {
        $results = [];
        // Need to remove the CSRF Token
        unset($data['_token']);
        foreach ( $data as $key => $value ){
            if( $value != "" ) {
                $keys = explode('-', $key);
                $results[$keys[0]][$keys[1]] = $value;
            }
        }

        return $results;
    }

    /**
     *  Performs the save for all types of data for a character sheet
     * 
     */
    private function saveCharacter( $data ) {
        $user = Auth::id();

        // Save the main Character Details first
        $characterId = $this->save( $data['character'], $user );

        // Now we start using the other controllers to save the rest of the information on bit at a time.
        $types = [ 'attribute' => 'attributes', 
                   'ability' => 'abilities',
                   'specialization' => 'specialization',
                   'willpower' => 'willpower',
                   'essence' => 'essence',
                   'merit' => 'merit',
                   'anima' => 'anima',
                   'aura' => 'aura',
                   'experience' => 'experience',
                   'dragonExperience' => 'dragonExperience',
                   'weapon' => 'weapon',
                   'defense' => 'defense',
                   'health' => 'health',
                   'armor' => 'armor',
                   'intimacie' => 'intimacy',
                   'charm' => 'charm',
                   'inventory' => 'inventory'];
                   
        foreach( $types as $type => $name) {
            $controllerName = 'App\\Http\\Controllers\\'.ucfirst($type).'Controller';
            $controller = new $controllerName();
            if(array_key_exists($name, $data)) {
                $controller->save($data[$name], $characterId);
            }
            //$return[$type]      = $result;
        }
    }

    /**
     * Performs the save for just the section of character details
     * 
     */
    private function save( $data, $user ) {
        $character = Character::firstOrNew(['userId' => $user]);
        $character->userId = $user;
        $character->name = $data['name'];
        $character->player = $data['player'];
        $character->aspect = $data['aspect'];
        $character->concept = $data['concept'];
        $character->anima = $data['anima'];
        $character->origin = $data['origin'];
        $character->save();

        return $character->id;
    }
}
