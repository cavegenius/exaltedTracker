<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Experience;

class ExperienceController extends Controller
{
    /**
     * Saves the Experience for a new character
     */
    public function save( $experience, $character ) {
        $experienceModel = Experience::firstOrNew(['characterId' => $character]);
        $experienceModel->characterId = $character;
        $experienceModel->current = $experience['current'];
        $experienceModel->total = $experience['total'];
        $experienceModel->save();
    }

    public function retrieve( $character ) {
        $model = new Experience;
        $experience = $model->where('characterId', $character)->get();
        return $experience;
    }

    public function saveLog(Request $request) {
        if (!Auth::check()) {
            return redirect('login');
        }
        $this->validate($request, [
            'characterId' => 'required',
            'experience' => 'required',
            'dragonExperience' => 'required',
            'sessionDate' => 'required'
        ]);
        
        $results = $request->post();

        $model = new Experience;
        $model->saveExperienceLog($results);

        $json = json_encode(['message'=>'The log has been saved']);
        return $json;
    }

    public function viewLog(Request $request) {
        $results = $request->post();
        $characterId = $results['characterId'];

        $model = new Experience;
        $entries = $model->retrieveExperienceLog($characterId);

        return $entries;
    }
}
