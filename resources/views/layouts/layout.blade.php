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

    @yield('content')
</div><!--.content_-->

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
        class="icofont-thin-up"></i></a></body>
</body>
</html>

