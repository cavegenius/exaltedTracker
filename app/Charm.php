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

    public function saveUserCharms($charmId, $characterId, $notes) {
        $this->table = 'user_charms';
        $this->characterId = $characterId;
        $this->charmId = $charmId;
        $this->notes = $notes;
        $this->save();
    }

    public function updateUserCharms($charmId, $characterId, $notes) {
        $this->table = 'user_charms';
        $charm = $this->where('charmId', $charmId)->where('characterId', $characterId)->first();
        $charm->notes = $notes;
        $charm->save();
    }

    public function retrieveUserCharms($characterId) {
        $this->table = 'user_charms';
        $charms = $this->where('characterId', $characterId)->get();

        $this->table = 'charms';
        $charmData = array();

        $i=0;
        foreach($charms as $key => $value) {
            $id = $value->charmId;
            $charmData[$i] = $this->where('id', $id)->first();
            $charmData[$i]['notes'] = $value->notes;
            $i++;
        }
        return $charmData;
    }

    public function deleteUserCharm($id, $characterId) {
        $this->table = 'user_charms';
        $this->where('charmId', $id)->where('characterId', $characterId)->delete();

        return true;
    }

    public function getDetails($id) {
        $charm = $this->where('id', $id)->first();

        return $charm;
    }

}
