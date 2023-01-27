<?php 

use App\Models\MultiplechoicesAnswer;
use App\Models\Multiplechoice;
?>

<?php
$question = Multiplechoice::find($id_question);
$answer = MultiplechoicesAnswer::where('multiplechoices_id',$question->id)->get();
?>

<div class="question-{{$l}} survey {{($l == 1)?"active":""}}"data-index="{{$l}}"style='display:none'>
    <small>Question {{$l}} of {{count($type_survey)}}</small>
    <h5 class="text-center mt-3 mb-3">  {{$question['question']}}</h5>
    <?php $i = 1 ?>
    @foreach ($answer as $ans)
    <div class="form-check">
        <input class="form-check-input" type="radio" value="{{$ans['answer']}}" name="pilihan" id="P1">
        <label class="form-check-label fw-bold" for="P1">
            {{$ans['answer']}}
        </label>
    </div>
  @endforeach
</div>