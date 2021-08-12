@extends('admin.layouts.app')

@section('content')
    {{-- modal edit --}}
    <form role="form" action="{{ route('update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class=" modal-body">
            <div class="form-group">
                <label for="exampleFormControlInput1">Judul Berita</label>
                <input class="form-control" value="{{ $berita->title }}" name="title" type="text"
                    placeholder="Judul Berita">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Foto</label>
                <input class="form-control" value="{{ url('berita/' . $berita->image) }}" name="image" type="file">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Isi Berita</label>
                <textarea name="deskripsi" id="editor1">{{ $berita->deskripsi }}</textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
@endsection
@section('addJs')
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');

    </script>
@endsection
