<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aura;

class AuraController extends Controller
{
    /**
     * Saves the Aura for a new character
     */
    public function save( $aura, $character ) {
        $auraModel = Aura::firstOrNew(['characterId' => $character]);
        $auraModel->characterId = $character;
        $auraModel->type = $aura['aura'];
        $auraModel->save();
    }

    public function retrieve( $character ) {
        $model = new Aura;
        $aura = $model->where('characterId', $character)->get();
        return $aura;
    }
}
