<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Defense;

class DefenseController extends Controller
{
    /**
     * Saves the Defenses for a new character
     */
    public static function saveNewDefenseData( $defense, $character ) {
        $defenseModel = new Defense;
        $defenseModel->characterId = $character;
        $defenseModel->naturalSoak  = $defense['naturalSoak'];
        $defenseModel->finalSoak   = $defense['finalSoak'];
        $defenseModel->parry   = $defense['parry'];
        $defenseModel->resolve   = $defense['resolve'];
        $defenseModel->evasion   = $defense['evasion'];
        $defenseModel->rush  = $defense['rush'];
        $defenseModel->guile  = $defense['guile'];
        $defenseModel->disengage  = $defense['disengage'];
        $defenseModel->joinBattle  = $defense['joinBattle'];
        
        if( $defenseModel->save() ) {
            return true;
        } else {
            return false;
        }
    }
}
