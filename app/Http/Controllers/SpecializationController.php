<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialization;

class SpecializationController extends Controller
{
    /**
     * Saves the specializations for a new character
     */
    public function save( $specializations, $character ) {
        foreach( $specializations as $specialization) {
            $specializationModel = Specialization::firstOrNew(['characterId' => $character, 'specialization' => $specialization]);
            $specializationModel->characterId = $character;
            $specializationModel->specialization = $specialization;
            $specializationModel->save();
        }
        return true;
    }

    public function retrieve( $character ) {
        $model = new Specialization;
        $specialization = $model->where('characterId', $character)->get();
        return $specialization;
    }
}
