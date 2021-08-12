@extends('layouts.template')
@section('content')

    <!-- Page Title Start -->
    <section class="bgtentang">
        <div class="containertentang">
            <img class="gmbrbgtentang" style="height: 10%;" src="{{ url('assets/images/index5/PROFILE PHOTO 5.png') }}" />
            <div>
                <img style="height:auto;" src="{{ url('assets/images/index5/about_us_header.png') }}" />
            </div>
        </div>
    </section>
    <!-- About Start -->
    <section class="loc_about_wrapper_about" id="tentang">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb_30">
                <h5>{{ __('bahasa.tentang kami') }}</h5>
                <br>
                <div class="loc_about_text " align="justify">
                    <p>{{ __('bahasa.detail_tentang_kami_1') }}</p>
                    <p>{{ __('bahasa.detail_tentang_kami_2') }}</p>
                    <p>{{ __('bahasa.detail_tentang_kami_3') }}</p>
                </div>
                <br>
                <div class="vot_caseStudy_laws_comitmeen" align="right">
                    <a href="{{ url('/tentang_kami/sejarahkami') }}"><button type="button" class="#"
                            style="background-color: #CA1117; border-color: white;  color:white; width: 100%; height: auto;"
                            align="right">{{ __('bahasa.selengkapnya sejarah kami') }}</button></a>
                </div>
            </div>
        </div>
    </section>

    <section class="vot_caseStudy_wrapper dr_counter_wrapper " id="chairman">
        <div class="row">
            <div class="col-lg-3 col-md-10 col-sm-10 col-10 mb_30">
                <div class="vot_caseStudy_img_about center">
                    <img class="parallax_about" src="{{ url('assets/images/index5/pak_bobby.png') }}" alt="chairman" />
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 col-12 mb_30">
                <div class="vot_caseStudy_container white" align="justify">
                    <h5 style="color: white; margin-bottom:10%;">Chairman Voice</h5>
                    <div class="vot_caseStudy_laws_about" style="color: white; margin-top:10px;">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Wraapper -->
    <section class="" id="struktur">
        <div class="container">
            <div class="loc_contact_info1 loc_info_bg">
                <div class="loc_conatact_section">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb_30">
                            <div class="vot_caseStudy_container">
                                <div class="struktur" style="align-text:center;">
                                    <img src="{{ url('assets/images/index5/struktur.png') }}" alt="chairman" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="loc_about_wrapper_abou container" id="milestone">
        <div class="swiper-container dr_banner_slider">
            <div>
                <h5 align="center" style="margin-bottom: 3%;">Milestone</h5>
            </div>
            <div class="swiper-wrapper container">
                <div class="swiper-slide">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <img class="gmbrkom" src="{{ url('assets/images/index5/line_1.png') }}" />
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <p class="banner_kanan">{{ __('bahasa.detail_tentang_kami_5') }}</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <p class="banner_kiri">{{ __('bahasa.detail_tentang_kami_6') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <img class="gmbrkom" src="{{ url('assets/images/index5/line_3.png') }}" />
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <p class="banner_kanan">{{ __('bahasa.detail_tentang_kami_8') }}</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <p class="banner_kiri">{{ __('bahasa.detail_tentang_kami_7') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <img class="gmbrkom" src="{{ url('assets/images/index5/line_2.png') }}" />
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <p class="banner_kanan">{{ __('bahasa.detail_tentang_kami_10') }}</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <p class="banner_kiri">{{ __('bahasa.detail_tentang_kami_9') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="loc_about_wrapper_coporate" style="background-color: #eeeeef;" id="coporate">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12" align="center">
                <br>
                <h4 align="center">Coporate value</h4>
                <br>
                <div align="center">
                    <img class="parallax_vhs" src="{{ url('assets/images/index5/VHS.png') }}" alt="VHS" />
                </div>
                <br>
                <h5 align="center">{{ __('bahasa.visi') }}</h5>
                <h6>{{ __('bahasa.hati') }}</h6>
                <br>
            </div>
        </div>
    </section>
    <!-- Banner Wraapper -->
    <section id="komitmen_kami" class="vot_caseStudy_wrapper dr_counter_wrapper">
        <div class="row">
            <div class="col-lg-3 col-md-10 col-sm-10 col-10 mb_30">
                <div class="vot_caseStudy_img_about center">
                    <img class="parallax_about" src="{{ url('assets/images/index5/chairman.png') }}" alt="chairman" />
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 col-12 mb_30">
                <div class="vot_caseStudy_container white" align="justify" style="margin-left:8%;">
                    <h6 style="color: white; ">{{ __('bahasa.komitmen kami') }}</h6>
                    <br>
                    <div class="vot_caseStudy_laws_about" style="color: white; margin-top:10px; width:90%;">
                        <p>{{ __('bahasa.detail_tentang_kami_komitmen_kami') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="loc_contact_wrapper box" id="profil">
        <div class="container">
            <div class="loc_contact_info1 loc_info_bg">
                <div class="loc_conatact_section">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                            <div class="vot_caseStudy_img">
                                <img class="parallax" align="center"
                                    src="{{ url('assets/images/index5/profile_photo_2.png') }}" alt="profile_photo_2" />
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12 col-sm-12 col-12 mb_30">
                            <div class="vot_caseStudy_container">
                                <div class="vot_caseStudy_laws_comitmeen" align="justify">
                                    <h6>{{ __('bahasa.profil perusahaan') }}</h6>
                                    <p>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan
                                        huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun
                                        1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks
                                        dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan
                                        selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada
                                        perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya
                                        lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan
                                        seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga
                                        memiliki versi Lorem Ipsum.
                                    </p>
                                </div>
                                <div class="vot_caseStudy_laws_comitmeen" align="right">
                                    <a href="/laporan-pdf"><button type="button" class="#" target="_blank"
                                            style="background-color: #CA1117; border-color: white;  color:white; width: 150px; "
                                            align="right">{{ __('bahasa.download') }}</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="dr_plans_wrapper" id="berita">
        <div class="container">
            <h4 class="loc_sub_maps relative">{{ __('bahasa.berita') }}</h4>
            <!-- ======= Featured Services Section ======= -->
            <section id="featured-services" class="featured-services">
                <div class="container">
                    <div class="row">
                        @foreach ($data as $item)
                            <div class="col-md-6 col-lg-3   ">
                                <div class="icon-box" align="center">
                                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                    <img class="a" src="{{ url('berita/' . $item->image) }}" alt="berita_section" />
                                    <h6 class="title"><a
                                            href="{{ route('details', base64_encode($item->id)) }}">{{ $item->title }}</a>
                                    </h6>
                                    <p class="description">{!! Str::limit($item->deskripsi, 20) !!}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section><!-- End Featured Services Section -->
        </div>
    </section>

    <section class="loc_about_wrapper_about" id="ikhtisar">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 d-flex align-items-center mb_50" align="center">
                <div class="loc_about_text justify">
                    <h2 class="loc_sub_heading1 relative">{{ __('bahasa.semangat') }}</h2>
                    <p>{{ __('bahasa.detail_tentang_kami_4') }}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section Start -->
    <section class="dr_team_wrapper" id="kegiatan csr">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="dr_heading_csr white">
                        <h4>{{ __('bahasa.kegiatan CSR') }}</h4>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="team_slider swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="dr_team_section">
                                    <div class="dr_team_img">
                                        <img src="{{ url('assets/images/index5/team1.png') }}" alt="team1" />
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="dr_team_section">
                                    <div class="dr_team_img">
                                        <img src="{{ url('assets/images/index5/team2.png') }}" alt="team2" />
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="dr_team_section">
                                    <div class="dr_team_img">
                                        <img src="{{ url('assets/images/index5/team3.png') }}" alt="team3" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <style>
        .a {
            width: 210px;
            height: 130.8px;
            object-fit: cover;
            object-position: center;
        }

    </style>
@endsection
