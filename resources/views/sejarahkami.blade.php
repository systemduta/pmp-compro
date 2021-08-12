@extends('layouts.template') 
@section('content')

<!-- Page Title Start -->
<section class="bgtentang">
    <div class="containertentang">
        <img class="gmbrbgtentang" style="height: 31em;" src="{{ url ('assets/images/index5/HEADER SEJARAH KAMI.png') }}"/>
        <div>
            <img style="height:8.4em;" src="{{ url ('assets/images/index5/JUDUL SEJARAH KAMI.png') }}"/>
        </div>
    </div>
</section>

<!-- About Start -->
<section class="loc_about_wrapper_about" id="tentang">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                <div class="gmbrbgtentang3">
                    <h4>1986</h4>
                </div>
                <img class="gmbrbgtentang1" src="{{ url ('assets/images/index5/LINE 1986.png') }}"/>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-10 ">
                <h4>JANGAN GORI</h4>
                <br>
                <img class="gmbrbgtentang2" src="{{ url ('assets/images/index5/JANGAN GORI SECTION.png') }}"/>
                <p>"{{__('bahasa.detail_gori1')}}” </p>
                <br>
                <p align="justify" class="mb_30">{{__('bahasa.detail_gori2')}}</p>
                <p align="justify" class="mb_30">{{__('bahasa.detail_gori3')}}</p>
                <p align="justify" class="mb_30">{{__('bahasa.detail_gori4')}}</p>
                <p align="justify" class="mb_30">{{__('bahasa.detail_gori5')}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                <div class="gmbrbgtentang3">
                    <h4>1986</h4>
                </div>
                <img class="gmbrbgtentang1" src="{{ url ('assets/images/index5/LINE 1986.png') }}"/>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                <h4>{{__('bahasa.judul_perjalanan')}}</h4>
                <br>
                <img class="gmbrbgtentang2 mb_30" src="{{ url ('assets/images/index5/PERJALANAN BUMI LANCAR SECTION.png') }}"/>
                <br>
                <p align="justify" class="mb_30">{{__('bahasa.detail_perjalanan1')}}</p>
                <p align="justify" class="mb_30">{{__('bahasa.detail_perjalanan2')}}</p>
                <p align="justify" class="mb_30">{{__('bahasa.detail_perjalanan3')}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                <div class="gmbrbgtentang3">
                    <h4>1998</h4>
                </div>
                <img class="gmbrbgtentang1" src="{{ url ('assets/images/index5/LINE 1998.png') }}"/>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                <h4>{{__('bahasa.judul_mitra')}}</h4>
                <br>
                <img class="gmbrbgtentang2 mb_30" src="{{ url ('assets/images/index5/MITRA SAMUDRA SECTION.png') }}"/>
                <br>
                <p align="justify" class="mb_30">{{__('bahasa.detail_mitra1')}}</p>
                <p align="justify" class="mb_30">{{__('bahasa.detail_mitra2')}}</p>
                <p align="justify" class="mb_30">{{__('bahasa.detail_mitra3')}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-2 ">
                <div class="gmbrbgtentang3">
                    <h4>2013</h4>
                </div>
                <img class="gmbrbgtentang1" src="{{ url ('assets/images/index5/LINE 2013.png') }}"/>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-10 ">
                <h4>{{__('bahasa.judul_melesatbersama')}}</h4>
                <br>
                <img class="gmbrbgtentang2 mb_30" src="{{ url ('assets/images/index5/MELESAT PMP SECTION.png') }}"/>
                <br>
                <p align="justify" class="mb_30">{{__('bahasa.detail_melesatbersama1')}}</p>
                <p align="justify" class="mb_30">{{__('bahasa.detail_melesatbersama2')}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-2 ">
                <div class="gmbrbgtentang3">
                    <h4>2019</h4>
                </div>
                <img class="gmbrbgtentang1" src="{{ url ('assets/images/index5/LINE 2019.png') }}"/>
                <!-- <img class="gmbrbgtentang2" src="{{ url ('assets/images/index5/LINE SEJARAH.png') }}"/> -->
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-10 mb_30">
                <h4>{{__('bahasa.judul_rajaes')}}</h4>
                <br>
                <img class="gmbrbgtentang2 mb_30" src="{{ url ('assets/images/index5/RAJA ES SECTION.png') }}"/>
                <br>
                <p align="justify">{{__('bahasa.detail_rajaes')}}</p>
            </div>
        </div>
    </div>
</section>

@endsection