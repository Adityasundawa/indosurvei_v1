@extends('layouts.preview')
@section('content')

<div class="container-fluid">
    <div class="card text-start mb-5" style="border-radius: 20px">
        <div class="card-header bg-thumb-big align-items-end d-flex">
            <h4 class="card-title d-none judul-thumb">{{$survei['title']}}</h4>
        </div>
        <div class="card-body mb-5">
            <div class="first-page">
                <h4 class="card-title">{{$survei['title']}}</h4>
                <p class="card-text">{{$survei['description']}}</p>
            </div>
            <div class="question-1 d-none">
                <small>Question 1 of 5</small>
                <h5 class="text-center mt-3 mb-3">{{$question['question']}}?</h5>
                <textarea name="jawaban-singkat" id="jawaban-singkat" rows="5" class="form-control"></textarea>
            </div>
            <div class="question-2 d-none">
                <small>Question 2 of 5</small>
                <h5 class="text-center mt-3 mb-3">Pilihan Ganda</h5>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pilihan" id="P1">
                    <label class="form-check-label fw-bold" for="P1">
                        P1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pilihan" id="P2">
                    <label class="form-check-label fw-bold" for="P2">
                        P2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pilihan" id="P3">
                    <label class="form-check-label fw-bold" for="P3">
                        P3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pilihan" id="P4">
                    <input type="text" class="input-text-check" placeholder="Lainnya">
                </div>
            </div>
            <div class="question-3 d-none">

                <small>Question 3 of 5</small>
                <h5 class="text-center mt-3 mb-3">Kotak Centang</h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="K1">
                    <label class="form-check-label fw-bold" for="K1">
                        K1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="K2">
                    <label class="form-check-label fw-bold" for="K2">
                        P2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="K3">
                    <label class="form-check-label fw-bold" for="K3">
                        K3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="K4">
                    <input type="text" class="input-text-check" placeholder="Lainnya">
                </div>
            </div>
            <div class="question-4 d-none">

                <small>Question 4 of 5</small>
                <h5 class="text-center mt-3 mb-3">Unggah Gambar</h5>
                <div class="uploadOuter">
                    <label for="uploadFile" class="btn btn-primary">Upload Image</label>
                    <strong>OR</strong>
                    <span class="dragBox">
                        Drag and Drop image here
                        <input type="file" onChange="dragNdrop(event)" ondragover="drag()" ondrop="drop()"
                            id="uploadFile" />
                    </span>
                </div>
                <div id="preview"></div>
            </div>
            <div class="question-5 d-none">

                <small>Question 5 of 5</small>
                <h5 class="text-center mt-3 mb-3">Skala</h5>
                <div class="row g-2">
                    <div class="col fw-bold text-end">
                        A
                    </div>
                    <div class="col-auto">
                        <div class="row g-0">
                            <div class="col-12 text-center">
                                <input type="radio" name="scaling" id="1">
                            </div>
                            <div class="col-12 text-center">
                                1
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="row g-0">
                            <div class="col-12 text-center">
                                <input type="radio" name="scaling" id="2">
                            </div>
                            <div class="col-12 text-center">
                                2
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="row g-0">
                            <div class="col-12 text-center">
                                <input type="radio" name="scaling" id="3">
                            </div>
                            <div class="col-12 text-center">
                                3
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="row g-0">
                            <div class="col-12 text-center">
                                <input type="radio" name="scaling" id="4">
                            </div>
                            <div class="col-12 text-center">
                                4
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="row g-0">
                            <div class="col-12 text-center">
                                <input type="radio" name="scaling" id="5">
                            </div>
                            <div class="col-12 text-center">
                                5
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="row g-0">
                            <div class="col-12 text-center">
                                <input type="radio" name="scaling" id="6">
                            </div>
                            <div class="col-12 text-center">
                                6
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="row g-0">
                            <div class="col-12 text-center">
                                <input type="radio" name="scaling" id="7">
                            </div>
                            <div class="col-12 text-center">
                                7
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="row g-0">
                            <div class="col-12 text-center">
                                <input type="radio" name="scaling" id="8">
                            </div>
                            <div class="col-12 text-center">
                                8
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="row g-0">
                            <div class="col-12 text-center">
                                <input type="radio" name="scaling" id="9">
                            </div>
                            <div class="col-12 text-center">
                                9
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="row g-0">
                            <div class="col-12 text-center">
                                <input type="radio" name="scaling" id="10">
                            </div>
                            <div class="col-12 text-center">
                                10
                            </div>
                        </div>
                    </div>
                    <div class="col fw-bold">
                        D
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-end">
            <button class="btn btn-primary p-2 ambil-survey">Ambil Survei</button>
            <button class="btn btn-primary p-2 next-to-q2 d-none">Next</button>
            <button class="btn btn-outline-primary p-2 text-start back-to-q1 d-none">Back</button>
            <button class="btn btn-primary p-2 next-to-q3 d-none">Next</button>
            <button class="btn btn-outline-primary p-2 text-start back-to-q2 d-none">Back</button>
            <button class="btn btn-primary p-2 next-to-q4 d-none">Next</button>
            <button class="btn btn-outline-primary p-2 text-start back-to-q3 d-none">Back</button>
            <button class="btn btn-primary p-2 next-to-q5 d-none">Next</button>
            <button class="btn btn-outline-primary p-2 text-start back-to-q4 d-none">Back</button>
            <button class="btn btn-primary p-2 submit d-none">Submit</button>
        </div>
    </div>
</div>

@endsection
