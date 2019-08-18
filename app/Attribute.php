<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Attribute extends Model
{
    public $timestamps = false;

    public function getAttributesDetails( $character ) {
        $attributes = DB::table('attributes')->where('characterId', $character)->first();

        return $attributes;
    }
}
