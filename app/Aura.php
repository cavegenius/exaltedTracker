<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aura extends Model
{
    public $timestamps = false;
    protected $fillable = ['characterId'];
}
