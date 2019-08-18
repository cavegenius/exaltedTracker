<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Armor;

class ArmorController extends Controller
{
    /**
     * Saves the Armor for a new character
     */
    public static function saveNewArmorData( $armors, $character ) {
        $saveData = array();
        foreach( $armors as $key => $value ) {
            preg_match('/[^\d]+/', $key, $textMatch);
            preg_match('/\d+/', $key, $numMatch);
            $number = $numMatch[0];
            $string = $textMatch[0];
            $saveData[$number][$string] = $value;
        }

        foreach($saveData as $armor) {
            $armorModel = new Armor;
            $armorModel->characterId = $character;
            $armorModel->name  = $armor['name'];
            $armorModel->soak   = $armor['soak'];
            $armorModel->hard   = $armor['hard'];
            $armorModel->mp   = $armor['mp'];
            $armorModel->tags  = $armor['tags'];
            $armorModel->save();
        }

        return true;
    }
}
