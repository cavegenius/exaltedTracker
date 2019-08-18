<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;

class ExperienceController extends Controller
{
    /**
     * Saves the Experience for a new character
     */
    public static function saveNewExperienceData( $experience, $character ) {
        $experienceModel = new Experience;
        $experienceModel->characterId = $character;
        $experienceModel->current = $experience['current'];
        $experienceModel->total = $experience['total'];
        $experienceModel->save();
    }
}
