<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anima;

class AnimaController extends Controller
{
    /**
     * Saves the Anima for a new character
     */
    public static function saveNewAnimaData( $anima, $character ) {
        $animaModel = new Anima;
        $animaModel->characterId = $character;
        $animaModel->level = $anima['anima'];
        $animaModel->save();
    }
}
