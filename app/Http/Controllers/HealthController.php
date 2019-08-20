<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Health;

class HealthController extends Controller
{
    /**
     * Saves the Health for a new character
     */
    public function save( $healths, $character ) {
        $saveData = array();

        foreach( $healths as $key => $value ) { 
            // TODO: Account for 2 digit numbers at the end
            preg_match('/[^\d]+/', $key, $textMatch);
            preg_match('/\d+/', $key, $numMatch);
            $number = $numMatch[0];
            $string = $textMatch[0];
            $saveData[$number][$string] = $value;
        }

        foreach($saveData as $key => $health) {
            if(array_key_exists('id', $health)) {
                $healthModel = Health::firstOrNew(['id' => $health['id']]);
            } else {
                $healthModel = new Health;
            }
            $healthModel->characterId = $character;
            $healthModel->position  = $key;
            $healthModel->value = $health['text'];
            $healthModel->activated = array_key_exists( 'box', $health ) ? true : false;
            $healthModel->save();
        }

        return true;
    }

    public function retrieve( $character ) {
        $model = new Health;
        $health = $model->where('characterId', $character)->get();
        return $health;
    }
}
