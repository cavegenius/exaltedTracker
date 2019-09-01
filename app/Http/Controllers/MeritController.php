<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merit;

class MeritController extends Controller
{
    /**
     * Saves the Merit for a new character
     */
    public function save( $merits, $character ) {
        $saveData = array();

        foreach( $merits as $key => $value ) {
            if ( is_numeric($key) ) {
                $saveData[$key]['name'] = $value;
            } else if($key[0] == 'i') {
                $saveData[$key[2]]['id'] = $value;
            } else {
                $number = explode ("v", $key);  
                $saveData[$number[0]]['value'] = substr($key, -1);
            }
        }

        foreach($saveData as $merit) {
            if(array_key_exists('id', $merit)) {
                $meritModel = Merit::firstOrNew(['id' => $merit['id']]);
            } else {
                $meritModel = new Merit;
            }
            $meritModel->characterId = $character;
            $meritModel->name = $merit['name'];
            if (array_key_exists('value',$merit)) {
                $meritModel->value = $merit['value'];
            } else {
                $meritModel->value = '0';
            }
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
