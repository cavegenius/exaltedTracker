<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Willpower extends Model
{
    public $timestamps = false;
    protected $fillable = ['characterId'];
}
