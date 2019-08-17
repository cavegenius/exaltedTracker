<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialization;

class SpecializationController extends Controller
{
    /**
     * Saves the specializations for a new character
     */
    public static function saveNewSpecializationData( $specializations, $character ) {
        foreach( $specializations as $specialization) {
            $specializationModel = new Specialization;
            $specializationModel->characterId = $character;
            $specializationModel->specialization = $specialization;
            $specializationModel->save();
        }
        return true;
    }
}
