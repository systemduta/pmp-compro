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
    <section class="loc_contact_wrapper_karir">
        <div class="container">
            <div style="padding-bottom: 2%" class="row justify-content-center">
                <div class="col-lg-11 col-md-12 col-sm-12 col-12">
                    <h3>{{__('bahasa.karir1')}}</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-11 col-md-12 col-sm-12 col-12">
                    <p style="text-align: justify;">{{__('bahasa.karir2')}}</p><br>
                    <p style="text-align: justify;">{{__('bahasa.karir3')}}</p>
                </div>
            </div>
        </div>
    </section>
    <section id="loker" class="dr_testimonial_wrapperk relative">
        <h3 align="center">{{__('bahasa.lowongan')}}</h3>
        <div class="swiper-container dr_banner_slider " style="margin-top: 4%;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-md-12 col-sm-12 col-12 text-center">
                                <img class="parallax_menu" src="{{url('assets/images/index5/internship1.png')}}"  width="60%"/>
                            </div>
                            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                <h3 class="dr_subHeading_menu">Internship</h3>
                                <p style="text-align: justify;">{{__('bahasa.internship1')}}</p>
                                <p style="text-align: right;"><a style="color: #CA1117;" href="{{url('/karir/internship')}}">{{__('bahasa.selanjutnya')}} -></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-md-12 col-sm-12 col-12 text-center">
                                <img class="parallax_menu" src="{{url('assets/images/index5/posisia1.png')}}"  width="60%"/>
                            </div>
                            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                <h3 class="dr_subHeading_menu">Staff Engineer</h3>
                                <p style="text-align: justify;">{{__('bahasa.posisia1')}}</p>
                                <p style="text-align: right;"><a style="color: #CA1117;" href="{{url('/karir/position_a')}}">{{__('bahasa.selanjutnya')}} -></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-md-12 col-sm-12 col-12 text-center">
                                <img class="parallax_menu" src="{{url('assets/images/index5/posisib1.png')}}"  width="60%"/>
                            </div>
                            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                <h3 class="dr_subHeading_menu">Accounting</h3>
                                <p style="text-align: justify;">{{__('bahasa.posisib1')}}</p>
                                <p style="text-align: right;"><a style="color: #CA1117;" href="{{url('/karir/position_b')}}">{{__('bahasa.selanjutnya')}} -></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top:3%;" class="pagination"></div>
    </section>
    <section class="sukses">
        <div class="container">
            <h2 style="color: white; text-align:center;">{{__('bahasa.karir4')}}</h2>
        </div>
    </section>
    {{-- <script>
		function openPage(evt, name) {
		  var i, tabcontent, tablinks;
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablink");
		  for (i = 0; i < tablinks.length; i++) {
			tablinks[i].style.backgroundColor = "";
		  }
		  document.getElementById(name).style.display = "block";
		}
		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
    </script> --}}

@endsection