<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Intimacie;

class IntimacieController extends Controller
{
    /**
     * Saves the Intimacy for a new character
     */
    public function save( $inimacies, $character ) {
        $saveData = array();
        foreach( $inimacies as $key => $value ) {
            preg_match('/[^\d]+/', $key, $textMatch);
            preg_match('/\d+/', $key, $numMatch);
            $number = $numMatch[0];
            $string = $textMatch[0];
            $saveData[$number][$string] = $value;
        }

        foreach($saveData as $intimacy) {
            if(array_key_exists('id', $intimacy)) {
                $intimacyModel = Intimacie::firstOrNew(['id' => $intimacy['id']]);
            } else {
                $intimacyModel = new Intimacie;
            }
            $intimacyModel->characterId = $character;
            $intimacyModel->intimacy  = $intimacy['intimacy'];
            $intimacyModel->intensity = $intimacy['intensity'];
            $intimacyModel->save();
        }

        return true;
    }

    public function retrieve( $character ) {
        $model = new Intimacie;
        $intimacie = $model->where('characterId', $character)->get();
        return $intimacie;
    }
}
