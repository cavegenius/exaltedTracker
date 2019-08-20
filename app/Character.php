<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Character extends Model
{
    protected $fillable = ['userId'];

    public function getCharacter($user) {
        $character = DB::table('characters')->where('userId', $user)->first();

        return $character;
    }
}
