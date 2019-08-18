<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Armor;

class ArmorController extends Controller
{
    /**
     * Saves the Weapon for a new character
     */
    public static function saveNewArmorData( $armors, $character ) {
        $saveData = array();
        foreach( $armors as $key => $value ) {
            $number = substr($key, -1);
            $string = substr($key, 0, -1);
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
