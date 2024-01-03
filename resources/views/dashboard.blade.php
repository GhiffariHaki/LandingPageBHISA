@extends('layout.master')
@section('content')


<!-- Hero Start -->
<section class="bg-half-170 pb-0 bg-primary d-table w-100" style="background: url({{asset('images/bg2.png')}}) center center;">
    <!-- Start Container-->    
    <div class="container">
        <!-- Start Row-->
        <div class="row align-items-center">
            <!-- Start Col Left-->
            <div class="col-lg-7 col-md-6">
                <div class="title-heading mb-md-5 pb-md-5">
                    <h1 class="heading text-white mb-3 title-dark" style="font-family:Lato; font-weight:2000; font: size 120px;;"> We Took Good <br> Care of Your <br> Management </h4>
                    <p class="para-desc text-white-50">Armada will help with all your Management Requirement.</p>
                </div>
            </div>
            <!-- End Col Left-->

            <!-- Start Col Right-->
            <div class="col-lg-5 col-md-6">
                <img src="{{asset('images/hero1.png')}}" class="img-fluid" alt="">
            </div>
            <!-- End Col Right-->
        </div>
        <!-- End Row-->
    </div> 
    <!-- End Container-->
</section>
<!-- End Section-->
<!-- Hero End -->



<!-- Example Start -->
<section class="section">
    <div class="container pb-5 mb-md-5 mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="saas-feature-shape-right position-relative">
                    <img src="{{asset('images/API.png')}}" class="img-fluid mx-auto d-block rounded shadow" alt="">
                </div>
            </div><!--end col-->

            <div class="col-lg-5 mt-4 pt-2 mt-lg-0 pt-lg-0">
                <div class="section-title ms-lg-4">
                    <h1 class="title mb-3">Armada will help with all your Management Requirement</h1>
                    <p class="para-desc text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</section>
<!-- Example End -->



<!-- API Start -->
<section class="section">
    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-5 order-2 order-lg-1 mt-4 pt-2 mt-lg-0 pt-lg-0">
                <div class="section-title me-lg-4">
                    <h1 class="title mb-3">Why Choose us ?</h1>
                    <p class="para-desc text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p>
                        
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center pt-4">
                                <h2><i data-feather="shield" class="fea icon-m-md text-primary"></i></h2>
                                <div class="ms-3">
                                    <h5>Easy to Integrate with API</h5>
                                    <p class="text-muted mb-0">Moreover, in Latin only words at the beginning of sentences are capitalized.</p>
                                </div>
                            </div>
                        </div><!--end col-->
    
                        <div class="col-12">
                            <div class="d-flex align-items-center pt-4">
                                <h2><i data-feather="cpu" class="fea icon-m-md text-primary"></i></h2>
                                <div class="ms-3">
                                    <h5>Best Performance</h5>
                                    <p class="text-muted mb-0">If the fill text is intended to illustrate the characteristics of sometimes.</p>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-7 order-1 order-lg-2">
                <div class="saas-feature-shape-left position-relative">
                            <img src="{{asset('images/API.png')}}" class="img-fluid mx-auto d-block rounded" alt="">
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- API End -->



