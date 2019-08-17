<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attribute;

class AttributeController extends Controller
{
    /**
     * Saves the attributes for a new character
     */
    public static function saveNewAttributeData( $attributes, $character ) {
        $saveData = array();
        foreach( $attributes as $attribute => $value ) {
            $number = substr($attribute, -1);
            $string = substr($attribute, 0, -1);
            $saveData[$string] = $number;
        }

        $attribute = new Attribute;
        $attribute->characterId = $character;
        foreach( $saveData as $key => $value ) {
            $attribute->$key = $value;
        }
        
        if( $attribute->save() ) {
            return true;
        } else {
            return false;
        }
    }
}
