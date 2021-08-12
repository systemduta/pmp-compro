@extends('layouts.template')
@section('content')
    <!-- Page Title Start -->
    <section class="bgtentang">
        <div class="containertentang">
            <img class="gmbrbgtentang" style="height: 10%;" src="{{ url('berita-original/' . $berita->image) }}" />
        </div>
    </section>
    <!-- About Start -->
    <section class="loc_about_wrapper_about" id="tentang">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb_30">
                <h5>{{ $berita->title }}</h5>
                <br>
                <div class="loc_about_text " align="justify">
                    <p>{!! $berita->deskripsi !!}</p>
                </div>
                <br>
            </div>
        </div>
    </section>
@endsection
