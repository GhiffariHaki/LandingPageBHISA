@extends('layout.master')
@section('content')

<!-- Hero Start -->
<section class="d-flex align-items-center bg-products">
    <div class="container mt-5 mb-5" style="z-index: 1;">
        <div class="row mt-100 mb-100">
            <div class="col">
                <div class="title-heading mt-4 text-white">
                    <h1 class="display-4 fw-bold mb-3">Maintenance Management</h1>
                    <p class="">Pave the Way to Success with Digital Maintenance Mastery.</p>
                    <a href="/requestdemo" class="btn btn-pills btn-arsa" style="background=#fca311">Request Demo</a>
                </div>                                
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container--> 
</section><!--end section-->
<!-- Hero End -->

<!-- Intro Start -->
<section class="section">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title pb-2">
                    <h4 class="title">Optimize Your Fleet to Maximize Your Move with <span style="color:#fca311;">Armada Nusantara</span></h4>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>
</section>
<!-- Intro End -->

<section class="section overflow-hidden">
    <div class="container pb-5 mb-md-5 mt-5">
        <div class="row">
            <div class="col-md-4 col-12">
                <div class="features feature-dark text-center">
                    <div class="image position-relative d-inline-block">
                        <i class="uil uil-clipboard-alt h2 text-dark"></i>
                    </div>

                    <div class="content mt-4">
                        <h5 class="text-arsa">Repair Reporting</h5>
                        <p class="text-muted mb-0">Repair Reporting allows you to access comprehensive fleet maintenance reports anytime, anywhere, ensuring you stay informed and make data-driven decisions on the go.</p>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-md-4 col-12 mt-5 mt-sm-0">
                <div class="features feature-dark text-center">
                    <div class="image position-relative d-inline-block">
                        <i class="uil uil-shield-check h2 text-dark"></i>
                    </div>

                    <div class="content mt-4">
                        <h5 class="text-arsa">Fleet Ready</h5>
                        <p class="text-muted mb-0">Experience peace of mind as our comprehensive maintenance system works tirelessly in the background, leaving you with a fleet that is consistently ready to hit the road.</p>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-md-4 col-12 mt-5 mt-sm-0">
                <div class="features feature-dark text-center">
                    <div class="image position-relative d-inline-block">
                        <i class="uil uil-chart-bar h2 text-dark"></i>
                    </div>

                    <div class="content mt-4">
                        <h5 class="text-arsa">Repair Analysis</h5>
                        <p class="text-muted mb-0">Attain an in-depth perspective on your fleet's condition through Repair Analysis, enabling proactive maintenance approaches and reducing operational downtime.</p>
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
                    <img src="{{asset('images/VectorReady.png')}}" class="img-fluid mx-auto d-block rounded img-hor" alt="">
                </div>
            </div><!--end col-->

            <div class="col-lg-5 pt-2 pt-lg-0">
                <div class="section-title ms-lg-4">
                    <h1 class="title mb-3">Your Fleet Always Ready</h1>
                    <p class="para-desc text-muted">Regularly review and update your emergency preparedness protocols, ensuring your fleet is equipped to handle unexpected situations and can swiftly resume operations when needed.</p>
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
                    <h1 class="title mb-3">Access Maintenance Reports Anywhere, Anytime.</h1>
                    <p class="para-desc text-muted">Experience the convenience of accessing maintenance reports from any location, at any time, fostering better decision-making and enhanced operational control.</p>
                </div>
            </div><!--end col-->

            <div class="col-lg-7 order-1 order-lg-2">
                <div class="saas-feature-shape-left position-relative">
                    <img src="{{asset('images/VectorReporting.png')}}" class="img-fluid mx-auto d-block rounded" alt="">
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- Content 2 End -->