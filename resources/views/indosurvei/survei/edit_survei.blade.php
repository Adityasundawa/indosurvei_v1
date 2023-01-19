@extends('layouts.dashboard')
@section('content')

 @if(Session::has('message'))
 <div class="alert alert-primary" role="alert">
   Berhasil Membuat Survei  
  </div>
 @endif
<div class="features-area mb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mb-5">
                <div class="card">
                    <div class="card-header bg-thumb-big">
                        <div class="row">
                            <div class="col-6">
                                <h2>
                                    {{$question['title']}}??
                                </h2>
                            </div>
                            <div class="col-6 text-end">
                                <a href="#">Ubah Background <i class="ri-edit-2-fill"></i></a>
                            </div>
                            <div class="col-md-12 mb-5">
                                <h6> {{$question['description']}}</h6>
                            </div>
                            <div class="col-md-12 text-end">
                                <button class="btn btn-outline-primary">Download</button>
                                <a href="" class="btn btn-outline-primary">Preview</a>
                                <a href="{{url('')}}/share/{{Crypt::encrypt($id)}}" class="btn btn-primary">Shares</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-top border-bottom">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center py-1 mb-1 mt-1">
                                <div class="row nav nav-pills g-0 align-items-center p-0 bg-white rounded-5">
                                    <div class="col">
                                        <button class="nav-link rounded-5 p-0 px-1 w-100 kelas-tab-atas active"
                                            id="pills-pertanyaan-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-pertanyaan" type="button" role="tab"
                                            aria-controls="pills-pertanyaan" aria-selected="true">Pertanyaan</button>
                                    </div>
                                    <div class="col">
                                        <button class="nav-link rounded-5 p-0 px-1 w-100 kelas-tab-atas"
                                            id="pills-pengaturan-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-pengaturan" type="button" role="tab"
                                            aria-controls="pills-pengaturan" aria-selected="false">Pengaturan</button>
                                    </div>
                                    <div class="col">
                                        <button class="nav-link rounded-5 p-0 px-1 w-100 kelas-tab-atas"
                                            id="pills-jawaban-tab" data-bs-toggle="pill" data-bs-target="#pills-jawaban"
                                            type="button" role="tab" aria-controls="pills-jawaban"
                                            aria-selected="false">Jawaban</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md text-end mt-1 mb-1">
                                <div class="row g-1 justify-content-end">
                                    <div class="col-auto change-1">
                                        <a href="#" class="btn py-1 w-100 btn-outline-primary">
                                            <i class="ri-vip-crown-line"></i>
                                        </a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="btn py-1 w-100 btn-outline-primary">
                                            <i class="ri-file-copy-line"></i>
                                        </a>
                                    </div>
                                    <div class="col-auto change-1">
                                        <a href="#" class="btn py-1 w-100 btn-primary h-100" data-bs-toggle="modal"
                                            data-bs-target="#tambahTanya">
                                            Tambah Pertanyaan
                                        </a>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="tambahTanya" tabindex="-1"
                                        aria-labelledby="tambahTanyaLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="tambahTanyaLabel">Tambah Pertanyaan
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="{{url('/')}}/dashboard/action/survei/{{Crypt::encrypt($id)}}" method="POST"> 
                                                    @csrf
                                                <div class="modal-body text-start">
                                                        <div class="mb-3">
                                                            <label for="gambar" class="form-label">Pilih Gambar
                                                                Pertanyaan</label>
                                                            <input type="file" class="form-control" style="height: auto"
                                                                name="gambar" id="gambar" placeholder="Pilih Gambar">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="tanya-tipe" class="form-label">Tipe
                                                                Pertanyaan</label>
                                                            <select class="form-select tipe-tanya" name="tanya-tipe"
                                                                id="tanya-tipe">
                                                                <option value="Jawaban Singkat">Jawaban Singkat</option>
                                                                <option value="Pilihan Ganda">Pilihan Ganda</option>
                                                                <option value="Kotak Centang">Kotak Centang</option>
                                                                <option value="Unggah Gambar">Unggah Gambar</option>
                                                                <option value="Skala">Skala</option>
                                                                <option value="Lembar Persetujuan">Lembar Persetujuan
                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="tanya" class="form-label">Pertanyaan</label>
                                                            <textarea class="form-control" name="tanya" id="tanya"
                                                                rows="3"></textarea>
                                                        </div>

                                                        <div class="pilihan-ganda d-none">
                                                            <div class="append-here">
                                                                <label for="pilihan" class="form-label">Pilihan</label>
                                                                <div class="card mb-3" id="pilihan">
                                                                    <div class="card-body">
                                                                        <div class="mb-3">
                                                                            <label for="pilihan-1"
                                                                                class="form-label">Pilihan 1</label>
                                                                            <input type="text" class="form-control"
                                                                                name="pilihan-1" id="pilihan-1"
                                                                                aria-describedby="helpId"
                                                                                placeholder="Masukkan Pilihan 1">
                                                                        </div>
                                                                        <div class="row mb-3">

                                                                            <div class="col-6">
                                                                                <label for="skip-1"
                                                                                    class="form-label">Skip
                                                                                    ke pertanyaan no.</label>
                                                                                <input type="number"
                                                                                    class="form-control" name="skip-1"
                                                                                    id="skip-1"
                                                                                    aria-describedby="helpId"
                                                                                    placeholder="Masukkan No.">
                                                                            </div>

                                                                            <div class="col-6">
                                                                                <div class="form-check">
                                                                                    <input
                                                                                        class="form-check-input kustom-1"
                                                                                        type="checkbox" id="kustom-1"
                                                                                        value="Lainnya">
                                                                                    <label class="form-check-label"
                                                                                        for="kustom">
                                                                                        Kustom Jawaban
                                                                                    </label>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="gambar-1"
                                                                                class="form-label">Gambar</label>
                                                                            <input type="file" class="form-control"
                                                                                name="gambar-1" id="gambar-1"
                                                                                aria-describedby="helpId"
                                                                                style="height: auto"
                                                                                placeholder="Masukkan Gambar">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="#" id="clone-tanya">Tambah <i
                                                                    class="ri-add-line"></i></a>
                                                        </div>

                                                        <div class="percentangan d-none">
                                                            <div class="append-here">
                                                                <label for="pilihan-centang"
                                                                    class="form-label">Pilihan</label>
                                                                <div class="card mb-3" id="pilihan-centang">
                                                                    <div class="card-body">
                                                                        <div class="mb-3">
                                                                            <label for="pilihan-centang-1"
                                                                                class="form-label">Pilihan 1</label>
                                                                            <input type="text" class="form-control"
                                                                                name="pilihan-centang-1"
                                                                                id="pilihan-centang-1"
                                                                                aria-describedby="helpId"
                                                                                placeholder="Masukkan Pilihan 1">
                                                                        </div>
                                                                        <div class="row mb-3">

                                                                            <div class="col-6">
                                                                                <label for="skip-centang-1"
                                                                                    class="form-label">Skip
                                                                                    ke pertanyaan no.</label>
                                                                                <input type="number"
                                                                                    class="form-control"
                                                                                    name="skip-centang-1"
                                                                                    id="skip-centang-1"
                                                                                    aria-describedby="helpId"
                                                                                    placeholder="Masukkan No.">
                                                                            </div>

                                                                            <div class="col-6">
                                                                                <div class="form-check">
                                                                                    <input
                                                                                        class="form-check-input kustom-1"
                                                                                        type="checkbox"
                                                                                        id="kustom-centang-1"
                                                                                        value="Lainnya">
                                                                                    <label class="form-check-label"
                                                                                        for="kustom-centang-1">
                                                                                        Kustom Jawaban
                                                                                    </label>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="gambar-centang-1"
                                                                                class="form-label">Gambar</label>
                                                                            <input type="file" class="form-control"
                                                                                name="gambar-centang-1"
                                                                                id="gambar-centang-1"
                                                                                aria-describedby="helpId"
                                                                                style="height: auto"
                                                                                placeholder="Masukkan Gambar">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="#" id="clone-tanya-centang">Tambah <i
                                                                    class="ri-add-line"></i></a>
                                                        </div>

                                                        <div class="skala d-none">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="mb-3">
                                                                        <label for="min-val" class="form-label">Min
                                                                            Value</label>
                                                                        <input type="number" class="form-control"
                                                                            name="min-val" id="min-val">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="mb-3">
                                                                        <label for="max-val" class="form-label">Max
                                                                            Value</label>
                                                                        <input type="number" class="form-control"
                                                                            name="max-val" id="max-val">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="mb-3">
                                                                        <label for="min-lab" class="form-label">Min
                                                                            Label</label>
                                                                        <input type="text" class="form-control"
                                                                            name="min-lab" id="min-lab">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="mb-3">
                                                                        <label for="max-lab" class="form-label">Max
                                                                            Label</label>
                                                                        <input type="text" class="form-control"
                                                                            name="max-lab" id="max-lab">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                   
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto change-2 d-none">
                                        <a href="#" class="btn py-1 w-100 btn-outline-primary">
                                            <i class="ri-restart-line"></i> Reset Jawaban
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card-body border-top">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-pertanyaan" role="tabpanel"
                                aria-labelledby="pills-pertanyaan-tab" tabindex="0">
{{-- 
                                <div class="row">
                                    <div class="col-12 border-bottom cus-hov p-3 edit-tanya" data-type="Jawaban Singkat"
                                        data-type-class="jawaban-singkat-edit" data-bs-toggle="modal"
                                        data-bs-target="#editTanya">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <h5>
                                                    1.
                                                </h5>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5>
                                                            Jawaban Singkat
                                                        </h5>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class="badge bg-primary">Jawaban Singkat</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 border-bottom cus-hov p-3 edit-tanya" data-type="Pilihan Ganda"
                                        data-type-class="pilihan-ganda-edit" data-bs-toggle="modal"
                                        data-bs-target="#editTanya">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <h5>
                                                    2.
                                                </h5>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5>
                                                            Pilihan Ganda
                                                        </h5>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <span class="badge bg-primary">Pilihan Ganda</span>
                                                    </div>
                                                    <div class="col-auto mt-2 mb-2">
                                                        <div class="card" style="background: #f0f9ff">
                                                            <div class="card-body py-2">
                                                                <p class="card-text">Pilihan 1</p>
                                                                <h4 class="card-title">P1</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto mt-2 mb-2">
                                                        <div class="card" style="background: #f0f9ff">
                                                            <div class="card-body py-2">
                                                                <p class="card-text">Pilihan 2</p>
                                                                <h4 class="card-title">P2</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto mt-2 mb-2">
                                                        <div class="card" style="background: #f0f9ff">
                                                            <div class="card-body py-2">
                                                                <p class="card-text">Pilihan 3</p>
                                                                <h4 class="card-title">P3</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto mt-2 mb-2">
                                                        <div class="card" style="background: #f0f9ff">
                                                            <div class="card-body py-2">
                                                                <p class="card-text">Pilihan 4</p>
                                                                <h4 class="card-title">Lainnya</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 border-bottom cus-hov p-3 edit-tanya" data-type="Kotak Centang"
                                        data-type-class="percentangan-edit" data-bs-toggle="modal"
                                        data-bs-target="#editTanya">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <h5>
                                                    3.
                                                </h5>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5>
                                                            Kotak Centang
                                                        </h5>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <span class="badge bg-primary">Kotak Centang</span>
                                                    </div>
                                                    <div class="col-auto mt-2 mb-2">
                                                        <div class="card" style="background: #f0f9ff">
                                                            <div class="card-body py-2">
                                                                <p class="card-text">Pilihan 1</p>
                                                                <h4 class="card-title">P1</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto mt-2 mb-2">
                                                        <div class="card" style="background: #f0f9ff">
                                                            <div class="card-body py-2">
                                                                <p class="card-text">Pilihan 2</p>
                                                                <h4 class="card-title">P2</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto mt-2 mb-2">
                                                        <div class="card" style="background: #f0f9ff">
                                                            <div class="card-body py-2">
                                                                <p class="card-text">Pilihan 3</p>
                                                                <h4 class="card-title">P3</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto mt-2 mb-2">
                                                        <div class="card" style="background: #f0f9ff">
                                                            <div class="card-body py-2">
                                                                <p class="card-text">Pilihan 4</p>
                                                                <h4 class="card-title">Lainnya</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 border-bottom cus-hov p-3 edit-tanya" data-type="Unggah Gambar"
                                        data-type-class="unggah-edit" data-bs-toggle="modal"
                                        data-bs-target="#editTanya">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <h5>
                                                    4.
                                                </h5>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5>
                                                            Unggah Gambar
                                                        </h5>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class="badge bg-primary">Unggah Gambar</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 border-bottom cus-hov p-3 edit-tanya" data-type="Skala"
                                        data-type-class="skala-edit" data-bs-toggle="modal" data-bs-target="#editTanya">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <h5>
                                                    5.
                                                </h5>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5>
                                                            Skala
                                                        </h5>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class="badge bg-primary">Skala</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="editTanya" tabindex="-1"
                                        aria-labelledby="tambahTanyaLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="tambahTanyaLabel">Tambah Pertanyaan
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-start">
                                                    <form action="">
                                                        <div class="mb-3">
                                                            <label for="gambar" class="form-label">Pilih Gambar
                                                                Pertanyaan</label>
                                                            <input type="file" class="form-control" style="height: auto"
                                                                name="gambar" id="gambar" placeholder="Pilih Gambar">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="tanya-tipe" class="form-label">Tipe
                                                                Pertanyaan</label>
                                                            <select class="form-select tipe-tanya-edit"
                                                                name="tanya-tipe" id="tanya-tipe">
                                                                <option value="Jawaban Singkat">Jawaban Singkat</option>
                                                                <option value="Pilihan Ganda">Pilihan Ganda</option>
                                                                <option value="Kotak Centang">Kotak Centang</option>
                                                                <option value="Unggah Gambar">Unggah Gambar</option>
                                                                <option value="Skala">Skala</option>
                                                                <option value="Lembar Persetujuan">Lembar Persetujuan
                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="tanya" class="form-label">Pertanyaan</label>
                                                            <textarea class="form-control" name="tanya" id="tanya"
                                                                rows="3"></textarea>
                                                        </div>

                                                        <div class="pilihan-ganda-edit adhd d-none">
                                                            <div class="append-here">
                                                                <label for="pilihan" class="form-label">Pilihan</label>
                                                                <div class="card mb-3" id="pilihan">
                                                                    <div class="card-body">
                                                                        <div class="mb-3">
                                                                            <label for="pilihan-1"
                                                                                class="form-label">Pilihan 1</label>
                                                                            <input type="text" class="form-control"
                                                                                name="pilihan-1" id="pilihan-1"
                                                                                aria-describedby="helpId"
                                                                                placeholder="Masukkan Pilihan 1">
                                                                        </div>
                                                                        <div class="row mb-3">

                                                                            <div class="col-6">
                                                                                <label for="skip-1"
                                                                                    class="form-label">Skip
                                                                                    ke pertanyaan no.</label>
                                                                                <input type="number"
                                                                                    class="form-control" name="skip-1"
                                                                                    id="skip-1"
                                                                                    aria-describedby="helpId"
                                                                                    placeholder="Masukkan No.">
                                                                            </div>

                                                                            <div class="col-6">
                                                                                <div class="form-check">
                                                                                    <input
                                                                                        class="form-check-input kustom-1"
                                                                                        type="checkbox" id="kustom-1"
                                                                                        value="Lainnya">
                                                                                    <label class="form-check-label"
                                                                                        for="kustom">
                                                                                        Kustom Jawaban
                                                                                    </label>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="gambar-1"
                                                                                class="form-label">Gambar</label>
                                                                            <input type="file" class="form-control"
                                                                                name="gambar-1" id="gambar-1"
                                                                                aria-describedby="helpId"
                                                                                style="height: auto"
                                                                                placeholder="Masukkan Gambar">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="#" id="clone-tanya-edit">Tambah <i
                                                                    class="ri-add-line"></i></a>
                                                        </div>

                                                        <div class="percentangan-edit adhd d-none">
                                                            <div class="append-here">
                                                                <label for="pilihan-centang"
                                                                    class="form-label">Pilihan</label>
                                                                <div class="card mb-3" id="pilihan-centang">
                                                                    <div class="card-body">
                                                                        <div class="mb-3">
                                                                            <label for="pilihan-centang-1"
                                                                                class="form-label">Pilihan 1</label>
                                                                            <input type="text" class="form-control"
                                                                                name="pilihan-centang-1"
                                                                                id="pilihan-centang-1"
                                                                                aria-describedby="helpId"
                                                                                placeholder="Masukkan Pilihan 1">
                                                                        </div>
                                                                        <div class="row mb-3">

                                                                            <div class="col-6">
                                                                                <label for="skip-centang-1"
                                                                                    class="form-label">Skip
                                                                                    ke pertanyaan no.</label>
                                                                                <input type="number"
                                                                                    class="form-control"
                                                                                    name="skip-centang-1"
                                                                                    id="skip-centang-1"
                                                                                    aria-describedby="helpId"
                                                                                    placeholder="Masukkan No.">
                                                                            </div>

                                                                            <div class="col-6">
                                                                                <div class="form-check">
                                                                                    <input
                                                                                        class="form-check-input kustom-1"
                                                                                        type="checkbox"
                                                                                        id="kustom-centang-1"
                                                                                        value="Lainnya">
                                                                                    <label class="form-check-label"
                                                                                        for="kustom-centang-1">
                                                                                        Kustom Jawaban
                                                                                    </label>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="gambar-centang-1"
                                                                                class="form-label">Gambar</label>
                                                                            <input type="file" class="form-control"
                                                                                name="gambar-centang-1"
                                                                                id="gambar-centang-1"
                                                                                aria-describedby="helpId"
                                                                                style="height: auto"
                                                                                placeholder="Masukkan Gambar">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="#" id="clone-tanya-centang-edit">Tambah <i
                                                                    class="ri-add-line"></i></a>
                                                        </div>

                                                        <div class="skala-edit adhd d-none">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="mb-3">
                                                                        <label for="min-val" class="form-label">Min
                                                                            Value</label>
                                                                        <input type="number" class="form-control"
                                                                            name="min-val" id="min-val">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="mb-3">
                                                                        <label for="max-val" class="form-label">Max
                                                                            Value</label>
                                                                        <input type="number" class="form-control"
                                                                            name="max-val" id="max-val">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="mb-3">
                                                                        <label for="min-lab" class="form-label">Min
                                                                            Label</label>
                                                                        <input type="text" class="form-control"
                                                                            name="min-lab" id="min-lab">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="mb-3">
                                                                        <label for="max-lab" class="form-label">Max
                                                                            Label</label>
                                                                        <input type="text" class="form-control"
                                                                            name="max-lab" id="max-lab">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-outline-danger">Delete</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div> --}}

                                {{-- Un-Comment this if there is no data --}}
                                @if (count($type_survey) == 0)
                                @include('indosurvei.include.null-survei')
                                @endif
                                @foreach ($type_survey as $type)
                                    @if ($type['type'] == "Jawaban Singkat")
                                    <?php $id_question = $type['question_id']?>
                                    @include('indosurvei.include.jawaban-singkat')
                                    @endif

                                @endforeach
                            </div>
                                  
                            <div class="tab-pane fade" id="pills-pengaturan" role="tabpanel"
                                aria-labelledby="pills-pengaturan-tab" tabindex="0">

                                <div class="row">
                                    <div class="col-md-auto mb-4" style="border-right: 1px solid #dee2e6">
                                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                            aria-orientation="vertical">
                                            <button class="nav-link custom text-start active" id="v-pills-survey-tab"
                                                data-bs-toggle="pill" data-bs-target="#v-pills-survey" type="button"
                                                role="tab" aria-controls="v-pills-survey" aria-selected="true">Atur
                                                Survey</button>
                                            <button class="nav-link custom text-start" id="v-pills-responden-tab"
                                                data-bs-toggle="pill" data-bs-target="#v-pills-responden" type="button"
                                                role="tab" aria-controls="v-pills-responden" aria-selected="false">Atur
                                                Respondenmu</button>
                                            {{-- <button class="nav-link custom text-start" id="v-pills-reward-tab"
                                                data-bs-toggle="pill" data-bs-target="#v-pills-reward" type="button"
                                                role="tab" aria-controls="v-pills-reward" aria-selected="false">Atur
                                                Rewardmu</button> --}}
                                            <button class="nav-link custom text-start" id="v-pills-jual-tab"
                                                data-bs-toggle="pill" data-bs-target="#v-pills-jual" type="button"
                                                role="tab" aria-controls="v-pills-jual" aria-selected="false">Jual
                                                Surveymy</button>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="tab-content" id="v-pills-tabContent">

                                            <div class="tab-pane fade show active" id="v-pills-survey" role="tabpanel"
                                                aria-labelledby="v-pills-survey-tab" tabindex="0">
                                                <div class="row align-items-center mb-4">
                                                    <div class="col-md-3 fw-bold">Judul Survey</div>
                                                    <div class="col-md">
                                                        <input type="text" class="form-control" name="judul" id="judul"
                                                            value="Judul">
                                                    </div>
                                                </div>
                                                <div class="row align-items-center mb-4">
                                                    <div class="col-md-3 fw-bold">Dekripsi</div>
                                                    <div class="col-md">
                                                        <textarea name="deskripsi" id="deskripsi" rows="3"
                                                            class="form-control">Deskripsi</textarea>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center mb-4">
                                                    <div class="col-md-3 fw-bold">Kategori</div>
                                                    <div class="col-md">
                                                        <select id="kategori" class="form-select form-control">
                                                            <option selected="" disabled>Pilih Kategori</option>
                                                            <option value="Bisnis & E-Commerce">Bisnis & E-Commerce
                                                            </option>
                                                            <option value="Pendidikan">Pendidikan</option>
                                                            <option value="Trend Fashion">Trend Fashion</option>
                                                            <option value="Makanan">Makanan</option>
                                                            <option value="Kesehatan">Kesehatan</option>
                                                            <option value="Riset Market">Riset Market</option>
                                                            <option value="Musik">Musik</option>
                                                            <option value="Perjalanan & Pariwisata">Perjalanan &
                                                                Pariwisata
                                                            </option>
                                                            <option value="Olahraga">Olahraga</option>
                                                            <option value="Pekerjaan & Karir">Pekerjaan & Karir</option>
                                                            <option value="Lainnya">Lainnya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-md-3 fw-bold">Periode Survey</div>
                                                    <div class="col-md">
                                                        <div class="row">
                                                            <div class="col-md-6 mb-2">
                                                                <div class="form-check">
                                                                    <input class="form-check-input kelas-radio-waktu"
                                                                        type="radio" name="pilihbatas" id="tanpa-batas"
                                                                        checked>
                                                                    <label class="form-check-label" for="tanpa-batas">
                                                                        Tanpa Batas Waktu
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-2">
                                                                <div class="form-check">
                                                                    <input class="form-check-input kelas-radio-waktu"
                                                                        type="radio" name="pilihbatas"
                                                                        id="atur-periode">
                                                                    <label class="form-check-label" for="atur-periode">
                                                                        Atur Periode
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 change-waktu-1 d-none">
                                                                <label class="form-check-label" for="mulai">
                                                                    Mulai
                                                                </label>
                                                                <input id="mulai" type="date" class="form-control">
                                                            </div>
                                                            <div class="col-md-6 change-waktu-1 d-none">
                                                                <label class="form-check-label" for="berakhir">
                                                                    Berakhir
                                                                </label>
                                                                <input id="berakhirs" type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-responden" role="tabpanel"
                                                aria-labelledby="v-pills-responden-tab" tabindex="0">
                                                <div class="row mb-4">
                                                    <div class="col-md-3 fw-bold">Responden</div>
                                                    <div class="col-md">

                                                        <div class="row">

                                                            <div class="col-md-6 mb-2">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="pilihbatas" id="semua-orang" checked>
                                                                    <label class="form-check-label" for="semua-orang">
                                                                        Semua Orang
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-2">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="pilihbatas" id="Hanya yang Register">
                                                                    <label class="form-check-label"
                                                                        for="Hanya yang Register">
                                                                        Hanya yang Register
                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-md-3 fw-bold">Batas Respon</div>
                                                    <div class="col-md">

                                                        <div class="row">

                                                            <div class="col-md-6 mb-2">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="pilihbatas" id="semua-orang" checked>
                                                                    <label class="form-check-label" for="semua-orang">
                                                                        Hanya Sekali
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-2">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="pilihbatas" id="Hanya yang Register">
                                                                    <label class="form-check-label"
                                                                        for="Hanya yang Register">
                                                                        Berulang Ulang
                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            {{-- <div class="tab-pane fade" id="v-pills-reward" role="tabpanel"
                                                aria-labelledby="v-pills-reward-tab" tabindex="0">
                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-md-3 fw-bold">Responden Reward</div>
                                                    <div class="col-md">

                                                        <button type="button" class="btn btn-outline-primary">Atur
                                                            Reward</button>

                                                    </div>
                                                </div>
                                            </div> --}}

                                            <div class="tab-pane fade" id="v-pills-jual" role="tabpanel"
                                                aria-labelledby="v-pills-jual-tab" tabindex="0">

                                                <div class="row mb-4">
                                                    <div class="col-md-3 fw-bold">Jual Survey</div>
                                                    <div class="col-md">
                                                        <div class="row">
                                                            <div class="col-md-4 mb-2">
                                                                <div class="form-check">
                                                                    <input class="form-check-input kelas-radio-jual"
                                                                        type="radio" name="pilihbatas" id="jual">
                                                                    <label class="form-check-label" for="jual">
                                                                        Jual
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-2">
                                                                <div class="form-check">
                                                                    <input class="form-check-input kelas-radio-jual"
                                                                        type="radio" name="pilihbatas" id="gratis">
                                                                    <label class="form-check-label" for="gratis">
                                                                        Gratis
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-2">
                                                                <div class="form-check">
                                                                    <input class="form-check-input kelas-radio-jual"
                                                                        type="radio" name="pilihbatas"
                                                                        id="tidak-dijual">
                                                                    <label class="form-check-label" for="tida-dijual">
                                                                        Tidak Dijual
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md change-harga d-none">
                                                                <label class="form-check-label" for="harga">
                                                                    Harga
                                                                </label>
                                                                <div class="input-group">
                                                                    <span class="input-group-text">Rp</span>
                                                                    <input id="harga" type="number"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-md">
                                                <button class="btn btn-outline-danger">Hapus</button>
                                            </div>
                                            <div class="col-md text-end">
                                                <button class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-jawaban" role="tabpanel"
                                aria-labelledby="pills-pengaturan-tab" tabindex="0">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="individual-tab-pane" role="tabpanel"
                                        aria-labelledby="individual-tab" tabindex="0">
                                        <h4 class="mt-4">3 Jawaban</h4>
                                        <div class="table-responsive mb-3">
                                            <table class="table table-bordered table-striped">
                                            <tr class="1st-page">
                                                <th style="width: 100px">Pertanyaan</th>
                                                <th style="width: 200px">
                                                    <div class="row">
                                                        <div class="col">email1@gmail.com</div>
                                                        <div class="col text-end">x</div>
                                                    </div>
                                                </th>
                                                <th style="width: 200px">
                                                    <div class="row">
                                                        <div class="col">email2@gmail.com</div>
                                                        <div class="col text-end">x</div>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr class="1st-page">
                                                <td>
                                                    1. Jawaban Singkat 
                                                </td>
                                                <td>
                                                    Jawaban 1
                                                </td>
                                                <td>
                                                    Jawaban 2
                                                </td>
                                            </tr>
                                            <tr class="1st-page">
                                                <td>
                                                    2. Pilihan Ganda 
                                                </td>
                                                <td>
                                                    P3
                                                </td>
                                                <td>
                                                    P1
                                                </td>
                                            </tr>
                                            <tr class="1st-page">
                                                <td>
                                                    3. Kotak Centang 
                                                </td>
                                                <td>
                                                    K2, K3
                                                </td>
                                                <td>
                                                    K2, Hehe
                                                </td>
                                            </tr>
                                            <tr class="1st-page">
                                                <td>
                                                    4. Unggah Gambar 
                                                </td>
                                                <td>
                                                    https://storage.googleapis.com/smart-survey-files/answer-image-files/BXvwE2mQcagFnXaPmTzBpBjafNSxCfWZ.jpg
                                                </td>
                                                <td>
                                                    https://storage.googleapis.com/smart-survey-files/answer-image-files/8TYj5g1PBhgmLMWaWEtfdK9ip10HBVLh.jpg
                                                </td>
                                            </tr>
                                            <tr class="1st-page">
                                                <td>5. Skala</td>
                                                <td>6</td>
                                                <td>3</td>
                                            </tr>
                                            <tr class="2nd-page d-none">
                                                <th style="width: 100px">Pertanyaan</th>
                                                <th style="width: 200px">
                                                    <div class="row">
                                                        <div class="col">email3@gmail.com</div>
                                                        <div class="col text-end">x</div>
                                                    </div>
                                                </th>
                                                <th style="width: 200px">
                                                    <div class="row">
                                                        <div class="col"></div>
                                                        <div class="col text-end"></div>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr class="2nd-page d-none">
                                                <td>
                                                    1. Jawaban Singkat 
                                                </td>
                                                <td>
                                                    Jawaban 3
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                            <tr class="2nd-page d-none">
                                                <td>
                                                    2. Pilihan Ganda 
                                                </td>
                                                <td>
                                                    P4
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                            <tr class="2nd-page d-none">
                                                <td>
                                                    3. Kotak Centang 
                                                </td>
                                                <td>
                                                    K2, K3
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                            <tr class="2nd-page d-none">
                                                <td>
                                                    4. Unggah Gambar 
                                                </td>
                                                <td>
                                                    https://storage.googleapis.com/smart-survey-files/answer-image-files/BXvwE2mQcagFnXaPmTzBpBjafNSxCfWZ.jpg
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                            <tr class="2nd-page d-none">
                                                <td>5. Skala</td>
                                                <td>6</td>
                                                <td></td>
                                            </tr>
                                        </table>
                                        </div>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination custom-style">
                                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                <li class="page-item"><a class="page-link number">1</a></li>
                                                <li class="page-item"><a class="page-link number">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                
                                {{-- show if there is no data --}}
                                {{-- <div class="row align-items-center">
                                    <div class="col-12 text-center py-5">
                                        <div class="mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" style="opacity: 0.75" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs" width="100" x="0" y="0"
                                                viewBox="0 0 682.66669 682.66669"
                                                style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                                <g>
                                                    <defs id="defs3421">
                                                        <clipPath clipPathUnits="userSpaceOnUse" id="clipPath3431">
                                                            <path d="M 0,512 H 512 V 0 H 0 Z" id="path3429"
                                                                fill="#000000" data-original="#000000"></path>
                                                        </clipPath>
                                                    </defs>
                                                    <g id="g3423"
                                                        transform="matrix(1.3333333,0,0,-1.3333333,0,682.66667)">
                                                        <g id="g3425">
                                                            <g id="g3427" clip-path="url(#clipPath3431)">
                                                                <g id="g3433" transform="translate(89.998,402.002)">
                                                                    <path
                                                                        d="m 0,0 h 220 c 5.5,0 10,4.5 10,10 v 39.999 c 0,5.499 -4.499,10 -10,10 H 150.002 C 150.002,82.091 132.093,100 110,100 87.908,100 69.999,82.091 69.999,59.999 H 0 c -5.5,0 -10,-4.5 -10,-10 V 10 C -10,4.5 -5.5,0 0,0"
                                                                        style="fill-opacity:1;fill-rule:evenodd;stroke:none"
                                                                        id="path3435" fill="#6d91ac"
                                                                        data-original="#6d91ac"></path>
                                                                </g>
                                                                <g id="g3437" transform="translate(79.998,412.002)">
                                                                    <path
                                                                        d="m 0,0 v 40 h -50 c -11,0 -20,-9 -20,-20 v -402.002 c 0,-11 9,-19.999 20,-19.999 h 340 c 11,0 20,9 20,19.999 V 20 c 0,10.999 -9,20 -20,20 L 240,39.999 V 0 h 30 V -362.001 H -29.999 l 0,362.001 z"
                                                                        style="fill-opacity:1;fill-rule:evenodd;stroke:none"
                                                                        id="path3439" fill="#60a4ff"
                                                                        data-original="#60a4ff"></path>
                                                                </g>
                                                                <g id="g3441" transform="translate(89.998,402.002)">
                                                                    <path
                                                                        d="M 0,0 C -5.5,0 -10,4.5 -10,10 H -39.999 V -352.001 H 260 V 10 H 230 C 230,4.5 225.5,0 220,0 Z"
                                                                        style="fill-opacity:1;fill-rule:evenodd;stroke:none"
                                                                        id="path3443" fill="#ffffff"
                                                                        data-original="#ffffff" class=""></path>
                                                                </g>
                                                                <g id="g3445" transform="translate(89.998,462.001)">
                                                                    <path
                                                                        d="m 0,0 h 69.999 c 0,22.092 17.909,40.001 40.001,40.001 22.093,0 40.002,-17.909 40.002,-40.001 H 220 c 5.501,0 10,-4.501 10,-10 v -39.999 c 0,-5.5 -4.5,-10 -10,-10 H 0 c -5.5,0 -10,4.5 -10,10 V -10 c 0,5.5 4.5,10 10,10 z"
                                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1"
                                                                        id="path3447" fill="none" stroke="#000000"
                                                                        stroke-width="20" stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-miterlimit="22.926"
                                                                        stroke-dasharray="none" stroke-opacity=""
                                                                        data-original="#000000"></path>
                                                                </g>
                                                                <g id="g3449" transform="translate(322.0986,452.002)">
                                                                    <path
                                                                        d="m 0,0 h 47.899 c 11,0 20,-9.001 20,-20 v -402.002 c 0,-10.999 -9,-19.999 -20,-19.999 h -340 c -11,0 -20,8.999 -20,19.999 V -20 c 0,11 9,20 20,20 h 48.201"
                                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1"
                                                                        id="path3451" fill="none" stroke="#000000"
                                                                        stroke-width="20" stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-miterlimit="22.926"
                                                                        stroke-dasharray="none" stroke-opacity=""
                                                                        data-original="#000000"></path>
                                                                </g>
                                                                <g id="g3453" transform="translate(154.9951,50.001)">
                                                                    <path
                                                                        d="m 0,0 h -104.996 v 362.001 h 28.199 m 243.901,0 h 27.899 L 195.003,0 H 90"
                                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1"
                                                                        id="path3455" fill="none" stroke="#000000"
                                                                        stroke-width="20" stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-miterlimit="22.926"
                                                                        stroke-dasharray="none" stroke-opacity=""
                                                                        data-original="#000000"></path>
                                                                </g>
                                                                <g id="g3457" transform="translate(199.9941,462.001)">
                                                                    <path d="M 0,0 H 0.008"
                                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.613;stroke-dasharray:none;stroke-opacity:1"
                                                                        id="path3459" fill="none" stroke="#000000"
                                                                        stroke-width="20" stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-miterlimit="2.613"
                                                                        stroke-dasharray="none" stroke-opacity=""
                                                                        data-original="#000000"></path>
                                                                </g>
                                                                <g id="g3461" transform="translate(430.999,398.667)">
                                                                    <path d="M 0,0 H 30 L 0,-40 h 30"
                                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1"
                                                                        id="path3463" fill="none" stroke="#000000"
                                                                        stroke-width="20" stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-miterlimit="22.926"
                                                                        stroke-dasharray="none" stroke-opacity=""
                                                                        data-original="#000000"></path>
                                                                </g>
                                                                <g id="g3465" transform="translate(462,502.002)">
                                                                    <path d="M 0,0 H 40 L 0,-53.333 h 40"
                                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1"
                                                                        id="path3467" fill="none" stroke="#000000"
                                                                        stroke-width="20" stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-miterlimit="22.926"
                                                                        stroke-dasharray="none" stroke-opacity=""
                                                                        data-original="#000000"></path>
                                                                </g>
                                                                <g id="g3469" transform="translate(115.7178,264.625)">
                                                                    <path
                                                                        d="m 0,0 c 5.593,-5.593 13.178,-8.735 21.087,-8.735 7.91,0 15.495,3.142 21.088,8.735"
                                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1"
                                                                        id="path3471" fill="none" stroke="#000000"
                                                                        stroke-width="20" stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-miterlimit="22.926"
                                                                        stroke-dasharray="none" stroke-opacity=""
                                                                        data-original="#000000"></path>
                                                                </g>
                                                                <g id="g3473" transform="translate(242.1045,264.625)">
                                                                    <path
                                                                        d="m 0,0 c 5.593,-5.593 13.179,-8.735 21.088,-8.735 7.909,0 15.495,3.142 21.088,8.735"
                                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1"
                                                                        id="path3475" fill="none" stroke="#000000"
                                                                        stroke-width="20" stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-miterlimit="22.926"
                                                                        stroke-dasharray="none" stroke-opacity=""
                                                                        data-original="#000000"></path>
                                                                </g>
                                                                <g id="g3477" transform="translate(185.874,197.3779)">
                                                                    <path d="M 0,0 H 28.249"
                                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1"
                                                                        id="path3479" fill="none" stroke="#000000"
                                                                        stroke-width="20" stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-miterlimit="22.926"
                                                                        stroke-dasharray="none" stroke-opacity=""
                                                                        data-original="#000000"></path>
                                                                </g>
                                                                <g id="g3481" transform="translate(199.9912,50.001)">
                                                                    <path d="M 0,0 H 0.008"
                                                                        style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.613;stroke-dasharray:none;stroke-opacity:1"
                                                                        id="path3483" fill="none" stroke="#000000"
                                                                        stroke-width="20" stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-miterlimit="2.613"
                                                                        stroke-dasharray="none" stroke-opacity=""
                                                                        data-original="#000000"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <b class="text-disabled">Belum Ada Jawaban</b>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
