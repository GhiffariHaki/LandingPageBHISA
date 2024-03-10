<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('layout.head')

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    
    <!-- Loader -->
    @include('layout.navbar')

    @yield('content')

    @include('layout.footer')

    
    <!-- Back to top -->
    <a href="https://whatsapp.com" class=" btn btn-pills btn-success wa-btn">
        <h6 style="font-family:Century Gothic;">Hubungi Kami</h6>
    </a>
    <!-- Back to top -->

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