@extends('layouts.dashboard')
@section('content')

    <div class="features-area mb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mb-5">

                    <div class="row">
                        <div class="col-md">
                            <h2>Buat Survey Baru</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mt-2 mb-2">
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"
                                class="w-100 h-100 btn btn-outline-primary rounded-5">
                                <i class="ri-add-line display-1"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Survey Baru</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('action.survey.question')}}" method="POST">

                                                <div class="row mb-3">
                                                    <label for="pilihsurvey">Pilih Tipe</label>
                                                    <div class="col-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="pilihsurvey" id="survey" checked>
                                                            <label class="form-check-label" for="survey">
                                                                Survey
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="pilihsurvey" id="quiz">
                                                            <label class="form-check-label" for="quiz">
                                                                Quiz
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="judul" class="form-label">Judul Survey</label>
                                                    <input type="text" class="form-control" name="judul" id="judul"
                                                        aria-describedby="judulHelp" placeholder="Masukkan Judul">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="kategori" class="form-label">Kategori</label>
                                                    <select id="kategori" class="form-select form-control">
                                                        <option selected="" disabled>Pilih Kategori</option>
                                                        <option value="Bisnis & E-Commerce">Bisnis & E-Commerce</option>
                                                        <option value="Pendidikan">Pendidikan</option>
                                                        <option value="Trend Fashion">Trend Fashion</option>
                                                        <option value="Makanan">Makanan</option>
                                                        <option value="Kesehatan">Kesehatan</option>
                                                        <option value="Riset Market">Riset Market</option>
                                                        <option value="Musik">Musik</option>
                                                        <option value="Perjalanan & Pariwisata">Perjalanan & Pariwisata
                                                        </option>
                                                        <option value="Olahraga">Olahraga</option>
                                                        <option value="Pekerjaan & Karir">Pekerjaan & Karir</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>   
                                                </div>

                                                <div class="mb-3">
                                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                                    <textarea class="form-control" name="deskripsi" id="deskripsi"
                                                        rows="3"></textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="gambar" class="form-label">Gambar Background</label>
                                                    <input type="file" class="form-control" style="height: auto" name="gambar" id="gambar"
                                                        placeholder="Masukkan Gambar" aria-describedby="gambarHelp">
                                                    <div id="gambarHelp" class="form-text">File berformat .jpg atau .png
                                                        & maksimal 2MB (ukuran 710x178px)</div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer" style="display: inline-block">
                                            <div class="row">
                                                <div class="col-6">
                                                    <button type="button" class="btn btn-outline-primary w-100"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                                <div class="col-6">
                                                    <button type="button" class="btn btn-primary w-100">Buat Survey</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mt-2 mb-2">
                            <button class="w-100 h-100 btn btn-primary rounded-5 text-start">
                                <div class="row">
                                    <div class="col-md-12">
                                        <i class="ri-arrow-right-circle-line fs-1"></i>
                                    </div>
                                    <div class="col-md-12 fs-6">
                                        Jelajahi Template
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="col-12">

                    <div class="row mb-3">
                        <div class="col-md">
                            <h2 class="mb-0" style="display: inline">Survey Terbaru</h2><a href="#"
                                class="ms-5"><small>Lihat Semua</small></a>
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
