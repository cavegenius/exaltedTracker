<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charm extends Model
{
    public $timestamps = false;
    protected $fillable = ['characterId'];

    /**
     * Create a new model instance.
     *
     * @return void
     */
    public function __construct($attributes = array(), $table = 'charms' ) {
        parent::__construct($attributes);
        $this->table = $table;
    }

    public function saveUserCharms($charmId, $characterId) {
        $this->table = 'user_charms';
        $this->characterId = $characterId;
        $this->charmId = $charmId;
        $this->save();
    }

    public function retrieveUserCharms($characterId) {
        $this->table = 'user_charms';
        $charms = $this->where('characterId', $characterId)->get();

        $this->table = 'charms';
        $charmData = array();

        foreach($charms as $key => $value) {
            $id = $value->charmId;
            $charmData[] = $this->where('id', $id)->first();
        }
        return $charmData;
    }

}
