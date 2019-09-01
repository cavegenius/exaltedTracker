<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spell;

class SpellController extends Controller
{
    /**
     * Saves the spell for a new character
     */
    public function save( $spell, $character ) {
        $saveData = array();

        foreach( $spell as $key => $value ) {
            preg_match('/[^\d]+/', $key, $textMatch);
            preg_match('/\d+/', $key, $numMatch);
            $number = $numMatch[0];
            $string = $textMatch[0];
            $saveData[$number][$string] = $value;
        }

        foreach($saveData as $spell) {
            if(array_key_exists('id', $spell)) {
                $spellModel = Spell::firstOrNew(['id' => $spell['id']]);
            } else {
                $spellModel = new Spell;
            }
            $spellModel->characterId = $character;
            $spellModel->name  = $spell['name'];
            $spellModel->circle = $spell['circle'];
            $spellModel->cost = $spell['cost'];
            $spellModel->duration = $spell['duration'];
            $spellModel->keywords = $spell['keywords'];
            $spellModel->book = $spell['book'];
            $spellModel->save();
        }

        return true;
    }

    public function retrieve( $character ) {
        $model = new Spell;
        
        $spell = $model->where('characterId', $character)->get();
        return $spell;
    }
}
