@extends('layouts.dashboard')
@section('content')

    <div class="features-area mb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mb-5">

                    <div class="row">
                        <div class="col-md">
                            <h2>List Survey</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            
                            <a href="{{url('')}}/detail">
                                <div class="card text-left">
                                    <div class="card-header bg-thumb">
                                    </div>
                                    <div class="card-body">
                                        <span class="badge rounded-pill bg-primary mb-1">Tipe</span> <small>2023-01-10</small>
                                        <h4 class="card-title mb-0">Judul Survei</h4>
                                        <small>Template oleh <b>Nama</b></small>
                                        <p class="card-text mb-5">Deskripsi</p>
                                        <span class="badge rounded-pill bg-secondary mb-1">Kategori</span> <br>
                                        <small>0 Pertanyaan | 0 Jawaban</small>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                </div>
               
            </div>
        </div>
    </div>

@endsection
