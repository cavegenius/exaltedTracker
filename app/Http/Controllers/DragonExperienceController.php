<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DragonExperience;

class DragonExperienceController extends Controller
{
    /**
     * Saves the Dragon Experience for a new character
     */
    public static function saveNewDragonExperienceData( $dragonExperience, $character ) {
        $dragonExperienceModel = new DragonExperience;
        $dragonExperienceModel->characterId = $character;
        $dragonExperienceModel->current = $dragonExperience['current'];
        $dragonExperienceModel->total = $dragonExperience['total'];
        $dragonExperienceModel->save();
    }
}
