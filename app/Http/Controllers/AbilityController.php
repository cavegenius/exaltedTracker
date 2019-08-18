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
            preg_match('/[^\d]+/', $ability, $textMatch);
            preg_match('/\d+/', $ability, $numMatch);
            $number = $numMatch[0];
            $string = $textMatch[0];
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
