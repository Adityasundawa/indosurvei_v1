


<div class="modal-header">
    <h1 class="modal-title fs-5" id="tambahTanyaLabel">Edit Pertanyaan
    </h1>
    <button type="button" class="btn-close  btn-close-alert "></button>
</div>
<form id="editForm" action="{{ route('edit.multiple_question', $question['id']) }}" method="POST">
    <div class="modal-body text-start">
      @csrf
        <div class="mb-3">
            <label for="tanya-tipe" class="form-label">Tipe
                Pertanyaan</label>
            <select class="form-select tipe-tanya-edit" name="tanya-tipe" id="tanya-tipe">
                <option value="Jawaban Singkat">Jawaban Singkat</option>
                <option value="Pilihan Ganda" selected>Pilihan Ganda</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="tanya" class="form-label">Pertanyaan</label>
            <textarea class="form-control" name="question" id="tanya" rows="3">{{$question['question']}}</textarea>
        </div>

         <div class="pilihan-ganda-edit adhd">
            <div class="append-here">
                <label for="pilihan" class="form-label">Pilihan</label>

                <?php $i = 1 ?>

                @foreach ($answer as $an)
                <?php $ide =  $i++ ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="pilihan-{{$an['id']}}" class="form-label hanya label-terdekat">Pilihan {{$ide}}</label>
                            <input type="text"
                            class="form-control input-terdekat" value="{{$an['answer']}}" name="pilihan[{{$an['id']}}]" id="pilihan-{{$an['id']}}" aria-describedby="helpId" placeholder="Masukkan Pilihan {{$an['id']}}">
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input kustom-1 input-terdekat-check" 
                                        type="checkbox"
                                      id="kustom-{{$an['id']}}" name="lainnya[]" value="Lainnya">
                                    <label class="form-check-label label-terdekatphp"
                                        for="kustom-{{$an['id']}}">
                                        Kustom Jawaban
                                    </label>
                                </div>
                            </div>
                        </div>
                         <button type="button" class="btn btn-danger delete-card-edit">delete</button>
                    </div>
                </div>
                @endforeach
               
            
            </div>
            <a href="#" id="clone-tanya-edit">Tambah <i class="ri-add-line"></i></a>
        </div>
    </div>
</form>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary btn-close-alert">Close</button>
    <button class="btn btn-danger btn-delete-multiple-question" data-id="{{ $question['id'] }}">Delete</button>
    <button type="submit" form="editForm" class="btn btn-primary btn-update">Save changes</button>
</div>
