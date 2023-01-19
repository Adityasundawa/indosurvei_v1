<?php

namespace App\Http\Controllers;

use App\Models\Multiplechoice;
use App\Models\MultiplechoicesAnswer;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Question;
use App\Models\ShortQuestion;
use App\Models\Survey;
use App\Models\Typesurvey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Question\Question as QuestionQuestion;

class UserController extends Controller
{
    public function dashboard()
    {
       

        // $data['question'] = Question::where('users_id',Auth::user()->id)->get();
        $data['question'] = Survey::where('users_id',Auth::user()->id)->get();
        return view('indosurvei.dashboard',$data);
     
    }
    public function action_survey(Request $request)
    {
        // $request->validate([
        //     'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        if($request->hasFile('gambar')){
            $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time().'.'.$request->gambar->extension();  
            $request->gambar->move(public_path('images/background/survey'), $imageName);
        }else{
            $imageName = 'default.png';
        }
        

        $question = Survey::create([
           'title' => $request['judul'],
           'category' =>  $request['kategori'],
           'description' =>  $request['deskripsi'],
           'users_id' =>  Auth::user()->id,
           'images' =>  $imageName,
           'answer_id' => 0,
        ]);
        if ($question) {
            Session::flash('message', 'sukses'); 
            return redirect('edit-survei/'.Crypt::encrypt($question->id));
        }else{
             Alert::error('Warning', 'Survei Tidak Berhasil Dibuat');
            view('indosurvei.dashboard');
        }
    }

    public function edit_survei($id)
    {
        $id = Crypt::decrypt($id);
        $data['question'] = Survey::find($id);
        $data['id'] = $id;
        $data['type_survey'] = Typesurvey::where('survey_id',$id)->get();

        return view('indosurvei.survei.edit_survei',$data);
    }

    public function dashboard_action_survei($id,Request $request)
    {
        $id = Crypt::decrypt($id);
         if($request['tanya-tipe'] == 'Jawaban Singkat'){
            $question = ShortQuestion::create([
                'question' => $request['tanya'],
                'survey_id' => $id,
            ]);
            $Typesurvey = Typesurvey::create([
                'survey_id' => $id,
                'type' => $request['tanya-tipe'],
                'question_id' =>  $question->id,
            ]);
            return redirect('edit-survei/'.Crypt::encrypt($id));
         }

         if($request['tanya-tipe'] == 'Pilihan Ganda'){
            $question = Multiplechoice::create([
                'question' => $request['tanya'],
                'survey_id' => $id,
            ]);
            $Typesurvey = Typesurvey::create([
                'survey_id' => $id,
                'type' => $request['tanya-tipe'],
                'question_id' =>  $question->id,
            ]);
            $n = count($request['pilihan']);
            for($i=0; $i < $n; $i++){
                $answerMultiple = MultiplechoicesAnswer::create([
                    'multiplechoices_id' => $question->id,
                    'answer' => $request['pilihan'][$i],
                    'survey_id' => $id,
                    'images' => 'default.png',
                ]);
            }
            Alert::success('Selamat', 'Item  Berhasil Di Tambahkan');
            return redirect()->back();


         }

    }

    public function get_edit(Request $request)
    {
       $data['question'] = ShortQuestion::find($request['id']);
       return view('indosurvei.ajax.edittanya',$data);
    }

    public function delete_short_question($id)
    {
        $item = ShortQuestion::findOrFail($id);
        $item->delete();
        $item2 = Typesurvey::where('question_id',$id);
        $item2->delete();
        return response()->json(['success' => 'Item deleted']);
    }


    public function delete_survei_all($id)
    {
        $item4 = Survey::find($id);
        $item4->delete();
        return response()->json(['success' => 'Item deleted']);
    }

    public function update_short_question(Request $request, $id) {
        $item = ShortQuestion::findOrFail($id);
        $item->update([
            'question' => $request['question'],
        ]);
        Alert::success('Selamat', 'Item  Berhasil Di Update');
       return redirect()->back();
    }


}
