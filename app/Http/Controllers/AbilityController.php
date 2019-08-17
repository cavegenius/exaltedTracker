<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ability;

class AbilityController extends Controller
{
    /**
     * Saves the abilities for a new character
     */
    public static function saveNewAbilityData( $abilities, $character ) {
        $saveData = array();
        foreach( $abilities as $ability => $value ) {
            $number = substr($ability, -1);
            $string = substr($ability, 0, -1);
            $saveData[$string] = $number;
        }

        $ability = new Ability;
        $ability->characterId = $character;
        foreach( $saveData as $key => $value ) {
            $ability->$key = $value;
        }
        
        if( $ability->save() ) {
            return true;
        } else {
            return false;
        }
    }
}
