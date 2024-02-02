@extends('layout.master')
@section('content')

<!-- Hero Start -->
<section class="d-flex align-items-center bg-products">
    <div class="container mt-5 mb-5" style="z-index: 1;">
        <div class="row mt-100 mb-100">
            <div class="col">
                <div class="title-heading mt-4 text-white">
                    <h1 class="display-4 fw-bold mb-3">Workshop Management</h1>
                    <p class="">Unlock Potential, Drive Success: Pave the Way with Digital Fleet Workshop Solutions.</p>
                    <a href="/requestdemo" class="btn btn-pills btn-arsa" style="background=#fca311">Get Started</a>
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
                <div class="section-title pb-2">
                    <h4 class="title">Optimize Your Fleet, to Maximize Your Move with <span style="color:#fca311;">Armada Nusantara</span></h4>
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
                        <i class="uil uil-receipt-alt h2 text-dark"></i>
                    </div>

                    <div class="content mt-4">
                        <h5 class="text-arsa">Work Order Management</h5>
                        <p class="text-muted mb-0">Transforming Tasks, Empowering Efficiency: Embrace Digitalization for Seamless Work Order Management!.</p>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-md-4 col-12 mt-5 mt-sm-0">
                <div class="features feature-dark text-center">
                    <div class="image position-relative d-inline-block">
                        <i class="uil uil-calendar-alt h2 text-dark"></i>
                    </div>

                    <div class="content mt-4">
                        <h5 class="text-arsa">Planning and Scheduling</h5>
                        <p class="text-muted mb-0">Digitalize Your Timeline: From Planning to Scheduling, Powering Progress in Every Click!</p>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-md-4 col-12 mt-5 mt-sm-0">
                <div class="features feature-dark text-center">
                    <div class="image position-relative d-inline-block">
                        <i class="uil uil-graph-bar h2 text-dark"></i>
                    </div>

                    <div class="content mt-4">
                        <h5 class="text-arsa">Analysis</h5>
                        <p class="text-muted mb-0">Unlock Insights, Boost Productivity: Elevate Workshop Management through Digital Analytics!</p>
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
                    <img src="{{asset('images/VectorWorkOrder.png')}}" class="img-fluid mx-auto d-block rounded img-hor" alt="">
                </div>
            </div><!--end col-->

            <div class="col-lg-5 pt-2 pt-lg-0">
                <div class="section-title ms-lg-4">
                    <h1 class="title mb-3">Digitize Work Orders, Optimize Fleet Performance</h1>
                    <p class="para-desc text-muted">The transformation to digital work order management not only saves time and resources but also ensures a well-coordinated and proactive approach to maintenance, ultimately leading to the optimization of our fleet's performance.</p>
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
                    <h1 class="title mb-3">Transform Repairs, Boost Efficiency</h1>
                    <p class="para-desc text-muted">The digital transformation of fleet planning enables proactive maintenance, preventing unexpected breakdowns and minimizing the impact on daily operations.</p>
                </div>
            </div><!--end col-->

            <div class="col-lg-7 order-1 order-lg-2">
                <div class="saas-feature-shape-left position-relative">
                    <img src="{{asset('images/VectorRepair.png')}}" class="img-fluid mx-auto d-block rounded" alt="">
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- Content 2 End -->