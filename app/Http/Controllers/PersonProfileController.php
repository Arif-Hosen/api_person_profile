<?php

namespace App\Http\Controllers;

use App\Models\PersonProfile;
use Illuminate\Http\Request;

class PersonProfileController extends Controller
{
    public function index(Request $request)
    {
        // query string key is profile_ids
        $profile_ids = $request->profile_ids;

        $profiles = PersonProfile::whereNotIn('id', json_decode($profile_ids))->paginate(3);

        if(count($profiles) != 0){
            return response()->json([ 
                'data' => $profiles,
                 200
                ]);
        }
        // when new profile not found
        return response()->json([
             'data' => "New profile not found!",
              204
            ]);
        
    }
}
