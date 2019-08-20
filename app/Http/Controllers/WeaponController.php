<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Weapon;

class WeaponController extends Controller
{
    /**
     * Saves the Weapon for a new character
     */
    public function save( $weapons, $character ) {
        $saveData = array();
        foreach( $weapons as $key => $value ) {
            preg_match('/[^\d]+/', $key, $textMatch);
            preg_match('/\d+/', $key, $numMatch);
            $number = $numMatch[0];
            $string = $textMatch[0];
            $saveData[$number][$string] = $value;
        }

        foreach($saveData as $weapon) {
            $weaponModel = Weapon::firstOrNew(['characterId' => $character, 'name' => $weapon['name']]);
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

    public function retrieve( $character ) {
        $model = new Weapon;
        $weapon = $model->where('characterId', $character)->get();
        return $weapon;
    }
}
