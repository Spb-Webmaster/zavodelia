<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{{ csrf_token() }}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @livewireStyles--}}
    @vite([
    'resources/css/app.css',
    'resources/js/app.js',
    ])
    @PwaHead <!-- PWA meta tags directive -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <title>@yield('title', config('seo.seo.title'))</title>
    <meta name="description" content="@yield('description',  config('seo.seo.description'))"/>
    <meta name="keywords" content="@yield('keywords',  config('seo.seo.keywords'))"/>

    <link rel="stylesheet" id="flaticon-css" href="/css/flaticon.css" type="text/css" media="all">
    <link rel="stylesheet" id="icofont-css" href="/css/icofont.css" type="text/css" media="all">
    <link rel="stylesheet" id="aprova-css" href="/css/aprova-icon.css" type="text/css" media="all">
    <link rel="stylesheet" id="bootstrap-css" href="/css/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" id="venobox-css" href="/css/venobox.css" type="text/css" media="all">
    <link rel="stylesheet" id="slickcss-css" href="/css/slick.css" type="text/css" media="all">
    <link rel="stylesheet" id="top_menu-css" href="/css/top_menu.css" type="text/css" media="all">
    <link rel="stylesheet" id="meanmenu-css" href="/css/meanmenu.css" type="text/css" media="all">
    <link rel="stylesheet" id="techite_main_style-css" href="/css/main_style.css" type="text/css" media="all">
    <link rel="stylesheet" id="twr_theme_color-css" href="/css/twr_theme_color.css" type="text/css" media="all">
    <link rel="stylesheet" id="techite_responsive-css" href="/css/responsive.css" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-css" href="/css/elementor-icons.css" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-frontend-css" href="/css/frontend.css" type="text/css" media="all">
    <link rel="stylesheet" id="swiper-css" href="/css/swiper.css" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-6-css" href="/css/post-6.css" type="text/css" media="all">
    <link rel="stylesheet" id="themify-icons-css" href="/css/themify-icons.css" type="text/css" media="all">
    <link rel="stylesheet" id="swipercss-css" href="/css/txbd-swiper-bundle.css" type="text/css" media="all">
    <link rel="stylesheet" id="animatecss-css" href="/css/animate.css" type="text/css" media="all">
    <link rel="stylesheet" id="wbtn-css" href="/css/wbtn.css" type="text/css" media="all">
    <link rel="stylesheet" id="wnivo-css" href="/css/wnivo.css" type="text/css" media="all">
    <link rel="stylesheet" id="wbanner-css" href="/css/wbanner.css" type="text/css" media="all">
    <link rel="stylesheet" id="wsslick-css" href="/css/wsslick.css" type="text/css" media="all">

    <link rel="stylesheet" id="wsswifer-css" href="/css/wsswifer.css" type="text/css" media="all">
    <link rel="stylesheet" id="allcolor-css" href="/css/all_color.css" type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-5-all-css" href="/css/all.css" type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-4-shim-css" href="/css/v4-shims.css" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-8-css" href="/css/post-8.css" type="text/css" media="all">


    <link rel="stylesheet" id="google-fonts-1-css"
          href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CTeko%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CDM+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.7.2"
          type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-shared-0-css" href="/css/fontawesome.css" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="/css/solid.css" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-flaticons-fonts-css" href="/css/flaticon2.css" type="text/css"
          media="all">
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="all">


    <script type="text/javascript" src="/js/jQuery.js" id="jquery-core-js"></script>
    <script type="text/javascript" src="/js/jquery-migrate.js" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="/js/v4-shims.js" id="font-awesome-4-shim-js"></script>
</head>
<body>


