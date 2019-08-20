<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charm extends Model
{
    public $timestamps = false;
    protected $fillable = ['characterId'];
}
