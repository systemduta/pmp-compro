@extends('admin.layouts.app')

@section('content')
    <style>
        .a {
            /* width: 150px; */
            height: 150px;
            object-fit: cover;
            object-position: center;
        }

    </style>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!-- Button trigger modal -->
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">
                    Tambah Berita</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>deskripsi</th>
                                <th>Gambar</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>deskripsi</th>
                                <th>Gambar</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($data as $n => $item)
                                <tr>
                                    <td>{{ ++$n }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{!! Str::limit($item->deskripsi, 50) !!}</td>
                                    <td>
                                        <img class="a" src="{{ url('berita/' . $item->image) }}" alt="">
                                    </td>
                                    <td>
                                        <a href="{{ route('edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="{{ route('destroy', $item->id) }}"
                                            class="btn btn-sm btn-danger">hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Berita</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form role="form" action="{{ route('berita') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class=" modal-body">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Judul Berita</label>
                                <input class="form-control" name="title" type="text" placeholder="Judul Berita" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Foto</label>
                                <input class="form-control" name="image" type="file" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Isi Berita</label>
                                <textarea name="deskripsi" id="editor1"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection

@section('addJs')
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');

    </script>
@endsection
