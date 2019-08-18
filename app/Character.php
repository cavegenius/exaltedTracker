<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Character extends Model
{
    public function getCharacter($user) {
        $character = DB::table('characters')->where('userId', $user)->first();

        return $character;
    }
}
