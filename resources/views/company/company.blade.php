@extends('layout.master')
@section('content')

<!-- Hero Start -->
<section class="d-flex align-items-center bg-company">
    <div class="container mt-5 mb-5" style="z-index: 1;">
        <nav aria-label="breadcrumb" class="d-inline-block mt-4">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Company</li>
            </ul>
        </nav>
        <div class="row mt-100 mb-100">
            <div class="col">
                <div class="title-heading mt-4 text-white">
                    <h1 class="display-4 fw-bold mb-3">Company Story</h1>
                    <p class="">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p>
                    <a href="/requestdemo" class="btn btn-pills btn-arsa" style="background=#fca311">Get Started</a>
                </div>                                
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container--> 
</section><!--end section-->
<!-- Hero End -->

<!-- Company Story Start -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="me-lg-4">
                    <img src="assets/images/hosting/2.png" class="img-fluid" alt="">
                </div>
            </div><!--end col-->

            <div class="col-lg-6 col-md-6 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="section-title">
                    <h6 class="text-primary">Company Story</h6>
                    <h4 class="title mb-4">Armada</h4>
                    <p class="text-muted para-desc">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century.</p>
                    <p class="text-muted para-desc mb-0">Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. This ancient dummy text is also incomprehensible, but it imitates the rhythm of most European languages in Latin script. The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout.</p>
                            
                    <div class="mt-4">
                        <a href="javascript:void(0)" class="btn btn-soft-primary">Get Started <i class="mdi mdi-arrow-right"></i></a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>



<!-- Company Team Start -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Our Team</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <div class="card team team-primary text-center border-0">
                    <div class="position-relative">
                        <img src="{{asset('images/empty.png')}}" class="img-fluid rounded shadow" alt="">
                        <ul class="list-unstyled mb-0 team-icon">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                        </ul><!--end icon-->
                    </div>
                    <div class="card-body py-3 px-0 content">
                        <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Ronny Jofra</a></h5>
                        <small class="designation text-muted">C.E.O</small>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <div class="card team team-primary text-center border-0">
                    <div class="position-relative">
                        <img src="{{asset('images/empty.png')}}" class="img-fluid rounded shadow" alt="">
                        <ul class="list-unstyled mb-0 team-icon">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                        </ul><!--end icon-->
                    </div>
                    <div class="card-body py-3 px-0 content">
                        <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Micheal Carlo</a></h5>
                        <small class="designation text-muted">Director</small>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <div class="card team team-primary text-center border-0">
                    <div class="position-relative">
                        <img src="{{asset('images/empty.png')}}" class="img-fluid rounded shadow" alt="">
                        <ul class="list-unstyled mb-0 team-icon">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                        </ul><!--end icon-->
                    </div>
                    <div class="card-body py-3 px-0 content">
                        <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Aliana Rosy</a></h5>
                        <small class="designation text-muted">Manager</small>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <div class="card team team-primary text-center border-0">
                    <div class="position-relative">
                        <img src="{{asset('images/empty.png')}}" class="img-fluid rounded shadow" alt="">
                        <ul class="list-unstyled mb-0 team-icon">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                        </ul><!--end icon-->
                    </div>
                    <div class="card-body py-3 px-0 content">
                        <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Sofia Razaq</a></h5>
                        <small class="designation text-muted">Developer</small>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>