<div id="content" class="content_ {{ route_name() }} ">
    <x-message.message/>
    <x-message.message_error/>
    <!-- MAIN WRAPPER START -->
    <div class="wrapper">
        <div class="em40_header_area_main">

            <div class="techite-header-top">
                <div class="container">

                    <!-- STYLE 1 Right Side Icon = h_top_l1  -->

                    <div class="row">
                        <!-- TOP LEFT -->
                        <div class="col-xs-12 col-lg-8 col-xl-8 col-md-12 col-sm-12">
                            <div class="top-address text-left">
                                <p>
		                           <span><i class="icofont-home"></i>{{(config2('moonshine.setting.contact_address'))?:''}}</span>
                                    <a href="tel:{{(config2('moonshine.setting.phone1'))?:''}}">
                                        <i class="icofont-ui-call"></i>{{(config2('moonshine.setting.phone1'))?:''}}</a>

                                </p>
                            </div>
                        </div>
                        <!-- TOP RIGHT -->
                        <div class="col-xs-12 col-lg-4 col-xl-4 col-md-12 col-sm-12 ">
                            <div class="top-right-menu">
                                <ul class="social-icons text-right text_m_center">
                                    <div class="top-address">
                                        <p>


                                        </p>
                                    </div>
                                    <li><a class="facebook social-icon" href="#" title="Facebook"><i
                                                class="icofont-facebook"></i></a></li>
                                    <li><a class="x twitter social-icon" href="#" title="X Twitter"><i
                                                class="icofont-x twitter"></i></a></li>
                                    <li><a class="tiktok social-icon" href="#" title="Tiktok"><i
                                                class="icofont-tiktok"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- STYLE 2 Welcome Style 1 = h_top_l2  -->


                </div>
            </div>
            <!-- END HEADER TOP AREA -->


            <!-- HEADER TOP 2 creative AREA -->

            <div class="tx_top2_relative">
                <div class="">

                    <div class="mobile_logo_area hidden-md hidden-lg">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="mobile_menu_logo text-center">
                                        <a href="/">
                                            <img src="{{ Storage::url('images/logo/Elia-logo2.svg') }}" width="113" alt="{{(config2('moonshine.setting.slogan2'))?:''}}" />

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- HEADER MAIN MENU AREA -->


                    <div class="tx_relative_m">
                        <div class="">
                            <div class="mainmenu_width_tx  ">
                                <!-- Header Default Menu = 1 redux  -->


                                <!-- Header Default Menu = 1 metabox -->
                                <div class="techite-main-menu one_page hidden-xs hidden-sm witr_search_wh  witr_h_h20"
                                     style="z-index: 1000;">
                                    <div class="techite_nav_area scroll_fixed">
                                        <div class="container">

                                            <div class="row logo-left">
                                                <!-- LOGO -->
                                                <div class="col-md-3 col-sm-3 col-xs-4">


                                                    <div class="logo">
                                                        <a class="main_sticky_main_l" href="/" >
                                                            <img src="{{ Storage::url('images/logo/Elia-logo2.svg') }}" width="113" />
                                                        </a>
                                                        <a class="main_sticky_l" href="/" >
                                                            <img src="{{ Storage::url('images/logo/Elia-logo.svg') }}" width="113" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- END LOGO -->

                                                <!-- MAIN MENU -->
                                                @include('include.templates.menu.main_menu')
                                                <!-- END MAIN MENU -->
                                            </div> <!-- END ROW -->

                                        </div> <!-- END CONTAINER -->
                                    </div>  <!-- END AREA -->
                                </div>
                                <div></div>

                                <!-- 21 No Logo,Right Search,Popup Menu,Button  = 21 metabox -->


                            </div> <!-- absulate div -->
                        </div> <!-- relative div -->


                    </div> <!-- top 2 absulate div -->
                </div> <!--  top 2 relative div  extra -->


            </div> <!--  div extra -->

            <!-- MOBILE MENU AREA 222222222-->
            @include('include.templates.menu.mobile_main_menu')
            <!-- END MOBILE MENU AREA 22222222222 -->

        </div>


        @yield('content')


        <!-- middle and bottom AREA -->
        <div class="witrfm_area">


            <!-- FOOTER MIDDLE AREA -->
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6  col-lg-4">
                            <div id="about_us-widget-2" class="widget about_us"><h2 class="widget-title">Контакты</h2>
                                <!-- About Widget -->
                                <div class="about-footer">
                                    <div class="footer-widget address">
                                        <div class="footer-logo">

                                            <p>{{(config2('moonshine.setting.slogan2'))?:''}} - многоотраслевое, динамически развивающееся предприятие, имеющее партнерские отношения с многими крупными компаниями России и СНГ.</p>
                                        </div>
                                        <div class="footer-address">
                                            <div class="footer_s_inner">
                                                <div class="footer-sociala-icon">
                                                    <i class="icofont-google-map"></i>
                                                </div>
                                                <div class="footer-sociala-info">
                                                    <p>{{(config2('moonshine.setting.contact_miniaddress'))?:''}}</p>
                                                </div>
                                            </div>
                                            <div class="footer_s_inner">
                                                <div class="footer-sociala-icon">
                                                    <i class="icofont-phone"></i>
                                                </div>
                                                <div class="footer-sociala-info">
                                                    <p>Телефон: {{(config2('moonshine.setting.phone1'))?:''}}</p>
                                                </div>
                                            </div>

                                            <div class="footer_s_inner">
                                                <div class="footer-sociala-icon">
                                                    <i class="icofont-envelope-open"></i>
                                                </div>
                                                <div class="footer-sociala-info">
                                                    <p>Email: {{(config2('moonshine.setting.email'))?:''}}</p>
                                                </div>
                                            </div>

                                            <div class="footer_s_inner">
                                                <div class="footer-sociala-icon">
                                                    <i class="icofont-ui-clock"></i>
                                                </div>
                                                <div class="footer-sociala-info">
                                                    <p>Время: 9:00-18:00pm</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6  col-lg-2">
                            <div id="nav_menu-2" class="widget widget_nav_menu"><h2 class="widget-title">Продукция</h2>
                                <div class="menu-useful-links-container">

                                        @if(isset($prosthetics))
                                        <ul id="menu-useful-links" class="menu">

                                        @foreach($prosthetics as $prosthesis)
                                                <li id="menu-item-6636"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom">
                                                    <a href="{{ route('prosthesis', ['slug' => $prosthesis->slug]) }}">{{ $prosthesis->title }}</a></li>
                                            @endforeach
                                        </ul>
                                        @endif



                                 {{--   <div class="pad_b15">Протезирование: </div>--}}

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6  col-lg-2">
                            <div id="nav_menu-3" class="widget widget_nav_menu"><h2 class="widget-title">Структура</h2>
                                <div class="menu-service-request-container">
                            @include('include.templates.menu.footer_menu')
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6  col-lg-4">
                            <div id="media_gallery-2" class="widget widget_media_gallery">
                                <h2 class="widget-title">Предприятие
                                    </h2>
                                <div id="gallery-1"
                                     class="gallery galleryid-8 gallery-columns-3 gallery-size-thumbnail">
                                    @if(isset($photos))
                                        @foreach($photos as $photo)
                                            <figure class="gallery-item">
                                                <div class="gallery-icon landscape">
                                                    <a href="#"><img
                                                            width="150" height="150"
                                                            src="{{ asset(intervention('150x150', $photo['img'], 'company')) }}"
                                                        ></a>
                                                </div>
                                            </figure>
                                        @endforeach
                                    @endif






                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <!-- END FOOTER MIDDLE AREA -->


            <!-- FOOTER BOTTOM AREA -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">

                        <!-- FOOTER COPYRIGHT STYLE 1 -->

                        <div class="col-lg-6 col-md-6  col-sm-12">
                            <div class="copy-right-text">
                                <!-- FOOTER COPYRIGHT TEXT -->
                                <p>
                                   {{ date("Y") }} © {{(config2('moonshine.setting.contact_copy'))?:''}}</p>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6  col-sm-12">
                            <div class="footer-menu">
                                <!-- FOOTER COPYRIGHT MENU -->
                                <ul id="menu-footer-menu" class="text-right">
                                    <li id="menu-item-7373"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7373">
                                        <a
                                            href="/company/o-predpriyatii">О компании</a></li>
                                    <li id="menu-item-7374"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7374">
                                        <a
                                            href="#">Услуги</a></li>
                                    <li id="menu-item-6451"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6451">
                                        <a
                                            href="{{ route('contacts') }}">Контакты</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- FOOTER COPYRIGHT STYLE 3 -->

                    </div>
                </div>
            </div>
            <!-- END FOOTER BOTTOM AREA -->


        </div>
        <!-- middle and bottom END -->

    </div>