<!-- Product Section -->
<section class="section">
    <div class="container">
        <!-- Start Row -->
        <div class="row justify-content-center">
            <!-- Start Col -->
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h1 class="title mb-4" style="font-family:Lato; font-weight:2000; font-size:3rem;">What we do?</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Learn what Armada products can do for you.</p>
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row-->

        <!-- Start Row -->
        <div class="row">
            <!-- Start Col Widget 1 -->
            <div class="col-lg-3 col-md-4 mt-4 pt-2">
                <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                    <span class="h1 icon-color">
                        <i class="uil uil-calendar-alt"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>Planning & Scheduling</h5>
                        <p class="para text-muted mb-0">It is a long established fact that a reader.</p>
                    </div>
                    <span class="big-icon text-center">
                        <i class="uil uil-calendar-alt"></i>
                    </span>
                </div>
            </div>
            <!-- End Col Widget 1-->
                    
            <!-- Start Col Widget 2 -->
            <div class="col-lg-3 col-md-4 mt-4 pt-2">
                <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                    <span class="h1 icon-color">
                        <i class="uil uil-suitcase"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>Asset Management</h5>
                        <p class="para text-muted mb-0">It is a long established fact that a reader.</p>
                    </div>
                    <span class="big-icon text-center">
                        <i class="uil uil-suitcase"></i>
                    </span>
                </div>
            </div>
            <!-- End Col Widget 2-->
                    
            <!-- Start Col Widget 3 -->
            <div class="col-lg-3 col-md-4 mt-4 pt-2">
                <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                    <span class="h1 icon-color">
                        <i class="uil uil-receipt-alt"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>Work Order</h5>
                        <p class="para text-muted mb-0">It is a long established fact that a reader.</p>
                    </div>
                    <span class="big-icon text-center">
                        <i class="uil uil-receipt-alt"></i>
                    </span>
                </div>
            </div>
            <!-- End Col Widget 3-->
                    
            <!-- Start Col Widget 4 -->
            <div class="col-lg-3 col-md-4 mt-4 pt-2">
                <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                    <span class="h1 icon-color">
                        <i class="uil uil-box"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>Inventory Management</h5>
                        <p class="para text-muted mb-0">It is a long established fact that a reader.</p>
                    </div>
                    <span class="big-icon text-center">
                        <i class="uil uil-box"></i>
                    </span>
                </div>
            </div>
            <!-- End Col Widget 4-->
                    
            <!-- Start Col Widget 5 -->
            <div class="col-lg-3 col-md-4 mt-4 pt-2">
                <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                    <span class="h1 icon-color">
                        <i class="uil uil-chart-line"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>Analysis & Reporting</h5>
                        <p class="para text-muted mb-0">It is a long established fact that a reader.</p>
                    </div>
                    <span class="big-icon text-center">
                        <i class="uil uil-chart-line"></i>
                    </span>
                </div>
            </div>
            <!-- End Col Widget 5-->
                    
            <!-- Start Col Widget 6 -->
            <div class="col-lg-3 col-md-4 mt-4 pt-2">
                <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                    <span class="h1 icon-color">
                        <i class="uil uil-file-contract"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>Agreement</h5>
                        <p class="para text-muted mb-0">It is a long established fact that a reader.</p>
                    </div>
                    <span class="big-icon text-center">
                        <i class="uil uil-file-contract"></i>
                    </span>
                </div>
            </div>
            <!-- End Col Widget 6-->
                    
            <!-- Start Col Widget 7 -->
            <div class="col-lg-3 col-md-4 mt-4 pt-2">
                <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                    <span class="h1 icon-color">
                        <i class="uil uil-wrench"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>Sparepart Marketplace</h5>
                        <p class="para text-muted mb-0">It is a long established fact that a reader.</p>
                    </div>
                    <span class="big-icon text-center">
                        <i class="uil uil-wrench"></i>
                    </span>
                </div>
            </div>
            <!-- End Col Widget 7-->
                    
            <!-- Start Col Widget 8-->
            <div class="col-lg-3 col-md-4 mt-4 pt-2">
                <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                    <span class="h1 icon-color">
                        <i class="uil uil-usd-circle"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>Commercial Hub</h5>
                        <p class="para text-muted mb-0">It is a long established fact that a reader.</p>
                    </div>
                    <span class="big-icon text-center">
                        <i class="uil uil-usd-circle"></i>
                    </span>
                </div>
            </div>
            <!-- End Col Widget 8-->
        </div><!--end row-->
    </div><!--end container-->
</section>
<!-- End Section-->
<!-- Product End -->

<!-- Key Features Start -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Key Features</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Learn what Armada products can do for you.</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle me-3">
                        <i data-feather="sliders" class="fea icon-ex-md"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title mb-0">Planning</h4>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle me-3">
                        <i data-feather="calendar" class="fea icon-ex-md"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title mb-0">Scheduling</h4>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle me-3">
                        <i data-feather="briefcase" class="fea icon-ex-md"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title mb-0">Asset Management</h4>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle me-3">
                        <i data-feather="list" class="fea icon-ex-md"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title mb-0">Work Order Management</h4>
                    </div>
                </div>
            </div>
            <!--end col-->
                    
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle me-3">
                        <i data-feather="package" class="fea icon-ex-md"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title mb-0">Inventory Management</h4>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle me-3">
                        <i data-feather="pie-chart" class="fea icon-ex-md"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title mb-0">Analysis</h4>
                    </div>
                </div>
            </div>
            <!--end col-->
                    
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle me-3">
                        <i data-feather="thumbs-up" class="fea icon-ex-md"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title mb-0">Reporting</h4>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle me-3">
                        <i data-feather="clipboard" class="fea icon-ex-md"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title mb-0">Agreement</h4>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle me-3">
                        <i data-feather="dollar-sign" class="fea icon-ex-md"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title mb-0">Point of Sales</h4>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
<!-- Key Features End -->


<!-- Review Start -->
<section class="section">
    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Whats Our Clients Said About <span class="text-primary">Landrick</span> Project</h4>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row justify-content-center">
            <div class="col-lg-12 mt-4">
                <div class="tiny-three-item">
                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-1">
                            <img src="{{asset('images/empty.png')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="card flex-1 content p-3 shadow rounded position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                                <h6 class="text-primary">- Thomas Israel <small class="text-muted">C.E.O</small></h6>
                            </div>
                        </div>
                    </div>
                            
                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-1">
                            <img src="{{asset('images/empty.png')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="card flex-1 content p-3 shadow rounded position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                                <h6 class="text-primary">- Barbara McIntosh <small class="text-muted">M.D</small></h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-1">
                            <img src="{{asset('images/empty.png')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="card flex-1 content p-3 shadow rounded position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                <h6 class="text-primary">- Carl Oliver <small class="text-muted">P.A</small></h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-1">
                            <img src="{{asset('images/empty.png')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="card flex-1 content p-3 shadow rounded position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                                <h6 class="text-primary">- Christa Smith <small class="text-muted">Manager</small></h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-1">
                            <img src="{{asset('images/empty.png')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="card flex-1 content p-3 shadow rounded position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                                <h6 class="text-primary">- Dean Tolle <small class="text-muted">Developer</small></h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-1">
                            <img src="{{asset('images/empty.png')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="card flex-1 content p-3 shadow rounded position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                                <h6 class="text-primary">- Jill Webb <small class="text-muted">Designer</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
<!-- Price End -->

@endsection