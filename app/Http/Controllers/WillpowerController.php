<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Willpower;

class WillpowerController extends Controller
{
    /**
     * Saves the willpower for a new character
     */
    public function save( $willpowers, $character ) {
        $total = 0;
        $available = 0;
        foreach( $willpowers as $key => $value ) {
            if ( is_numeric($key) ) {
                $total = ($key > $total) ? $key : $total;
            } else {
                preg_match('/\d+/', $key, $numMatch);
                $number = $numMatch[0];
                $available = $number>$available ? $number : $available;
            }
        }

        $willpower = Willpower::firstOrNew(['characterId' => $character]);
        $willpower->characterId = $character;
        $willpower->total = $total;
        $willpower->available = $available;
        $willpower->save();
    }

    public function retrieve( $character ) {
        $model = new Willpower;
        $willpower = $model->where('characterId', $character)->get();
        return $willpower;
    }
}
