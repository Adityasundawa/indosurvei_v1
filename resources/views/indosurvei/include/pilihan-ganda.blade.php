<?php 

use App\Models\MultiplechoicesAnswer;
use App\Models\Multiplechoice;
?>

<?php
$question = Multiplechoice::find($id_question);
$answer = MultiplechoicesAnswer::where('multiplechoices_id',$question->id)->get();
?>

<div class="col-12 border-bottom cus-hov p-3 edit-tanya-pilihan-ganda" data-type="Pilihan Ganda" data-type-class="pilihan-ganda-edit"
    data-bs-toggle="modal" data-bs-target="#editTanya-pilihan-ganda"  data-id="{{$id_question}}">
    <div class="d-flex">
        <div class="flex-shrink-0">
            <h5>
                {{$l++}}
            </h5>
        </div>
        <div class="flex-grow-1 ms-3">
            <div class="row">
                <div class="col-12">
                    <h5>
                        {{$question['question']}}
                    </h5>
                </div>
                <div class="col-12 mb-3">
                    <span class="badge bg-primary">Pilihan Ganda</span>
                </div>
                <?php $i = 1 ?>
                @foreach ($answer as $ans)
                <div class="col-auto mt-2 mb-2">
                    <div class="card" style="background: #f0f9ff">
                        <div class="card-body py-2">
                            <p class="card-text">Pilihan {{$i++}}</p>
                            <h4 class="card-title">{{$ans['answer']}}</h4>
                        </div>
                    </div>
                </div>
                @endforeach
              
                
            </div>
        </div>
    </div>
</div>
