<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Health;

class HealthController extends Controller
{
    /**
     * Saves the Health for a new character
     */
    public static function saveNewHealthData( $healths, $character ) {
        $saveData = array();

        foreach( $healths as $key => $value ) { 
            // TODO: Account for 2 digit numbers at the end
            $number = substr($key, -1);
            $string = substr($key, 0, -1);
            $saveData[$number][$string] = $value;
        }

        foreach($saveData as $key => $health) {
            $healthModel = new Health;
            $healthModel->characterId = $character;
            $healthModel->position  = $key;
            $healthModel->value = $health['text'];
            $healthModel->activated = array_key_exists( 'box', $health ) ? true : false;
            $healthModel->save();
        }

        return true;
    }
}