</div><!--.content_-->
@include('modals.temp_forms.responce_send')
<link rel="stylesheet" id="wtitle-css"
      href="/css/wtitle.css"
      type="text/css" media="all">
<link rel="stylesheet" id="wportfoliocl-css"
      href="/css/wportfoliocl.css"
      type="text/css" media="all">
<link rel="stylesheet" id="wsimage-css"
      href="/css/wsimage.css"
      type="text/css" media="all">
<link rel="stylesheet" id="wservice-css"
      href="/css/wservice.css"
      type="text/css" media="all">
<link rel="stylesheet" id="wimagecl-css"
      href="/css/wimagecl.css"
      type="text/css" media="all">
<link rel="stylesheet" id="wteam-css"
      href="/css/wteam.css"
      type="text/css" media="all">
<link rel="stylesheet" id="wvideo-css"
      href="/css/wvideo.css"
      type="text/css" media="all">
<link rel="stylesheet" id="wtestimonialpost-css"
      href="/css/wtestimonialpost.css"
      type="text/css" media="all">
<link rel="stylesheet" id="waccod-css"
      href="/css/waccod.css"
      type="text/css" media="all">
<link rel="stylesheet" id="wblog-css"
      href="/css/wblog.css"
      type="text/css" media="all">
<link rel="stylesheet" id="style_plugin-css"
      href="/css/style_plugin.css"
      type="text/css" media="all">
