<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DragonExperience;

class DragonExperienceController extends Controller
{
    /**
     * Saves the Dragon Experience for a new character
     */
    public function save( $dragonExperience, $character ) {
        $dragonExperienceModel = DragonExperience::firstOrNew(['characterId' => $character]);
        $dragonExperienceModel->characterId = $character;
        $dragonExperienceModel->current = $dragonExperience['current'];
        $dragonExperienceModel->total = $dragonExperience['total'];
        $dragonExperienceModel->save();
    }

    public function retrieve( $character ) {
        $model = new DragonExperience;
        $dragonExperience = $model->where('characterId', $character)->get();
        return $dragonExperience;
    }
}
