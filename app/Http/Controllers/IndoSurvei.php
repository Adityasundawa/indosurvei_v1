<?php

namespace App\Http\Controllers;

use App\Models\ShortQuestion;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class IndoSurvei extends Controller
{
    public function share($id)
    {
        $id = Crypt::decrypt($id);
        $data['survei'] = Survey::find($id);
        $data['question'] = ShortQuestion::where('survey_id',$id)->first();
        return view('indosurvei.survei.share',$data);
    }
}
