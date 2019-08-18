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
            $number = substr($key, -1);
            $string = substr($key, 0, -1);
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
}
