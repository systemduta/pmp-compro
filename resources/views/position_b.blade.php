@extends('layouts.template') 
@section('content')

<section class="bgkarir">
    <div class="containerkarir">
        <img class="gmbrbgkarir" src="{{ url ('assets/images/index5/karir.png') }}"/>
        <div class="contentjudul">
            <img src="{{ url ('assets/images/index5/joinus.png') }}"/>
        </div>
    </div>
</section>
<section style="margin-bottom:3%;" class="loc_about_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 col-12 mb_30">
                    <div class="loc_about_imgkb relative">
                        <img src="{{ url ('assets/images/index5/posisib.png') }}">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center mb_30">
                    <div class="loc_about_text">
                        <h4 class="loc_sub_heading1 relative" style="color : black;">ACCOUNTING</h4>
                        <p style="text-align: justify;">{{__('bahasa.posisib1')}}</p>
                        <div class="loc_divider"></div>
                        <h4 class="loc_sub_heading1 relative">{{__('bahasa.persyaratan')}}</h4>
                        <li>{{__('bahasa.posisib2')}}</li>
                        <li>{{__('bahasa.posisib3')}}</li>
                        <li>{{__('bahasa.posisib4')}}</li>
                        <li>{{__('bahasa.posisib5')}}</li>
                        <li>{{__('bahasa.posisib6')}}</li><br>
                        <button class="mendaftar"><a style="color: white;" href="#">{{__('bahasa.mendaftar')}}</a></button>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection