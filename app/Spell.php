<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spell extends Model
{
    public $timestamps = false;
    protected $fillable = ['characterId'];
}
