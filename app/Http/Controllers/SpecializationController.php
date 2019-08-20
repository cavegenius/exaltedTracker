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
        $saveData = array();

        foreach( $specializations as $key => $value ) {
            if ( is_numeric($key) ) {
                $saveData[$key]['name'] = $value;
            } else if($key[0] == 'i') {
                $saveData[$key[2]]['id'] = $value;
            }
        }

        foreach( $saveData as $specialization) {
            if(is_array($specialization) && array_key_exists('id', $specialization)) {
                $specializationModel = Specialization::firstOrNew(['id' => $specialization['id']]);
            } else {
                $specializationModel = new Specialization;
            }
            $specializationModel->characterId = $character;
            $specializationModel->specialization = $specialization['name'];
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
