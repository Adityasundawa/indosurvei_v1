<?php 

use App\Models\ShortQuestion;
use App\Models\Typesurvey;
?>

<?php 

$question = ShortQuestion::find($id_question);

?>
<div class="col-12 border-bottom cus-hov p-3 edit-tanya modal-id" data-type="Jawaban Singkat"  data-id="{{$id_question}}"
    data-type-class="jawaban-singkat-edit" data-bs-toggle="modal" data-bs-target="#editTanya">
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
                <div class="col-12">
                    <span class="badge bg-primary">Jawaban Singkat</span>
                </div>
            </div>
        </div>
    </div>
</div>
