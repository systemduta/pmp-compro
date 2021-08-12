<div class="dr_header_wrapper">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-5">
                <div class="dr_logo">
                    <a href="/"><img src="{{ url('assets/images/index5/logo_landing.png') }}" alt="logo" /></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-8 col-7">
                <div class="dr_main_menu main_menu_parent">
                    <!-- Header Menus -->
                    <div class="dr_nav_items main_menu_wrapper text-right fn-t">
                        <ul>
                            <li class="has_submenu {{ request()->is(['produk/*', 'produk']) ? 'active' : '' }}">
                                <a href="javascript:void(0);">{{ __('bahasa.produk') }}</a>
                                <ul class="sub_menu">
                                    <li class=" {{ request()->is('produk/produk_balok') ? 'active' : '' }}"><a
                                            href="{{ url('produk/produk_balok/') }}">{{ __('bahasa.es balok') }}</a>
                                    </li>
                                    <li class="{{ request()->is('produk/produk_kristal') ? 'active' : '' }}"><a
                                            href="{{ url('produk/produk_kristal/') }}">{{ __('bahasa.es kristal') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has_submenu {{ request()->is('tentang_kami') ? 'active' : '' }}">
                                <a href="{{ url('/tentang_kami/') }}">{{ __('bahasa.tentang kami') }}</a>
                                <ul class="sub_menu">
                                    <li><a
                                            href="{{ url('/tentang_kami/#tentang/') }}">{{ __('bahasa.tentang kami') }}</a>
                                    </li>
                                    <li><a href="{{ url('/tentang_kami/#chairman/') }}">Chairman</a></li>
                                    <li><a
                                            href="{{ url('/tentang_kami/#struktur/') }}">{{ __('bahasa.struktur perusahaan') }}</a>
                                    </li>
                                    <li><a href="{{ url('/tentang_kami/#milestone/') }}">Milestone</a></li>
                                    <li><a href="{{ url('/tentang_kami/#coporate/') }}">Coporate Value</a></li>
                                    <li><a
                                            href="{{ url('/tentang_kami/#komitmen_kami/') }}">{{ __('bahasa.komitmen kami') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ url('/tentang_kami/#profil/') }}">{{ __('bahasa.profil perusahaan') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ url('/tentang_kami/#berita/') }}">{{ __('bahasa.berita') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ url('/tentang_kami/#kegiatan csr/') }}">{{ __('bahasa.kegiatan CSR') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has_submenu {{ request()->is('mitra') ? 'active' : '' }}">
                                <a href="{{ url('/mitra/') }}">{{ __('bahasa.mitra dan jaringan') }}</a>
                                <ul class="sub_menu">
                                    <li><a
                                            href="{{ url('/mitra/#komitmen_kami') }}">{{ __('bahasa.komitmen_mitra') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ url('/mitra/#hubungan_baik') }}">{{ __('bahasa.hubungan baik') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ url('/mitra/#jaringan_kami') }}">{{ __('bahasa.jaringan kami') }}</a>
                                    </li>
                                </ul>
                            </li>
                            {{-- <li class="has_submenu">
								<a href="{{url('/csr/')}}">CSR</a>
								<ul class="sub_menu">
									<li><h2>CSR</h2></li>
									<li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic incidunt quia expedita, non omnis sequi, perferendis modi, nam laudantium accusantium voluptatibus repellat harum? Enim aut at aperiam itaque soluta distinctio.</p></li>
								</ul>
							</li> --}}
                            <li class="has_submenu {{ request()->is('karir') ? 'active' : '' }}">
                                <a href="{{ url('/karir/') }}">{{ __('bahasa.karir') }}</a>
                                <ul class="sub_menu">
                                    <!-- <li><a href="{{ url('/karir/#fasilitas') }}">{{ __('bahasa.fasilitas') }}</a></li> -->
                                    <li><a href="{{ url('/karir/#loker') }}">{{ __('bahasa.lowongan') }}</a></li>
                                </ul>
                            </li>
                            <li class="has_submenu {{ request()->is('relasi_investor') ? 'active' : '' }}">
                                <a href="{{ url('/relasi_investor/') }}">{{ __('bahasa.relasi investor') }}</a>
                                <ul class="sub_menu">
                                    <li><a
                                            href="{{ url('/relasi_investor/#prospek_kerja_sama') }}">{{ __('bahasa.prospek kerja sama') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ url('/relasi_investor/#bentuk_kerja_sama') }}">{{ __('bahasa.bentuk kerja sama') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has_submenu">
                                <a href="javascript:void(0);">{{ __('bahasa.bahasa') }}</a>
                                <ul class="sub_menu">
                                    <li><a
                                            href="{{ route('localization.switch', 'en') }}">{{ __('bahasa.inggris') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ route('localization.switch', 'id') }}">{{ __('bahasa.indonesia') }}</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="dr_search_wrap menu_btn_wrap">
                        <ul class="display_flex">
                            <li>
                                <a href="javascript:void(0);" class="menu_btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
