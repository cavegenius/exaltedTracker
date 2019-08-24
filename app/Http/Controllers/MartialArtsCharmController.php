<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MartialArtsCharm;

class MartialArtsCharmController extends Controller
{
    /**
     * Saves the Charm for a new character
     */
    public function save( $charms, $character ) {
        $saveData = array();

        foreach( $charms as $key => $value ) {
            preg_match('/[^\d]+/', $key, $textMatch);
            preg_match('/\d+/', $key, $numMatch);
            $number = $numMatch[0];
            $string = $textMatch[0];
            $saveData[$number][$string] = $value;
        }
        
        
        foreach($saveData as $charm) {
            if(array_key_exists('id', $charm)) {
                $charmModel = MartialArtsCharm::firstOrNew(['id' => $charm['id']]);
            } else {
                $charmModel = new MartialArtsCharm;
            }
            $charmModel->characterId = $character;
            $charmModel->name  = $charm['name'];
            $charmModel->type = $charm['type'];
            $charmModel->duration = $charm['duration'];
            $charmModel->cost = $charm['cost'];
            $charmModel->element = $charm['element'];
            $charmModel->book = $charm['book'];
            $charmModel->effect = $charm['effect'];
            $charmModel->save();
        }

        return true;
    }

    public function retrieve( $character ) {
        $model = new MartialArtsCharm;
        
        $charm = $model->where('characterId', $character)->get();
        return $charm;
    }
}
