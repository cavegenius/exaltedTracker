<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evocation;

class EvocationController extends Controller
{
    /**
     * Saves the evocation for a new character
     */
    public function save( $evocations, $character ) {
        $saveData = array();

        foreach( $evocations as $key => $value ) {
            preg_match('/[^\d]+/', $key, $textMatch);
            preg_match('/\d+/', $key, $numMatch);
            $number = $numMatch[0];
            $string = $textMatch[0];
            $saveData[$number][$string] = $value;
        }

        foreach($saveData as $evocation) {
            if(array_key_exists('id', $evocation)) {
                $evocationModel = Evocation::firstOrNew(['id' => $evocation['id']]);
            } else {
                $evocationModel = new Evocation;
            }
            $evocationModel->characterId = $character;
            $evocationModel->name  = $evocation['name'];
            $evocationModel->type = $evocation['type'];
            $evocationModel->duration = $evocation['duration'];
            $evocationModel->cost = $evocation['cost'];
            $evocationModel->element = $evocation['element'];
            $evocationModel->book = $evocation['book'];
            $evocationModel->effect = $evocation['effect'];
            $evocationModel->artifact = $evocation['artifact'];
            $evocationModel->attunement = $evocation['attunement'];
            $evocationModel->save();
        }

        return true;
    }

    public function retrieve( $character ) {
        $model = new Evocation;
        
        $evocation = $model->where('characterId', $character)->get();
        return $evocation;
    }
}
