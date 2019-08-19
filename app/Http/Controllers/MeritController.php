<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merit;

class MeritController extends Controller
{
    /**
     * Saves the Merit for a new character
     */
    public static function saveNewMeritData( $merits, $character ) {
        $saveData = array();
        foreach( $merits as $key => $value ) {
            if ( is_numeric($key) ) {
                $saveData[$key]['name'] = $value;
            } else {
                $saveData[$key[0]]['value'] = substr($key, -1);
            }
        }

        foreach($saveData as $merit) {
            $meritModel = new Merit;
            $meritModel->characterId = $character;
            $meritModel->name = $merit['name'];
            $meritModel->value = $merit['value'];
            $meritModel->save();
        }
        return true;
    }

    public function retrieve( $character ) {
        $model = new Merit;
        $merit = $model->where('characterId', $character)->get();
        return $merit;
    }
}
