<?php
use App\Models\User;
?>

@extends('layouts.dashboard')
@section('content')

    <div class="flex-grow-1 features-area mb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mb-5">

                    <div class="row">
                        <div class="col-md">
                            <h2>List Survey</h2>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($question as $que)
                        <?php $user = User::find($que['users_id'])?>
                        <div class="col-md-3 mt-2 mb-2">
                            
                            <a href="{{url('')}}/edit-survei/{{Crypt::encrypt($que['id'])}}">
                                <div class="card text-left">
                                    @if ($que['images'] == 'default.png')
                                    <div class="card-header bg-thumb" >
                                    @else
                                    <div class="card-header bg-thumb" style="background-image: url('{{url('/')}}/images/background/survey/{{$que['images']}}') ">
                                    @endif

                                    </div>
                                    <div class="card-body">
                                        <span class="badge rounded-pill bg-primary mb-1">{{$que['category']}}</span> <br><small>{{$que['created_at']}}</small>
                                        @if (strlen($que['title']) > 20)
                                        <h4 class="card-title mb-0">{{substr($que['title'],0,35)}}...</h4>
                                        @else
                                        <h4 class="card-title mb-0">{{$que['title']}}</h4>
                                        @endif
                                        <small>Template oleh <b>{{$user['name']}}</b></small>
                                        @if (strlen($que['description']) > 50)
                                        <p class="card-text mb-5">{{substr($que['description'],0,100)}}...</p>
                                        @else
                                        <p class="card-text mb-5">{{$que['description']}}</p>
                                        @endif
                                        {{-- <span class="badge rounded-pill bg-secondary mb-1">{{$que['category']}}</span> <br> --}}
                                        {{-- <small>0 Pertanyaan | 0 Jawaban</small> --}}
                                    </div>
                                </div>
                            </a>

                        </div> 
                        @endforeach
                    </div>

                </div>
               
            </div>
        </div>
    </div>

@endsection
