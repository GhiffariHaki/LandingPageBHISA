@extends('layout.master')
@section('content')

<!-- Hero Start -->

<section class="bg-half-170 w-100 d-flex align-items-center" style="background: url({{asset('images/home/header-1.png')}}) center center;">
    <div class="container">
        <div class="bg-overlay bg-overlay-black"></div>
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6">
                <div class="title-heading mb-md-5 pb-md-5">
                    <h5 class="text-white" >Armada Nusantara</h5>
                    <h4 class="heading mb-3 title text-white"> Drive down Expenses, <br> Drive up Profits </h4>
                    <p class="para-desc text-white">Simplify workshop operations, inventory tracking, and maintenance schedules all in one platform.</p>
                    <div class="mt-4 pt-2">
                        <a href="javascript:void(0)" class="btn btn-light">Get Started</a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->
<!-- Hero End -->

<!-- Intro Start -->
<section class="section">
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="saas-feature-shape-right position-relative">
                    <img src="{{asset('images/home/arsa-1.png')}}" class="img-fluid mx-auto d-block rounded" alt="">
                </div>
            </div><!--end col-->

            <div class="col-lg-5 mt-4 pt-2 mt-lg-0 pt-lg-0">
                <div class="section-title ms-lg-4">
                    <h1 class="title mb-3 text-arsaIjo">We take good care of your vehicle.</h1>
                    <p class="para-desc text-dark">Embark on a journey of efficiency and profitability with Armada Nusantara – Where Your Fleet's Success Begins!</p>
                    <div>
                                <a href="/requestdemo" class="btn btn-grad1">Request Demo</a>
                                <a href="javascript:void(0)" class="btn btn-grad2">Free Trial</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</section>
<!-- Intro End -->



<!-- Why Us Start -->
<section class="section">
    <div class="container mt-5 mb-5">
        <div class="row align-items-center">
            <div class="col-lg-5 order-2 order-lg-1 mt-4 pt-2 mt-lg-0 pt-lg-0">
                <div class="section-title me-lg-4">
                    <h1 class="title mb-3 text-arsaIjo">Why Choose us ?</h1>

                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center pt-4">
                                <h2><i data-feather="user-check" class="fea icon-m-md text-arsaBiru"></i></h2>
                                <div class="ms-3">
                                    <h5 class="text-arsaBiru">User Friendly</h5>
                                    <p class="text-dark mb-0">Armada Nusantara the perfect choice for users of all levels</p>
                                </div>
                            </div>
                        </div><!--end col-->
    
                        <div class="col-12">
                            <div class="d-flex align-items-center pt-4">
                                <h2><i data-feather="cpu" class="fea icon-m-md text-arsaBiru"></i></h2>
                                <div class="ms-3">
                                    <h5 class="text-arsaBiru">Easy to Integrate</h5>
                                    <p class="text-dark mb-0">Armada Nusantara offers effortless integration with your API.</p>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-7 order-1 order-lg-2">
                <div class="saas-feature-shape-left position-relative">
                    <img src="{{asset('images/home/why_us-1.png')}}" class="img-fluid mx-auto d-block rounded" alt="">
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
    <div class="bg-grad rounded shadow py-5 ms-3 me-3">
    <div class="container mt-60 mb-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-4">Discover what makes <span class="text-white">Armada Nusantara</span> great.</h4>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row align-items-center">
            <div class="col-md-5 mt-4 pt-2">
                <ul class="nav nav-pills nav-justified flex-column mb-0" id="pills-tab" role="tablist">
                    <li class="nav-item bg-light rounded-md">
                        <a class="nav-link rounded-md active" id="dashboard" data-bs-toggle="pill" href="#dash-board" role="tab" aria-controls="dash-board" aria-selected="false">
                            <div class="p-3 text-start">
                                <h5 class="title">Workshop Management</h5>
                                <p class="tab-para mb-0">Management of schedules, repair costs, vehicle maintenance, inventory and mechanical services can all be done in one integrated system.</p>
                            </div>
                        </a><!--end nav link-->
                    </li><!--end nav item-->
                            
                    <li class="nav-item bg-light rounded-md mt-4">
                        <a class="nav-link rounded-md" id="timeline" data-bs-toggle="pill" href="#time-line" role="tab" aria-controls="time-line" aria-selected="false">
                            <div class="p-3 text-start">
                                <h5 class="title">Inventory Management</h5>
                                <p class="tab-para mb-0">Transform your Inventory Management process to Maximize Efficiency!</p>
                            </div>
                        </a><!--end nav link-->
                    </li><!--end nav item-->
                            
                    <li class="nav-item bg-light rounded-md mt-4">
                        <a class="nav-link rounded-md" id="paymentmanagement" data-bs-toggle="pill" href="#payment-management" role="tab" aria-controls="payment-management" aria-selected="false">
                            <div class="p-3 text-start">
                                <h5 class="title">Maintenance Management</h5>
                                <p class="tab-para mb-0">
                                Improve company operations by optimizing vehicle performance and ensuring safety through integrated maintenance management.</p>
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
                        <img src="{{asset('images/home/Inventory.jpg')}}" class="img-fluid mx-auto rounded-md shadow-lg d-block" alt="">
                    </div><!--end teb pane-->
                </div><!--end tab content-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    </div>
</section>
<!-- End Example -->

<!-- Key Features Start -->
<section class="section">
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4 text-arsaIjo">Key Features</h4>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle me-3">
                        <i data-feather="sliders" class="fea icon-ex-md text-arsaBiru"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title mb-0">Planning</h4>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle me-3">
                        <i data-feather="calendar" class="fea icon-ex-md text-arsaBiru"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title mb-0">Scheduling</h4>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle me-3">
                        <i data-feather="briefcase" class="fea icon-ex-md text-arsaBiru"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title mb-0">Asset Management</h4>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle me-3">
                        <i data-feather="list" class="fea icon-ex-md text-arsaBiru"></i>
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
                        <i data-feather="package" class="fea icon-ex-md text-arsaBiru"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title mb-0">Inventory Management</h4>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle me-3">
                        <i data-feather="pie-chart" class="fea icon-ex-md text-arsaBiru"></i>
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
                        <i data-feather="thumbs-up" class="fea icon-ex-md text-arsaBiru"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title mb-0">Reporting</h4>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle me-3">
                        <i data-feather="clipboard" class="fea icon-ex-md text-arsaBiru"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title mb-0">Agreement</h4>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle me-3">
                        <i data-feather="dollar-sign" class="fea icon-ex-md text-arsaBiru"></i>
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

@endsection