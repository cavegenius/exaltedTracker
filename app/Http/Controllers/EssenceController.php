<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Essence;

class EssenceController extends Controller
{
    /**
     * Saves the essence for a new character
     */
    public function save( $essences, $character ) {
        $level = 0;
        $essenceModel = Essence::firstOrNew(['characterId' => $character]);
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

    public function retrieve( $character ) {
        $model = new Essence;
        $essence = $model->where('characterId', $character)->get();
        return $essence;
    }
}
