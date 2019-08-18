<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Intimacie;

class IntimacieController extends Controller
{
    /**
     * Saves the Intimacy for a new character
     */
    public static function saveNewIntimacieData( $inimacies, $character ) {
        $saveData = array();
        foreach( $inimacies as $key => $value ) {
            $number = substr($key, -1);
            $string = substr($key, 0, -1);
            $saveData[$number][$string] = $value;
        }

        foreach($saveData as $intimacy) {
            $intimacyModel = new Intimacie;
            $intimacyModel->characterId = $character;
            $intimacyModel->intimacy  = $intimacy['intimacy'];
            $intimacyModel->intensity = $intimacy['intensity'];
            $intimacyModel->save();
        }

        return true;
    }
}
