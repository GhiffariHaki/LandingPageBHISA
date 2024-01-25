@extends('layout.master')
@section('content')

<!-- Hero Start -->
<section class="d-flex align-items-center bg-products">
    <div class="container mt-5 mb-5" style="z-index: 1;">
        <div class="row mt-100 mb-100">
            <div class="col">
                <div class="title-heading mt-4 text-white">
                    <h1 class="display-4 fw-bold mb-3">Workshop Management</h1>
                    <p class="">Organize your inventory efficiently with Armada Nusantara</p>
                    <a href="/requestdemo" class="btn btn-pills btn-arsa" style="background=#fca311">Request Demo</a>
                </div>                                
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container--> 
</section><!--end section-->
<!-- Hero End -->

<!-- Feature Start -->
<section class="section">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">What We Do ?</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>
</section>

<section class="section overflow-hidden">
    <div class="container pb-5 mb-md-5 mt-5">
        <div class="row">
            <div class="col-md-4 col-12">
                <div class="features feature-dark text-center">
                    <div class="image position-relative d-inline-block">
                        <i class="uil uil-airplay h2 text-dark"></i>
                    </div>

                    <div class="content mt-4">
                        <h5>Easy To Use</h5>
                        <p class="text-muted mb-0">Nisi aenean vulputate eleifend tellus vitae eleifend enim a Aliquam eleifend aenean elementum semper.</p>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-md-4 col-12 mt-5 mt-sm-0">
                <div class="features feature-dark text-center">
                    <div class="image position-relative d-inline-block">
                        <i class="uil uil-calendar-alt h2 text-dark"></i>
                    </div>

                    <div class="content mt-4">
                        <h5>Daily Reports</h5>
                        <p class="text-muted mb-0">Allegedly, a Latin scholar established the origin of the established text by compiling unusual word.</p>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-md-4 col-12 mt-5 mt-sm-0">
                <div class="features feature-dark text-center">
                    <div class="image position-relative d-inline-block">
                        <i class="uil uil-clock h2 text-dark"></i>
                    </div>

                    <div class="content mt-4">
                        <h5>Real Time Zone</h5>
                        <p class="text-muted mb-0">It seems that only fragments of the original text remain in only fragments the Lorem Ipsum texts used today.</p>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
<!-- 3 Section End -->

<!-- Content 1 Start -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="saas-feature-shape-right position-relative">
                    <img src="{{asset('images/home/Intro.png')}}" class="img-fluid mx-auto d-block rounded" alt="">
                </div>
            </div><!--end col-->

            <div class="col-lg-5 mt-4 pt-2 mt-lg-0 pt-lg-0">
                <div class="section-title ms-lg-4">
                    <h1 class="title mb-3">We take good care of your vehicle.</h1>
                    <p class="para-desc text-muted">Embark on a journey of efficiency and profitability with Armada Nusantara – Where Your Fleet's Success Begins!</p>
                    <div>
                                <a href="/requestdemo" class="btn btn-arsa">Request Demo</a>
                                <a href="javascript:void(0)" class="btn btn-outline-dark">Free Trial</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</section>
<!-- Content 1 End -->



<!-- Content 2 Start -->
<section class="section">
    <div class="container mb-100">
        <div class="row align-items-center">
            <div class="col-lg-5 order-2 order-lg-1 mt-4 pt-2 mt-lg-0 pt-lg-0">
                <div class="section-title me-lg-4">
                    <h1 class="title mb-3">Warehouse</h1>

                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center pt-4">
                                <h2><i data-feather="user-check" class="fea icon-m-md text-dark"></i></h2>
                                <div class="ms-3">
                                    <h5>User Friendly</h5>
                                    <p class="text-muted mb-0">Armada Nusantara the perfect choice for users of all levels</p>
                                </div>
                            </div>
                        </div><!--end col-->
    
                        <div class="col-12">
                            <div class="d-flex align-items-center pt-4">
                                <h2><i data-feather="cpu" class="fea icon-m-md text-dark"></i></h2>
                                <div class="ms-3">
                                    <h5>Easy to Integrate</h5>
                                    <p class="text-muted mb-0">Armada Nusantara offers effortless integration with your API.</p>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-7 order-1 order-lg-2">
                <div class="saas-feature-shape-left position-relative">
                    <img src="{{asset('images/home/API_Black.png')}}" class="img-fluid mx-auto d-block rounded" alt="">
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- Content 2 End -->