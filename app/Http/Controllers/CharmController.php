<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charm;

class CharmController extends Controller
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
            $hasCharm = '';
            $model = new Charm(array(), 'user_charms');

            $hasCharm = $model->where('charmId', $charm['id'])->where('characterId', $character)->first();

            if($hasCharm == '') {
                $model->saveUserCharms($charm['id'],$character, $charm['notes']);
            } else if(array_key_exists('notes', $charm)) {
                $model->updateUserCharms($charm['id'],$character, $charm['notes']);
            }
        }

        return true;
    }

    public function retrieve( $character ) {
        $model = new Charm;
        
        $charm = $model->retrieveUserCharms($character);
        return $charm;
    }

    public function searchCharms(Request $request) {
        return Charm::where('name', 'LIKE', '%'.$request->q.'%')->get();
    }
}
