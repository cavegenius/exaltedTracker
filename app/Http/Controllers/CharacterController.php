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
        //echo '<pre>';
        //var_dump($results);
        //echo '</pre>';
        //die;
        // If the character does not exist Save as a new character otherwise edit the existing.
        $user = Auth::id();
        $model = new Character;
        
        //Check for existing character
        $character = $model->where('userId', $user);
        if(!$character->count()) {
            // using a seperate function to save because of how many types of data will be saved
            $this->saveNewCharacter($results);
        } else {
            $this->editExistingCharacter($results);
        }

        // Once saved return to the character screen
        //return redirect('/character')->with('status', 'Saved');
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
            if( !empty($value ) ) {
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
    private function saveNewCharacter( $data ) {
        $user = Auth::id();

        // Save the main Character Details first
        $characterId = $this->saveNewCharacterData( $data['character'], $user );

        // Now we start using the other controllers to save the rest of the information on bit at a time.
        //Attributes
        AttributeController::saveNewAttributeData($data['attributes'], $characterId);
        // Abilities
        AbilityController::saveNewAbilityData($data['abilities'], $characterId);
        // Specializations
        SpecializationController::saveNewSpecializationData($data['specialization'], $characterId);
        // WillPower
        WillpowerController::saveNewWillpowerData($data['willpower'], $characterId);
        // Essence
        EssenceController::saveNewEssenceData($data['essence'], $characterId);
        // Merits
        MeritController::saveNewMeritData($data['merit'], $characterId);
        // Anima
        AnimaController::saveNewAnimaData($data['anima'], $characterId);
        // Aura
        AuraController::saveNewAuraData($data['aura'], $characterId);
        // Experience
        ExperienceController::saveNewExperienceData($data['experience'], $characterId);
        // DragonExperience
        //DragonExperienceController::saveNewDragonExperienceControllerData($data['dragonExperience'], $characterId);
        // Weapon
        //WeaponController::saveNewWeaponData($data['weapon'], $characterId);
        // Armor
        //ArmorController::saveNewArmorData($data['armor'], $characterId);
        // Defense
        //DefenseController::saveNewDefenseData($data['defense'], $characterId);
        // Health
        //HealthController::saveNewHealthData($data['health'], $characterId);
        // Intimacies
        //IntimacieController::saveNewIntimacieData($data['intimacy'], $characterId);
        // Charms
        //CharmController::saveNewCharmData($data['charm'], $characterId);
        // Inventory
        //InventoryController::saveNewInventoryData($data['inventory'], $characterId);
    }

    /**
     * Performs the save for just the section of character details
     * 
     */
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

        return $character->id;
    }

    private function editExistingCharacter( $data ) {
        
    }
}
