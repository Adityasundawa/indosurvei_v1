<?php

namespace App\Http\Controllers;

use App\Models\ShortQuestion;
use App\Models\Survey;
use App\Models\Typesurvey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class IndoSurvei extends Controller
{
    public function share($id)
    {
        $id = Crypt::decrypt($id);
        $data['survei'] = Survey::find($id);
        $data['type_survey'] = Typesurvey::where('survey_id',$id)->get();
        return view('indosurvei.survei.share',$data);
    }
}
