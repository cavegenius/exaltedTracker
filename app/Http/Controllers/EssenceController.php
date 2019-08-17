<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Essence;

class EssenceController extends Controller
{
    /**
     * Saves the essence for a new character
     */
    public static function saveNewEssenceData( $essences, $character ) {
        $level = 0;
        $essenceModel = new Essence;
        $essenceModel->characterId = $character;
        foreach( $essences as $key => $value ) {
            if ( is_numeric($key) ) {
                $level = ($key > $level) ? $key : $level;
            } else {
                $essenceModel->$key = $value;
            }
        }
        $essenceModel->level = $level;
        $essenceModel->save();
        return true;
    }
}
