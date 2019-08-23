<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charm;

class CharmController extends Controller
{
    /**
     * Saves the Charm for a new character
     */
    public function save( $charms, $character ) {
        $saveData = array();

        foreach( $charms as $key => $value ) {
            preg_match('/[^\d]+/', $key, $textMatch);
            preg_match('/\d+/', $key, $numMatch);
            $number = $numMatch[0];
            $string = $textMatch[0];
            $saveData[$number][$string] = $value;
        }
        
        
        foreach($saveData as $charm) {
            $model = new Charm;
            $hasCharm = $model->where('charmId', $charm['id'])->where('characterId', $character);
            print_r($hasCharm);
            if(!$hasCharm) {
echo 'hi';
die;
                $model->saveUserCharms($charm['id'],$character);
            }
        }
die;
        return true;
    }

    public function retrieve( $character ) {
        $model = new Charm;
        
        $charm = $model->retrieveUserCharms($character);
        return $charm;
    }
}
