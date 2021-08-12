<!DOCTYPE html>
<!--
Template Name: Multifarious - Responsive HTML Template
Version: 1.0.0
Author: Kamleshyadav
Website:
Purchase:
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->
<!-- Begin Head -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=3.0">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/font.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/comman.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style3.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/floating-wpp.css') }}">
    <link rel="shortcut icon" type="image/ico" href="{{ url('assets/images/index5/logo pmp.png') }}" />
    @yield('css')
    <title>PMP</title>
</head>

<body>
    <!-- Preloader Box -->
    <div class="preloader_wrapper preloader_active preloader_open">
        <div class="preloader_holder">
            <div class="preloader d-flex justify-content-center align-items-center h-100" style="color: yellow;">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- Main Wraapper -->
    <div class="main_wrapper">
        <!-- Header Start -->
        <header>
            @include('layouts.header')
        </header>
        @yield('content')
    </div>
    <footer>
        @include('layouts.footer')
    </footer>
    <!-- GO To Top -->
    <a href="javascript:void(0);" id="scroll"><span class="fa fa-angle-double-up"></span></a>
    <div class="floating-wpp"></div>
</body>
<script src="{{ url('assets/js/jquery.min.js') }}"></script>
<script src="{{ url('assets/js/floating-wpp.js') }}"></script>
<script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ url('assets/js/SmoothScroll.min.js') }}"></script>
<script src="{{ url('assets/js/nice-select.min.js') }}"></script>
<script src="{{ url('assets/js/swiper.min.js') }}"></script>
<script src="{{ url('assets/js/wow.min.js') }}"></script>
<script src="{{ url('assets/js/tilt.js') }}"></script>
<script src="{{ url('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ url('assets/js/custom.js') }}"></script>
<script src="{{ url('assets/js/angular.min.js.download') }}"></script>
<script>
    $('.floating-wpp').floatingWhatsApp({

        // phone number
        phone: '+62895395423175',

        // message to send
        message: '',

        // icon size
        size: '50px',

        // background color
        backgroundColor: '#25D366',

        // or right
        position: 'right',

        // message in popup
        popupMessage: 'Ada yang Bisa Kami Bantu ?',

        // show a chat popup on hover
        showPopup: true,

        // show on IE
        showOnIE: true,

        // in milliseconds
        autoOpenTimer: 0,

        // header color
        headerColor: '#128C7E',

        // header title
        headerTitle: 'Chat Dengan Kami di WhatsApp!',

        // z-index property
        zIndex: 0,

    });

</script>
<script>
    $(document).ready(function() {
        // $("#hasil_bentuk").css("display","none");
        $("#button_bentuk").click(function() {
            $("#hasil_bentuk").toggle("fast");
            $("#hasil_benefit").css("display", "none");
        })
    });
    $(document).ready(function() {
        $("#hasil_benefit").css("display", "none");
        $("#button_benefit").click(function() {
            $("#hasil_benefit").toggle("fast");
            $("#hasil_bentuk").css("display", "none");
        })
    });

</script>

</html>
