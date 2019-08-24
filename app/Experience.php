<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public $timestamps = false;
    protected $fillable = ['characterId'];

    public function saveExperienceLog( $data ) {
        $experienceModel = DragonExperience::firstOrNew(['characterId' => $data['characterId']]);
        $experienceModel->table ='dragon_experiences';
        $experienceModel->characterId = $data['characterId'];;
        $experienceModel->current += $data['dragonExperience'];
        $experienceModel->total += $data['dragonExperience'];
        $experienceModel->save();

        $experienceModel = Experience::firstOrNew(['characterId' => $data['characterId']]);
        $experienceModel->characterId = $data['characterId'];;
        $experienceModel->current += $data['experience'];
        $experienceModel->total += $data['experience'];
        $experienceModel->save();

        $this->table = 'experience_logs';
        $this->characterId = $data['characterId'];
        $this->experience = $data['experience'];
        $this->dragonExperience = $data['dragonExperience'];
        $this->SessionDate = $data['sessionDate'];
        $this->save();
    
        return true;
    }

    public function retrieveExperienceLog($characterId) {
        $this->table = 'experience_logs';
        $logs = $this->where('characterId', $characterId)->get();
        return $logs;
    }
}
