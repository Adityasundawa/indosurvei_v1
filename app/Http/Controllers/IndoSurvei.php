<?php

namespace App\Http\Controllers;

use App\Models\ShortQuestion;
use App\Models\Survei_answer;
use App\Models\Survey;
use App\Models\Typesurvey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class IndoSurvei extends Controller
{
    public function share($id)
    {
        $id = Crypt::decrypt($id);
        $data['survei'] = Survey::find($id);
        $data['type_survey'] = Typesurvey::where('survey_id',$id)->get();
     
        return view('indosurvei.survei.share',$data);
    }

    public function answer_survei(Request $request)
    {
        $cek_type = Typesurvey::where('survey_id', $request['id_survei'])->get();
        foreach ($cek_type as $type) {
            if ($type['type'] == "Jawaban Singkat") {
                Survei_answer::create([
                    'survey_id' => $request['id_survei'],
                    'question_id' => $request['id_question'],
                    'answer' => $request['jawaban-singkat'],
                ]);
            } else if ($type['type'] == "Pilihan Ganda") {
                Survei_answer::create([
                    'survey_id' => $request['id_survei'],
                    'question_id' => $request['id_question'],
                    'answer' => $request['pilihan'],
                ]);
            }
        }
        Alert::success('Selamat', 'Item  Berhasil Di Update');
        return redirect()->back();
    }
}
