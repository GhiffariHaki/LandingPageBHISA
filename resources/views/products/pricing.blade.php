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
                    <p class="para-desc text-muted">Embark on a journey of efficiency and profitability with <span class="text-arsa"><strong>Armada Nusantara</strong></span> – Where Your Fleet's Success Begins!</p>
                    <a href="/requestdemo" class="btn btn-pills btn-arsa" style="background=#fca311">Get Started</a>
                </div>                                
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container--> 
</section><!--end section-->
<!-- Hero End -->

<!-- Pricing Start -->
<section>
            <div class="container mt-100 mb-100">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Pricing Plans</h4>
                            <p class="para-desc text-muted mx-auto">Embark on a journey of efficiency and profitability with <span class="text-arsa"><strong>Armada Nusantara</strong></span> – Where Your Fleet's Success Begins!</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row mt-2 pt-2">
                    <div class="col-12">
                        <div class="table-responsive bg-white shadow rounded">
                            <table class="table mb-0 table-center">
                                <thead>
                                    <tr>
                                        <th class="border-bottom">&nbsp;</th>
                                        <th class="text-center p-4 border-bottom" style="min-width: 200px; max-width: 200px;">
                                            <div class="h4">Starter</div>
                                            <p class="text-muted fw-normal mt-3 mb-0">Recommended for small fleet.</p>
                                            <div class="d-flex justify-content-center mt-3">
                                                <span class="h6 text-muted mb-0 mt-2">Rp.</span>
                                                <span class="price text-arsa h1 mb-0">100.000</span>
                                                <span class="h6 text-muted align-self-end mb-1">/vehicle</span>
                                            </div>
                                        </th>
                                        <th class="text-center p-4 border-bottom" style="min-width: 200px; max-width: 200px;">
                                            <div class="h4">Business</div>
                                            <p class="text-muted fw-normal mt-3 mb-0">Recommended for business with already established fleet.</p>
                                            <div class="d-flex justify-content-center mt-3">
                                                <span class="h6 text-muted mb-0 mt-2">Rp.</span>
                                                <span class="price text-arsa h1 mb-0">125.000</span>
                                                <span class="h6 text-muted align-self-end mb-1">/vehicle</span>
                                            </div>
                                        </th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="h6 p-3">Maximum Vehicle</td>
                                        <td class="text-center p-3">25 Vehicle</td>
                                        <td class="text-center p-3">Unlimited</td>
                                    </tr>
                                    <tr>
                                        <td class="h6 p-3">Workshop Management</td>
                                        <td class="text-center p-3"><i data-feather="check" class="fea icon-sm text-success"></i></td>
                                        <td class="text-center p-3"><i data-feather="check" class="fea icon-sm text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="h6 p-3">Inventory Management</td>
                                        <td class="text-center p-3"><i data-feather="check" class="fea icon-sm text-success"></i></td>
                                        <td class="text-center p-3"><i data-feather="check" class="fea icon-sm text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="h6 p-3">Maintenance Management</td>
                                        <td class="text-center p-3"><i data-feather="check" class="fea icon-sm text-success"></i></td>
                                        <td class="text-center p-3"><i data-feather="check" class="fea icon-sm text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="h6 p-3">Sparepart Marketplace</td>
                                        <td class="text-center p-3"><i data-feather="x" class="fea icon-sm text-danger"></i></td>
                                        <td class="text-center p-3"><i data-feather="check" class="fea icon-sm text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="h6 p-3">24/7 Customer Support</td>
                                        <td class="text-center p-3"><i data-feather="x" class="fea icon-sm text-danger"></i></td>
                                        <td class="text-center p-3"><i data-feather="check" class="fea icon-sm text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="h6 p-3">&nbsp;</td>
                                        <td class="text-center p-3"><a href="#" class="btn btn-arsa">Start Now</a></td>
                                        <td class="text-center p-3"><a href="#" class="btn btn-arsa">Buy Now</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
</section>