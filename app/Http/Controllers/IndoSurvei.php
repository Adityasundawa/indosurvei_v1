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
        $data['type_survey'] = Typesurvey::where('survey_id', $id)->get();

        return view('indosurvei.survei.share', $data);
    }

    public function answer_survei(Request $request)
    {
        $type_survey = Typesurvey::where('survey_id', $request['id_survei'])->get();
    
        foreach ($type_survey as $type) {

            switch ($type['type']) {
                case "Jawaban Singkat":
                    foreach ($request->id_question_singkat as $key => $id) {
                        $jawaban = $request->input('jawaban-singkat.' . $key);
                        Survei_answer::updateOrCreate([
                            'survey_id' => $request['id_survei'],
                            'question_id' => $id,
                            'answer' =>  $jawaban,
                        ]);
                    }
                    break;
                case "Pilihan Ganda":
                    foreach ($request->id_question_ganda as $key => $id) {
                        $pilihan = $request->input('pilihan_' . $id);
                        $answer_data = [
                            'question_id' => $id,
                            'answer' => $pilihan,
                            'survey_id' => $request['id_survei']
                        ];
                         Survei_answer::updateOrCreate($answer_data);
                    }
                    break;
            }
        }
            Alert::success('Selamat', 'Item  Berhasil Di Update');
        return redirect()->back();
    }
}
