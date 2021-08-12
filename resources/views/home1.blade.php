@extends('layouts.template') 
@section('content')

<!-- Banner Wraapper -->
<section class="dr_banner_wrapper relative">
    <div class="swiper-container dr_banner_slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                        <img src="{{url('assets/images/index5/slide1.png')}}" alt="slide" />
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                        <img src="{{url('assets/images/index5/slide2.png')}}" alt="slide" />
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                        <img src="{{url('assets/images/index5/slide3.png')}}" alt="slide" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="dr_testimonial_wrapper relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-6 col-6 text-center">
                <img src="{{url('assets/images/index5/stt.png')}}"/>
            </div>
            <div class="col-lg-7 col-md-10 col-sm-10 col-10 text-center">
                <div class="dr_heading">
                    <h4>{{__('bahasa.semangatt')}}</h4>   
                    <h6>{{__('bahasa.menjadikan')}}</h6>                         
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dr_banner_wrapper_our relative" style="background-color: #eeeeef;">
    <div class="swiper-container dr_banner_slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                            <div class="konten-komitmen">
                                <h2>{{__('bahasa.komitmen1')}}</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4 ">
                            <img  class="gmbrkom" src="{{url('assets/images/index5/komitmen1.png')}}"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                            <div class="konten-komitmen">
                                <h2>{{__('bahasa.komitmen2')}}</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4 ">
                            <img  class="gmbrkom" src="{{url('assets/images/index5/komitmen2.png')}}"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                            <div class="konten-komitmen">
                                <h2>{{__('bahasa.komitmen3')}}</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4 ">
                            <img  class="gmbrkom" src="{{url('assets/images/index5/komitmen3.png')}}"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                            <div class="konten-komitmen">
                                <h2>{{__('bahasa.komitmen4')}}</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4 ">
                            <img  class="gmbrkom" src="{{url('assets/images/index5/komitmen4.png')}}"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                            <div class="konten-komitmen">
                                <h2>{{__('bahasa.komitmen5')}}</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4 ">
                            <img  class="gmbrkom" src="{{url('assets/images/index5/komitmen5.png')}}"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Wraapper -->
<section class="tesimon">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-1 col-md-2 col-sm-2 col-2">
                <img src="{{url('assets/images/index5/kutip1.png')}}"/>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                <div class="swiper-container dr_banner_slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="kontenrep">
                                <h3>{{__('bahasa.reputasi1nama')}}</h3>
                                <span>{{__('bahasa.reputasi1')}}</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="kontenrep">
                                <h3>{{__('bahasa.reputasi2nama')}}</h3>
                                <span>{{__('bahasa.reputasi2')}}</span>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 10%;" class="pagination"></div>
                </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-2 col-2">
                <img src="{{url('assets/images/index5/kutip2.png')}}"/>
            </div>
        </div>
    </div>
</section>
@endsection