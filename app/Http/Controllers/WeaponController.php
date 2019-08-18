<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Weapon;

class WeaponController extends Controller
{
    /**
     * Saves the Weapon for a new character
     */
    public static function saveNewWeaponData( $weapons, $character ) {
        $saveData = array();
        foreach( $weapons as $key => $value ) {
            preg_match('/[^\d]+/', $key, $textMatch);
            preg_match('/\d+/', $key, $numMatch);
            $number = $numMatch[0];
            $string = $textMatch[0];
            $saveData[$number][$string] = $value;
        }

        foreach($saveData as $weapon) {
            $weaponModel = new Weapon;
            $weaponModel->characterId = $character;
            $weaponModel->name  = $weapon['name'];
            $weaponModel->wit   = $weapon['wit'];
            $weaponModel->dmg   = $weapon['dmg'];
            $weaponModel->dec   = $weapon['dec'];
            $weaponModel->rng   = $weapon['rng'];
            $weaponModel->tags  = $weapon['tags'];
            $weaponModel->save();
        }

        return true;
    }
}
