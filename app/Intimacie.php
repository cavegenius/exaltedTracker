<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intimacie extends Model
{
    public $timestamps = false;
    protected $fillable = ['characterId'];
}
