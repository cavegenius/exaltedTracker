<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Willpower;

class WillpowerController extends Controller
{
    /**
     * Saves the willpower for a new character
     */
    public static function saveNewWillpowerData( $willpowers, $character ) {
        $willpower = 0;
        $available = 0;
        foreach( $willpowers as $key => $value ) {
            if ( is_numeric($key) ) {
                $total = ($key > $willpower) ? $key : $willpower;
            } else {
                $number = substr($key, -1);
                $available = $number>$available ? $number : $available;
            }
        }

        $willpower = new Willpower;
        $willpower->characterId = $character;
        $willpower->total = $total;
        $willpower->available = $available;
        $willpower->save();
    }
}
