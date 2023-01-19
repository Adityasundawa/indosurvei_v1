<?php 

use App\Models\ShortQuestion;
use App\Models\Typesurvey;
?>

<?php 

$question = ShortQuestion::find($id_question);

?>
<div class="col-12 border-bottom cus-hov p-3 edit-tanya" data-type="Jawaban Singkat"
    data-type-class="jawaban-singkat-edit" data-bs-toggle="modal" data-bs-target="#editTanya-{{$id_question}}">
    <div class="d-flex">
        <div class="flex-shrink-0">
            <h5>
                {{$id_question}}
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
<div class="modal fade" id="editTanya-{{$id_question}}" tabindex="-1"
aria-labelledby="tambahTanyaLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="tambahTanyaLabel">Edit Pertanyaan
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
                        rows="3"> {{$question['question']}}</textarea>
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