<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ex-coders">
    <meta name="description" content="Extech - IT Solution & Technology HTML Template">
    <!-- ======== Page title ============ -->
    <title>Unisoft - IT Solution & Technology</title>
    <!--<< Favicon >>-->
    <link rel="shortcut icon" href="{{ asset('vendor/assets/img/favicon.svg') }}">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/bootstrap.min.css') }}">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/all.min.css') }}">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/animate.css') }}">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/magnific-popup.css') }}">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/meanmenu.css') }}">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/swiper-bundle.min.css') }}">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/nice-select.css') }}">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/main.css') }}">
    @vite('resources/css/app.css')
</head>

<body>
<!-- Preloader Start -->
<div id="preloader" class="preloader">
    <div class="animation-preloader">
        <div class="spinner">
        </div>
        <div class="txt-loading">
            <span data-text-preloader="U" class="letters-loading">
               U
            </span>
            <span data-text-preloader="N" class="letters-loading">
               N
            </span>
            <span data-text-preloader="I" class="letters-loading">
               I
            </span>
            <span data-text-preloader="S" class="letters-loading">
               S
            </span>
            <span data-text-preloader="O" class="letters-loading">
               O
            </span>
            <span data-text-preloader="F" class="letters-loading">
               F
            </span>
            <span data-text-preloader="T" class="letters-loading">
               T
            </span>
        </div>
    </div>
    <div class="loader">
        <div class="row">
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
        </div>
    </div>
</div>
<!--<< Mouse Cursor Start >>-->
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>

<div id="app"></div>
@vite('resources/js/app.js')

<!--<< All JS Plugins >>-->
<script src="{{ asset('vendor/assets/js/jquery-3.7.1.min.js') }}"></script>
<!--<< Viewport Js >>-->
<script src="{{ asset('vendor/assets/js/viewport.jquery.js') }}"></script>
<!--<< Bootstrap Js >>-->
<script src="{{ asset('vendor/assets/js/bootstrap.bundle.min.js') }}"></script>
<!--<< Nice Select Js >>-->
<script src="{{ asset('vendor/assets/js/jquery.nice-select.min.js') }}"></script>
<!--<< Waypoints Js >>-->
<script src="{{ asset('vendor/assets/js/jquery.waypoints.js') }}"></script>
<!--<< Counterup Js >>-->
<script src="{{ asset('vendor/assets/js/jquery.counterup.min.js') }}"></script>
<!--<< Swiper Slider Js >>-->
<script src="{{ asset('vendor/assets/js/swiper-bundle.min.js') }}"></script>
<!--<< MeanMenu Js >>-->
<script src="{{ asset('vendor/assets/js/jquery.meanmenu.min.js') }}"></script>
<!--<< Magnific Popup Js >>-->
<script src="{{ asset('vendor/assets/js/jquery.magnific-popup.min.js') }}"></script>
<!--<< Wow Animation Js >>-->
<script src="{{ asset('vendor/assets/js/wow.min.js') }}"></script>
<!--<< Main.js >>-->
{{--<script src="{{ asset('vendor/assets/js/main.js') }}"></script>--}}

</body>


</html>
