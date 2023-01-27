@extends('layouts.preview')
@section('content')

<div class="container-fluid">
    <div class="card text-start mb-5" style="border-radius: 20px">
        @if ($survei['images'] == 'default.png')
        <div class="card-header bg-thumb-big align-items-end d-flex">
            @else
            <div class="card-header  bg-thumb-big"
                style="background-image: url('{{url('/')}}/images/background/survey/{{$survei['images']}}') ">
                @endif
                <div class="row align-items-end h-100">
                    <div class="col">
                        <h4 class="card-title d-none judul-thumb" style="mix-blend-mode: difference; color: white">{{$survei['title']}}</h4>
                    </div> 
                </div>
            </div>
          <form action="{{route('answer.survei')}}" method="post">
            @csrf
            <div class="card-body mb-5">
                <div class="first-page">
                    <h4 class="card-title">{{$survei['title']}}</h4>
                    <p class="card-text">{{$survei['description']}}</p>
                </div>
                @if (count($type_survey) == 0)
                @include('indosurvei.include.share.null-survei')
                @endif
                <?php $l = 1 ?>
                @foreach ($type_survey as $type)
                @if ($type['type'] == "Jawaban Singkat")
                <?php $id_question = $type['question_id']?>
                @include('indosurvei.include.share.jawaban-singkat')
                @endif

                @if ($type['type'] == "Pilihan Ganda")
                <?php $id_question = $type['question_id']?>
                @include('indosurvei.include.share.pilihan-ganda')
                @endif
                <?php $l++ ?>
                @endforeach
                <input type="hidden" name="id_question" value="{{$id_question}}">
                <input type="hidden" name="id_survei" value="{{$survei['id']}}">
            </div>
            <div class="card-footer text-end">
                <button type="button" class="btn btn-primary p-2 ambil-survey">Ambil Survei</button>
 
                <button type="button" class="btn btn-outline-primary p-2 text-start back-to-q d-none">Back</button>
                <button type="button" class="btn btn-primary p-2 next-to-q d-none">Next</button>
                <button type="submit" class="btn btn-success p-2 submit d-none">Submit</button>
            </div>
          </form>
        </div>
    </div>

    @endsection
