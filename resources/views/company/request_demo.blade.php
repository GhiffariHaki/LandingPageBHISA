@extends('layout.master')
@section('content')

<!-- Start Home -->
<section class="d-flex align-items-center bg-demo">
    <div class="container mt-5 mb-5" style="z-index: 1;">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="title-heading mt-5">
                    <h1 class="heading text-white title-dark mb-3">Request Demo</h1>
                </div>
            </div>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5 col-md-6 pt-2 pt-sm-0 order-2 order-md-1">
                <div class="card shadow rounded border-0">
                    <div class="card-body py-5">
                        <h4 class="card-title">Get In Touch !</h4>
                        <div class="custom-form mt-3">
                            <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                                <p id="error-msg" class="mb-0"></p>
                                <div id="simple-msg"></div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input name="name" id="name" type="text" class="form-control ps-5" placeholder="Name :">
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input name="email" id="email" type="email" class="form-control ps-5" placeholder="Email :">
                                            </div>
                                        </div> 
                                    </div><!--end col-->
            
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Subject</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="book" class="fea icon-sm icons"></i>
                                                <input name="subject" id="subject" class="form-control ps-5" placeholder="subject :">
                                            </div>
                                        </div>
                                    </div><!--end col-->
            
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Comments <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="message-circle" class="fea icon-sm icons clearfix"></i>
                                                <textarea name="comments" id="comments" rows="4" class="form-control ps-5" placeholder="Message :"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" id="submit" name="send" class="btn btn-arsa">Request Demo</button>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form>
                        </div><!--end custom-form-->
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Home -->