<link rel="stylesheet"
      href="/css/wevent.css"
      type="text/css" media="all">


<script type="text/javascript"
        src="/js/direction.js"
        id="direction-js"></script>
<script type="text/javascript"
        src="/js/scrollup.js"
        id="scrollup-js"></script>
<script type="text/javascript"
        src="/js/wow.js"
        id="wowjs-js"></script>
<script type="text/javascript"
        src="/js/txbd-swiper-bundle.js"
        id="swiperjs-js"></script>
<script type="text/javascript"
        src="/js/main_theme.js"
        id="main-themejs-js"></script>
<script type="text/javascript"
        src="/js/hooks.js"
        id="wp-hooks-js"></script>

<script type="text/javascript"
        src="/js/index.js"
        id="swv-js"></script>


<script type="text/javascript"
        src="/js/modernizr.js"
        id="modernizr-js"></script>
<script type="text/javascript"
        src="/js/bootstrap.js"
        id="bootstrap-js"></script>
<script type="text/javascript"
        src="/js/meanmenu.js"
        id="meanmenu-js"></script>
<script type="text/javascript"
        src="/js/theme-pluginjs.js"
        id="theme-plugin-js"></script>
<script type="text/javascript" src="/js/imagesloaded.js"
        id="imagesloaded-js"></script>

<script type="text/javascript"
        src="/js/slick.js"
        id="slickjs-js"></script>
<script type="text/javascript"
        src="/js/theme.js"
        id="techite-themes-js"></script>

<script type="text/javascript"
        src="/js/ui_core.js"
        id="jquery-ui-core-js"></script>

<span id="elementor-device-mode" class="elementor-screen-only"></span>


<a id="scrollUp" href="#top" style="display: none; position: fixed; z-index: 2147483647;"><i
        class="icofont-thin-up"></i></a>
{{--@RegisterServiceWorkerScript --}}<!-- Service worker registration -->

<x-order.order-call />
</body>
</html>

