<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Armor;

class ArmorController extends Controller
{
    /**
     * Saves the Armor for a new character
     */
    public function save( $armors, $character ) {
        $saveData = array();
        foreach( $armors as $key => $value ) {
            preg_match('/[^\d]+/', $key, $textMatch);
            preg_match('/\d+/', $key, $numMatch);
            $number = $numMatch[0];
            $string = $textMatch[0];
            $saveData[$number][$string] = $value;
        }

        foreach($saveData as $armor) {
            $armorModel = Armor::firstOrNew(['characterId' => $character, 'name' => $armor['name']]);
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

    public function retrieve( $character ) {
        $model = new Armor;
        //$attributes = $model->getAttributesDetails( $character );
        $armor = $model->where('characterId', $character)->get();
        return $armor;
    }
}
