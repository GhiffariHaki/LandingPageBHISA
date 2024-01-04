@extends('layout.master')
@section('content')


<!-- Start Home -->
<section class="bg-home d-flex align-items-center bg-animation-left bg-hero" style="height: auto;" id="home">
    <div class="container position-relative" style="z-index: 1;">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center mt-0 mt-md-5 pt-0 pt-md-5">
                <div class="title-heading margin-top-100">
                    <h1 class="heading text-white title-dark mb-3">A Better Way to Manage your Schedule</h1>
                    <p class="para-desc mx-auto text-white-50">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <div class="home-dashboard">
                            <img src="{{asset('images/home/laptop.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Home -->

<!-- Intro Start -->
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
                    <div>
                                <a href="javascript:void(0)" class="btn btn-dark">Request Demo</a>
                                <a href="javascript:void(0)" class="btn btn-outline-dark">Free Trial</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</section>
<!-- Intro End -->



<!-- Why Us Start -->
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
                                    <h5>User Friendly</h5>
                                    <p class="text-muted mb-0">Moreover, in Latin only words at the beginning of sentences are capitalized.</p>
                                </div>
                            </div>
                        </div><!--end col-->
    
                        <div class="col-12">
                            <div class="d-flex align-items-center pt-4">
                                <h2><i data-feather="cpu" class="fea icon-m-md text-primary"></i></h2>
                                <div class="ms-3">
                                    <h5>Easy to Integrate with API</h5>
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
<!-- Why Us End -->

<!-- Example Start -->
<section class="section">
    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-4">Discover what makes <span class="text-primary">Task manager</span> great.</h4>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row align-items-center">
            <div class="col-md-5 mt-4 pt-2">
                <ul class="nav nav-pills nav-justified flex-column mb-0" id="pills-tab" role="tablist">
                    <li class="nav-item bg-light rounded-md">
                        <a class="nav-link rounded-md active" id="dashboard" data-bs-toggle="pill" href="#dash-board" role="tab" aria-controls="dash-board" aria-selected="false">
                            <div class="p-3 text-start">
                                <h5 class="title">Fleet Management</h5>
                                <p class="text-muted tab-para mb-0">Dummy text is text that is used in the publishing industry or by web designers.</p>
                            </div>
                        </a><!--end nav link-->
                    </li><!--end nav item-->
                            
                    <li class="nav-item bg-light rounded-md mt-4">
                        <a class="nav-link rounded-md" id="timeline" data-bs-toggle="pill" href="#time-line" role="tab" aria-controls="time-line" aria-selected="false">
                            <div class="p-3 text-start">
                                <h5 class="title">Workshop Management</h5>
                                <p class="text-muted tab-para mb-0">Dummy text is text that is used in the publishing industry or by web designers.</p>
                            </div>
                        </a><!--end nav link-->
                    </li><!--end nav item-->
                            
                    <li class="nav-item bg-light rounded-md mt-4">
                        <a class="nav-link rounded-md" id="paymentmanagement" data-bs-toggle="pill" href="#payment-management" role="tab" aria-controls="payment-management" aria-selected="false">
                            <div class="p-3 text-start">
                                <h5 class="title">Payment Management</h5>
                                <p class="text-muted tab-para mb-0">Dummy text is text that is used in the publishing industry or by web designers.</p>
                            </div>
                        </a><!--end nav link-->
                    </li><!--end nav item-->
                            
                    <li class="nav-item bg-light rounded-md mt-4">
                        <a class="nav-link rounded-md" id="fileintegrate" data-bs-toggle="pill" href="#file-integrate" role="tab" aria-controls="file-integrate" aria-selected="false">
                            <div class="p-3 text-start">
                                <h5 class="title">File Integrate</h5>
                                <p class="text-muted tab-para mb-0">Dummy text is text that is used in the publishing industry or by web designers.</p>
                            </div>
                        </a><!--end nav link-->
                    </li><!--end nav item-->
                </ul><!--end nav pills-->
            </div><!--end col-->

            <div class="col-md-7 col-12 mt-4 pt-2">
                <div class="tab-content ms-lg-4" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="dash-board" role="tabpanel" aria-labelledby="dashboard">
                        <img src="{{asset('images/home/FleetManagement.png')}}" class="img-fluid mx-auto rounded-md shadow-lg d-block" alt="">
                    </div><!--end teb pane-->
                            
                    <div class="tab-pane fade" id="time-line" role="tabpanel" aria-labelledby="timeline">
                        <img src="{{asset('images/home/WorkshopManagement.png')}}" class="img-fluid mx-auto rounded-md shadow-lg d-block" alt="">
                    </div><!--end teb pane-->

                    <div class="tab-pane fade" id="payment-management" role="tabpanel" aria-labelledby="paymentmanagement">
                        <img src="assets/images/task/task.png" class="img-fluid mx-auto rounded-md shadow-lg d-block" alt="">
                    </div><!--end teb pane-->

                    <div class="tab-pane fade" id="file-integrate" role="tabpanel" aria-labelledby="fileintegrate">
                        <img src="assets/images/task/file.png" class="img-fluid mx-auto rounded-md shadow-lg d-block" alt="">
                    </div><!--end teb pane-->
                </div><!--end tab content-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
<!-- End Example -->

<!-- Key Features Start -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Key Features</h4>
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
                    <h4 class="title mb-4">Whats Our Clients Said About <span class="text-primary">Armada Nusantara</span></h4>
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