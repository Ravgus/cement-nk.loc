<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="{{ App::getLocale() }}" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->

<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')

    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('img/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicon/apple-touch-icon-114x114.png') }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('libs/bootstrap-4.0.0/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/animate/animate.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="{{ asset('libs/jQueryFormStyler/dist/jquery.formstyler.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/jQueryFormStyler/dist/jquery.formstyler.theme.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">

    <script async defer src="{{ asset('libs/modernizr/modernizr.js') }}"></script>
</head>

<body>
<nav class="navigation" id="navigation">
    <div class="logo">
        <img id="logo" src="{{ asset('img/svg/logo.svg') }}" alt="logo" width="auto" height="50px">
    </div>
    <div class="menu_ham">
        <!-- Иконка меню -->
        <div class="icon-close">
            <img src="{{ asset('img/svg/close.svg') }}" width="30px" height="auto">
        </div>
        <!-- Меню -->
        @yield('navigation')
    </div>
    <!-- Main body -->
    <div class="background">

        <div class="icon-menu">
            <img id="menu_img" src="{{ asset('img/svg/menu.svg') }}" width="30px" height="auto">
            <span>Меню</span>
        </div>
    </div>
    <div class="menu_standard">
        @yield('navigation')
    </div>
</nav>
<div class="header">
    <div class="container utp">
        <div class="row">
            @yield('background')
        </div>
    </div>
</div>
<div class="container">
    <div id="1" class="row">
        @yield('abouts_as')
    </div>
    <div id="2" class="row services">
        @yield('delivery')
    </div>
</div>
<div class="back_img">
    <div class="triangle"></div>
    <div class="romb_1"></div>
    <div class="romb_2"></div>
</div>
<div class="container">
    @yield('production')
</div>
<div class="back_img_right">
    <div class="triangle_right"></div>
</div>
<div class="container">
    <div id="4" class="row varanty">
        @yield('guarantees')
    </div>
    <div id="5" class="row">
        @yield('contacts')
        <div class="col-lg-10 col-md-12">
            <div class="map">
                <div class="col" id="map" style="height: 300px; width: 100%;"></div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    @yield('footer')
</footer>

<div class="hidden"></div>

<div class="loader">
    <div class="loader_inner"></div>
</div>

<!--[if lt IE 9]>
<script src="{{ asset('libs/html5shiv/es5-shim.min.js') }}"></script>
<script src="{{ asset('libs/html5shiv/html5shiv.min.js') }}"></script>
<script src="{{ asset('libs/html5shiv/html5shiv-printshiv.min.js') }}"></script>
<script src="{{ asset('libs/respond/respond.min.js') }}"></script>
<![endif]-->

<script src="{{ asset('libs/jquery/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('libs/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('libs/animate/animate-css.js') }}"></script>
<script src="{{ asset('libs/plugins-scroll/plugins-scroll.js') }}"></script>
<script src="{{ asset('libs/jQueryFormStyler/dist/jquery.formstyler.min.js') }}"></script>

<script src="{{ asset('js/common.js') }}"></script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7D4qOD65gmGDghBMSrwdpQ2ObgjMgx8w&callback=initMap">
</script>
<script>
    function initMap() {
        var uluru = {lat: 46.176950, lng: 34.765632};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121100981-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-121100981-1');
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter49306108 = new Ya.Metrika2({
                    id:49306108,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        /*s.src = "https://mc.yandex.ru/metrika/tag.js";*/
        s.src = "https://d31j93rd8oukbv.cloudfront.net/metrika/watch_ua.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/49306108" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>