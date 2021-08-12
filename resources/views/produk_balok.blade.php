@extends('layouts.template') 
@section('content')

    <!-- Page Title Start -->
    <section class="bgbalok">
        <div class="containerbalok">
            <img class="gmbrbgrrelasi" src="{{ url ('assets/images/index5/esbalokbg.png') }}"/>
            <div class="contentjudul">
                <img src="{{ url ('assets/images/index5/judulbalok.png') }}">
            </div>
        </div>
    </section>
    <!-- About Start -->
    <section class="product">
        <div class="container">
            <div class="section-title">
                <h3>{{__('bahasa.produk kami')}}</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
                    <div class="kontenp">
                      <div class="kontenp-img">
                        <img src="{{ url ('assets/images/index5/esb.png') }}">
                      </div>
                      <div class="kontenp-info">
                        <h4>{{__('bahasa.es balok besar')}}</h4>
                        {{-- <span>38 cm x 19 cm x 119 cm</span>
                        <span>70 Kg</span> --}}
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
                    <div class="kontenp">
                      <div class="kontenp-img">
                        <img src="{{ url ('assets/images/index5/esb1.png') }}">
                      </div>
                      <div class="kontenp-info">
                        <h4>{{__('bahasa.es balok kecil')}}</h4>
                        {{-- <span>19 cm x 19 cm x 119 cm</span>
                        <span>35 Kg</span> --}}
                      </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" style="margin-top: 1%">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center mb_30" style="text-align: center;">
                    <div class="loc_about_text">
                        <h4 class="loc_sub_heading1 relative">{{__('bahasa.es balok')}}</h4>
                        <p>{{__('bahasa.desbalok')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dr_testimonial_wrapperp relative">
        <h2 style="text-align: center;">{{__('bahasa.produkj')}}</h2>
        <div class="swiper-container dr_banner_slider ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row justify-content-center" style="margin-top: 4%;">
                            <div class="col-lg-3 col-md-12 col-sm-12 col-12 text-center">
                                <img class="parallax_menu" src="{{url('assets/images/index5/prosesb1.png')}}"  width="60%"/>
                            </div>
                            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                <p class="pp-p">{{__('bahasa.produkb11')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row justify-content-center" style="margin-top: 4%;">
                            <div class="col-lg-3 col-md-12 col-sm-12 col-12 text-center">
                                <img class="parallax_menu" src="{{url('assets/images/index5/prosesb2.png')}}"  width="60%"/>
                            </div>
                            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                <p class="pp-p">{{__('bahasa.produkb21')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row justify-content-center" style="margin-top: 4%;">
                            <div class="col-lg-3 col-md-12 col-sm-12 col-12 text-center">
                                <img class="parallax_menu" src="{{url('assets/images/index5/prosesb3.png')}}"  width="60%"/>
                            </div>
                            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                <p class="pp-p">{{__('bahasa.produkb31')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row justify-content-center" style="margin-top: 4%;">
                            <div class="col-lg-3 col-md-12 col-sm-12 col-12 text-center">
                                <img class="parallax_menu" src="{{url('assets/images/index5/prosesb4.png')}}"  width="60%"/>
                            </div>
                            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                <p class="pp-p">{{__('bahasa.produkb41')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 5%;" class="pagination"></div>
    </section>
    <section style="margin-top: 2%; margin-bottom:3%;">
        <h2 style="text-align: center;">{{__('bahasa.jaringan kami')}}</h2>
        <link rel="stylesheet" href="{{url('assets/css/leaflet.css')}}"/>
        <script src="{{url('assets/js/leaflet.js')}}"></script>
        <div id="map" class="peta"></div>
        <script type='text/javascript'>
            var map = L.map('map', {
                crs: L.CRS.Simple,
                minZoom: 0
            });

            var bounds = [[-26.5,-25], [1021.5,1023]];
            var image = L.imageOverlay("{{ url ('assets/images/index5/maps.png') }}", bounds).addTo(map);
            map.fitBounds(bounds);
            var yx = L.latLng;

            var xy = function(x, y) {
                if (L.Util.isArray(x)) {    // When doing xy([x, y]);
                    return yx(x[1], x[0]);
                }
                return yx(y, x);  // When doing xy(x, y);
            };
            var markerkuning = L.icon({
            iconUrl: '../assets/images/index5/marker-icon1.png',
            iconRetinaUrl: '../assets/images/index5/marker-icon-2x1.png',
            shadowUrl: '../assets/images/index5/marker-shadow.png',
            iconSize:[25,41],iconAnchor:[12,41],popupAnchor:[1,-34],tooltipAnchor:[16,-28],shadowSize:[41,41]
            });
            var ponorogo = xy(480, 435);
            var madiun = xy(520, 490);
            var magetan = xy(490, 480);
            var ngawi = xy(475, 500);
            var sragen = xy(370, 500);
            var karanganyar = xy(400, 550);
            var rembang = xy(470, 600);
            var tuban = xy(520, 580);
            var ptuban = xy(545, 555);
            var wonogiri = xy(400, 440);
            var pacitan = xy(450, 400);
            var trenggalek = xy(580, 435);
            var tulungagung = xy(620, 420);
            var nganjuk = xy(560, 475);

            L.marker(ponorogo, {icon: markerkuning}).addTo(map).bindPopup('<b>Kec. Ponorogo, Kab. Ponorogo</b><br>PT. Prima Maesa Putra<br>PT. Mitra Kelola Esindo');
            L.marker(madiun).addTo(map).bindPopup('<b>Madiun</b><br>Wilayah Distribusi');
            L.marker(magetan).addTo(map).bindPopup('<b>Magetan</b><br>Wilayah Distribusi');
            L.marker(ngawi).addTo(map).bindPopup('<b>Ngawi</b><br>Wilayah Distribusi');
            L.marker(sragen).addTo(map).bindPopup('<b>Sragen</b><br>Wilayah Distribusi');
            L.marker(karanganyar).addTo(map).bindPopup('<b>Karanganyar</b><br>Wilayah Distribusi');
            L.marker(rembang).addTo(map).bindPopup('<b>Rembang</b><br>Wilayah Distribusi');
            L.marker(tuban).addTo(map).bindPopup('<b>Kec. Jenu, Kab. Tuban</b><br>PT. Putra Maesa Persada<br>PT. Mitra Samudra Esindo');
            L.marker(ptuban).addTo(map).bindPopup('<b>Kec. Plumpang, Kab. Tuban</b><br>PT. Panen Mutiara Pakis');
            L.marker(wonogiri).addTo(map).bindPopup('<b>Wonogiri</b><br>Wilayah Distribusi');
            L.marker(pacitan).addTo(map).bindPopup('<b>Pacitan</b><br>Wilayah Distribusi');
            L.marker(trenggalek).addTo(map).bindPopup('<b>Trenggalek</b><br>Wilayah Distribusi');
            L.marker(tulungagung).addTo(map).bindPopup('<b>Tulungagung</b><br>Wilayah Distribusi');
            L.marker(nganjuk).addTo(map).bindPopup('<b>Nganjuk</b><br>Wilayah Distribusi');
        </script>
    </section>
@endsection
