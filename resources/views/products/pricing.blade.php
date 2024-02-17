@extends('layout.master')
@section('content')


<!-- Hero Start -->
<section class="d-flex align-items-center bg-products">
    <div class="container mt-5 mb-5" style="z-index: 1;">
        <nav aria-label="breadcrumb" class="d-inline-block mt-4">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/product">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pricing</li>
            </ul>
        </nav>
        <div class="row mt-100 mb-100">
            <div class="col">
                <div class="title-heading mt-4 text-white">
                    <h1 class="display-4 fw-bold mb-3">Pricing</h1>
                    <p class="">Organize your inventory efficiently with Armada Nusantara</p>
                    <a href="/requestdemo" class="btn btn-pills btn-arsa" style="background=#fca311">Get Started</a>
                </div>                                
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container--> 
</section><!--end section-->
<!-- Hero End -->

<!-- Pricing Start -->
<section>
            <div class="container mt-100 mb-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Pricing Plans</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row mt-4 pt-2">
                    <div class="col-12">
                        <div class="table-responsive bg-white shadow rounded">
                            <table class="table mb-0 table-center">
                                <thead>
                                    <tr>
                                        <th class="border-bottom">&nbsp;</th>
                                        <th class="text-center p-4 border-bottom" style="min-width: 200px; max-width: 200px;">
                                            <div class="h4">Starter</div>
                                            <p class="text-muted fw-normal mt-3 mb-0">We offers a <strong>free month</strong> of service for new customers.</p>
                                            <div class="d-flex justify-content-center mt-3">
                                                <span class="h6 text-muted mb-0 mt-2">$</span>
                                                <span class="price text-primary h1 mb-0">4.99</span>
                                                <span class="h6 text-muted align-self-end mb-1">/mo</span>
                                            </div>
                                        </th>
                                        <th class="text-center p-4 border-bottom" style="min-width: 200px; max-width: 200px;">
                                            <div class="h4">Business</div>
                                            <p class="text-muted fw-normal mt-3 mb-0">We offers a <strong>free 14 days</strong> of service for new customers.</p>
                                            <div class="d-flex justify-content-center mt-3">
                                                <span class="h6 text-muted mb-0 mt-2">$</span>
                                                <span class="price text-primary h1 mb-0">9.99</span>
                                                <span class="h6 text-muted align-self-end mb-1">/mo</span>
                                            </div>
                                        </th>
                                        <th class="text-center p-4 border-bottom" style="min-width: 200px; max-width: 200px;">
                                            <div class="h4">Enterprise</div>
                                            <p class="text-muted fw-normal mt-3 mb-0">We offers a <strong>free 7 days</strong> of service for new customers.</p>
                                            <div class="d-flex justify-content-center mt-3">
                                                <span class="h6 text-muted mb-0 mt-2">$</span>
                                                <span class="price text-primary h1 mb-0">14.99</span>
                                                <span class="h6 text-muted align-self-end mb-1">/mo</span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="h6 p-3">Space</td>
                                        <td class="text-center p-3">1 GB</td>
                                        <td class="text-center p-3">5 GB</td>
                                        <td class="text-center p-3">20 GB</td>
                                    </tr>
                                    <tr>
                                        <td class="h6 p-3">Bandwidth</td>
                                        <td class="text-center p-3">10 GB</td>
                                        <td class="text-center p-3">100 GB</td>
                                        <td class="text-center p-3">500 GB</td>
                                    </tr>
                                    <tr>
                                        <td class="h6 p-3">Email Accounts</td>
                                        <td class="text-center p-3">100</td>
                                        <td class="text-center p-3">1000</td>
                                        <td class="text-center p-3">5000</td>
                                    </tr>
                                    <tr>
                                        <td class="h6 p-3">MySQL Accounts</td>
                                        <td class="text-center p-3">100</td>
                                        <td class="text-center p-3">1000</td>
                                        <td class="text-center p-3">5000</td>
                                    </tr>
                                    <tr>
                                        <td class="h6 p-3">Processor</td>
                                        <td class="text-center p-3">3Core</td>
                                        <td class="text-center p-3">5Core</td>
                                        <td class="text-center p-3">7Core</td>
                                    </tr>
                                    <tr>
                                        <td class="h6 p-3">CPUs</td>
                                        <td class="text-center p-3">3.2GHz CPU</td>
                                        <td class="text-center p-3">2x3.2GHz CPU</td>
                                        <td class="text-center p-3">4x3.2GHz CPU</td>
                                    </tr>
                                    <tr>
                                        <td class="h6 p-3">Cpanel</td>
                                        <td class="text-center p-3">WHM</td>
                                        <td class="text-center p-3">WHM</td>
                                        <td class="text-center p-3">WHM</td>
                                    </tr>
                                    <tr>
                                        <td class="h6 p-3">Support</td>
                                        <td class="text-center p-3">Free Setup</td>
                                        <td class="text-center p-3">24/7 Hour</td>
                                        <td class="text-center p-3">24/7 Hour</td>
                                    </tr>
                                    <tr>
                                        <td class="h6 p-3">SSH Access</td>
                                        <td class="text-center p-3"><i data-feather="x" class="fea icon-sm text-danger"></i></td>
                                        <td class="text-center p-3"><i data-feather="x" class="fea icon-sm text-danger"></i></td>
                                        <td class="text-center p-3"><i data-feather="check" class="fea icon-sm text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="h6 p-3">SMTP Management</td>
                                        <td class="text-center p-3"><i data-feather="x" class="fea icon-sm text-danger"></i></td>
                                        <td class="text-center p-3"><i data-feather="x" class="fea icon-sm text-danger"></i></td>
                                        <td class="text-center p-3"><i data-feather="check" class="fea icon-sm text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="h6 p-3">FTP Access</td>
                                        <td class="text-center p-3"><i data-feather="x" class="fea icon-sm text-danger"></i></td>
                                        <td class="text-center p-3"><i data-feather="check" class="fea icon-sm text-success"></i></td>
                                        <td class="text-center p-3"><i data-feather="check" class="fea icon-sm text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="h6 p-3">Google Adwords Credit</td>
                                        <td class="text-center p-3"><i data-feather="x" class="fea icon-sm text-danger"></i></td>
                                        <td class="text-center p-3"><i data-feather="check" class="fea icon-sm text-success"></i></td>
                                        <td class="text-center p-3"><i data-feather="check" class="fea icon-sm text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="h6 p-3">&nbsp;</td>
                                        <td class="text-center p-3"><a href="#" class="btn btn-primary">Start Now</a></td>
                                        <td class="text-center p-3"><a href="#" class="btn btn-primary">Buy Now</a></td>
                                        <td class="text-center p-3"><a href="#" class="btn btn-primary">Buy Now</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
</section>


<!-- FAQ Start -->
<section class="section">
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mt-4 mb-4 pb-2">
                    <h4 class="title mb-4">Frequently Asked Question</h4>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-md-6 col-12">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0">How our <span class="text-primary">Landrick</span> work ?</h5>
                        <p class="answer text-muted mb-0">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts.</p>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0"> What is the main process open account ?</h5>
                        <p class="answer text-muted mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact</p>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0"> How to make unlimited data entry ?</h5>
                        <p class="answer text-muted mb-0">Furthermore, it is advantageous when the dummy text is relatively realistic so that the layout impression of the final publication is not compromised.</p>
                    </div>
                </div>
            </div><!--end col-->
                    
            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0"> Is <span class="text-primary">Landrick</span> safer to use with my account ?</h5>
                        <p class="answer text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin.</p>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- FAQ End -->