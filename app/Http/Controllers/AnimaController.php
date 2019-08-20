<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anima;

class AnimaController extends Controller
{
    /**
     * Saves the Anima for a new character
     */
    public function save( $anima, $character ) {
        $animaModel = Anima::firstOrNew(['characterId' => $character]);
        $animaModel->characterId = $character;
        $animaModel->level = $anima['anima'];
        $animaModel->save();
    }

    public function retrieve( $character ) {
        $model = new Anima;
        $anima = $model->where('characterId', $character)->get();
        return $anima;
    }
}
