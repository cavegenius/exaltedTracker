<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attribute;

class AttributeController extends Controller
{
    public function __construct() {
        $this->model = new Attribute;
    }
    
    /**
     * Saves the attributes for a new character
     */
    public static function saveNewAttributeData( $attributes, $character ) {
        $saveData = array();
        foreach( $attributes as $attribute => $value ) {
            preg_match('/[^\d]+/', $attribute, $textMatch);
            preg_match('/\d+/', $attribute, $numMatch);
            $number = $numMatch[0];
            $string = $textMatch[0];
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

    public function getAttributes( $character ) {
        $model = new Attribute;
        $attributes = $model->getAttributesDetails( $character );

        return $attributes;
    }
}
