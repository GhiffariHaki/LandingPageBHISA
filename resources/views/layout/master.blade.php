<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Armada Nusantara</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('images/LogoArsa-Icon.ico')}}"/>

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <!-- Css -->
    <link href="{{asset('libs/tiny-slider/tiny-slider.css')}}" rel="stylesheet">
    <link href="{{asset('libs/tobii/css/tobii.min.css')}}" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link href="{{asset('css/bootstrap.css')}}" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('libs/@iconscout/unicons/css/line.css')}}" type="text/css" rel="stylesheet" />

    <!-- Style Css-->
    <link href="{{asset('css/style.css')}}" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css" />        
</head>

<body>
    @include('layout.navbar')

    @yield('content')

    @include('layout.footer')

    <!-- JAVASCRIPT -->
    <script src="{{asset('libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- SLIDER -->
    <script src="{{asset('libs/tiny-slider/min/tiny-slider.js')}}"></script>

    <!-- Lightbox -->
    <script src="{{asset('libs/tobii/js/tobii.min.js')}}"></script>

    <!-- Main Js -->
    <script src="{{asset('libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('js/plugins.init.js')}}"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="{{asset('js/app.js')}}"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>