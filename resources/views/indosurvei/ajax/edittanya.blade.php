<div class="modal-header">
    <h1 class="modal-title fs-5" id="tambahTanyaLabel">Edit Pertanyaan
    </h1>
    <button type="button" class="btn-close btn-close-alert"></button>
</div>
<form id="editForm" action="{{ route('edit.short_question', $question['id']) }}" method="POST">
<div class="modal-body text-start">
    {{ method_field('patch') }}
    {{ csrf_field() }}
        <div class="mb-3">
            <label for="tanya-tipe" class="form-label">Tipe
                Pertanyaan</label>
            <select class="form-select tipe-tanya-edit" name="tanya-tipe" id="tanya-tipe">
                <option value="Jawaban Singkat">Jawaban Singkat</option>
                <option value="Pilihan Ganda">Pilihan Ganda</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="tanya" class="form-label">Pertanyaan</label>
            <textarea class="form-control" name="question" id="tanya" rows="3"> {{$question['question']}}</textarea>
        </div>

        <div class="pilihan-ganda-edit adhd d-none">
            <div class="append-here">
                <label for="pilihan" class="form-label">Pilihan</label>
                <div class="card mb-3" id="pilihan">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="pilihan-1" class="form-label">Pilihan 1</label>
                            <input type="text" class="form-control" name="pilihan[]" id="pilihan-1"
                                aria-describedby="helpId" placeholder="Masukkan Pilihan 1">
                        </div>
                        <div class="row mb-3">

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input kustom-1" type="checkbox" 
                                    id="kustom-1"
                                    name="lainnya[]"
                                        value="Lainnya">
                                    <label class="form-check-label" for="kustom">
                                        Kustom Jawaban
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>
            <a href="#" id="clone-tanya-edit">Tambah <i class="ri-add-line"></i></a>
        </div>
</div>
</form>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary btn-close-alert">Close</button>
    <button class="btn btn-danger btn-delete" data-id="{{ $question['id'] }}">Delete</button>
    <button type="submit" form="editForm"  class="btn btn-primary btn-update" >Save changes</button>
</div>
