@extends('layouts.template') 
@section('content')

<!-- banner -->
<section class="bgrelasi">
    <div class="containerrelasi">
        <img class="gmbrbgrrelasi" src="{{ url ('assets/images/index5/photo_profile_investor.png') }}"/>
        <div>
            <img src="{{ url ('assets/images/index5/header_investor.png') }}"/>
        </div>
    </div>
</section>

<section class="loc_about_wrapper" id="prospek_kerja_sama">
    <div class="containerre">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb_5">
            <div class="loc_about_text justify mb_10">
                <h3 style="margin-bottom: 30px;">{{__('bahasa.prospek kerja sama')}}</h3>
                <p align="justify" class="d-flex align-items-center mb_30">
                    {{__('bahasa.detail_prospek_1')}}
                </p>
                <p align="justify" class="d-flex align-items-center mb_30">
                    {{__('bahasa.detail_prospek_2')}}
                </p>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 d-flex align-items-center ">
            <div class="loc_about_text">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                        <img src="{{ url ('assets/images/index5/logo pmp1.png') }}">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                        <h6>{{__('bahasa.raihlah peluang')}}</h6>
                    </div> 
                    <div class="col-lg-5 col-md-5 col-sm-5 col-5">
                        <a href="/laporan-pdf"><button type="button" class="#" style="background-color: #CA1117; border-color: white;  color:white;">{{__('bahasa.selanjutnya')}} -></button></a>
                    </div> 
                </div>              
            </div>
        </div>
    </div>
</section>

<section class="loc_about_wrapper" id="prospek_kerja_sama">
    <div class="containerre">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb_5">
            <div class="loc_about_text justify mb_10">
                <h3 style="margin-bottom: 30px;">{{__('bahasa.bentuk kerja sama')}}</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4 text-center align-items-stretch">
                    <div class="kontenp">
                      <div class="kontenp-img">
                        <img src="{{ url ('assets/images/index5/PABRIK BARU.png') }}">
                      </div>
                      <div class="kontenp-info" align="center" style="margin-top: 5%; margin-bottom: 5%;">
                        <h6>{{__('bahasa.isi_visi')}}</h6>
                        <h6>Produksi Es Prigi, Pasuruan</h6>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center align-items-stretch">
                    <div class="kontenp">
                      <div class="kontenp-img">
                        <img src="{{ url ('assets/images/index5/PABRIK BARU.png') }}">
                      </div>
                      <div class="kontenp-info" align="center" style="margin-top: 5%; margin-bottom: 5%;">
                        <h6>{{__('bahasa.isi_visi')}}</h6>
                        <h6>Produksi Es Pakis, Malang</h6>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection


