<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;

class ExperienceController extends Controller
{
    /**
     * Saves the Experience for a new character
     */
    public function save( $experience, $character ) {
        $experienceModel = Experience::firstOrNew(['characterId' => $character]);
        $experienceModel->characterId = $character;
        $experienceModel->current = $experience['current'];
        $experienceModel->total = $experience['total'];
        $experienceModel->save();
    }

    public function retrieve( $character ) {
        $model = new Experience;
        $experience = $model->where('characterId', $character)->get();
        return $experience;
    }
}
