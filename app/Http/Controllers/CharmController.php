<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charm;

class CharmController extends Controller
{
    /**
     * Saves the Charm for a new character
     */
    public static function saveNewCharmData( $charms, $character ) {
        $saveData = array();
        foreach( $charms as $key => $value ) {
            preg_match('/[^\d]+/', $key, $textMatch);
            preg_match('/\d+/', $key, $numMatch);
            $number = $numMatch[0];
            $string = $textMatch[0];
            $saveData[$number][$string] = $value;
        }

        foreach($saveData as $charm) {
            $charmModel = new Charm;
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
        $model = new Charm;
        //$attributes = $model->getAttributesDetails( $character );
        $charm = $model->where('characterId', $character)->get();
        return $charm;
    }
}
