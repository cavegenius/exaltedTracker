<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Essence extends Model
{
    public $timestamps = false;
    protected $fillable = ['characterId'];
}
