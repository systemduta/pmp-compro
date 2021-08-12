@extends('layouts.template') 
@section('content')

<section class="bgmitra">
    <div class="containermitra">
        <img class="gmbrbgrrelasi" src="{{ url ('assets/images/index5/mitraj.png') }}"/>
        <div class="contentjudulm">
            <img src="{{ url ('assets/images/index5/tulisanmitraj.png') }}">
        </div>
    </div>
</section>
<section id="komitmen_kami" class="mjd-mitra" style="margin-top: 5%">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-12 col-sm-12 col-12 d-flex align-items-center mb_30">
                <img src="{{ url ('assets/images/index5/mitravector.png') }}">
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="tulisanmjd">
                    <h3>{{__('bahasa.mjd-mitra')}}</h3>
                    <p>{{__('bahasa.mjd-mitra1')}}</p>
                    <a href="#"><button type="button" class="#" style="background-color: #CA1117; border-color: white;  color:white;">{{__('bahasa.download')}}</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="hubungan_baik" class="hub-baik">
    <div class="container">
        <div class="section-title">
            <h3>{{__('bahasa.hubungan baik')}}</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 d-flex align-items-center mb_30">
                <img src="{{ url ('assets/images/index5/hub3.png') }}">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 d-flex align-items-center mb_30">
                <img src="{{ url ('assets/images/index5/hub2.png') }}">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 d-flex align-items-center mb_30">
                <img src="{{ url ('assets/images/index5/hub1.png') }}">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-9 col-sm-12 col-12" style="line-height: normal;">
                <p style="text-align: justify;">{{__('bahasa.hub-baik1')}}</p><br>
                <p style="text-align: justify;">{{__('bahasa.hub-baik2')}}</p><br>
                <p style="text-align: justify;">{{__('bahasa.hub-baik3')}}</p>
            </div>
        </div>
    </div>
</section>
<section id="jaringan_kami">
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
<section class="sukses">
    <div class="container">
        <h2 style="color: white; text-align:center;">{{__('bahasa.karir4')}}</h2>
    </div>
</section>

@endsection
