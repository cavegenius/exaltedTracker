<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aura;

class AuraController extends Controller
{
    /**
     * Saves the Aura for a new character
     */
    public static function saveNewAuraData( $aura, $character ) {
        $auraModel = new Aura;
        $auraModel->characterId = $character;
        $auraModel->type = $aura['aura'];
        $auraModel->save();
    }

    public function retrieve( $character ) {
        $model = new Aura;
        //$attributes = $model->getAttributesDetails( $character );
        $aura = $model->where('characterId', $character)->get();
        return $aura;
    }
}
