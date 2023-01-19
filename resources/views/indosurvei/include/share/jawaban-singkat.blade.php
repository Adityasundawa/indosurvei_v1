
<?php 

use App\Models\ShortQuestion;
use App\Models\Typesurvey;
?>

<?php 

$question = ShortQuestion::find($id_question);

?>

<div class="question-{{$l}} survey {{($l == 1)?"active":""}}"data-index="{{$l}}"style='display:none'>
    <small>Question {{$l}} of {{count($type_survey)}}</small>
    <h5 class="text-center mt-3 mb-3">{{$question['question']}}</h5>
    <textarea name="jawaban-singkat" id="jawaban-singkat" rows="5" class="form-control"></textarea>
</div>