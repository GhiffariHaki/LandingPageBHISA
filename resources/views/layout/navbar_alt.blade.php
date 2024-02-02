<!-- Navbar Start -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="index.html">
            <img src="{{asset('images/logo/LogoArsa-Hitam.png')}}" height="24" class="logo-light-mode" alt="">
            <img src="{{asset('images/logo/LogoArsa-Putih.png')}}" height="24" class="logo-dark-mode" alt="">
        </a>
        <!-- End Logo container-->

                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <ul class="buy-button list-inline mb-0">
                    <li class="list-inline-item mb-0 pe-1">
                        <div class="dropdown">
                            <button type="button" class="btn dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!-- <i class="uil uil-search text-white title-dark btn-icon-light fs-5 align-middle"></i>
                                <i class="uil uil-search text-dark btn-icon-dark fs-5 align-middle"></i> -->
                                <i class="uil uil-search text-dark fs-5 align-middle"></i>
                            </button>
                            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 p-0" style="width: 300px;">
                                <div class="search-bar">
                                    <div id="itemSearch" class="menu-search mb-0">
                                        <form role="search" method="get" id="searchItemform" class="searchform">
                                            <input type="text" class="form-control border rounded" name="s" id="searchItem" placeholder="Search...">
                                            <input type="submit" id="searchItemsubmit" value="Search">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
            
                    <li class="list-inline-item mb-0">
                        <div class="dropdown">
                            <button type="button" class="btn btn-icon btn-pills btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="shopping-cart" class="icons"></i></button>
                            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 p-4" style="width: 300px;">
                                <div class="pb-4">
                                    <a href="javascript:void(0)" class="d-flex align-items-center">
                                        <img src="assets/images/shop/product/s-1.jpg" class="shadow rounded" style="max-height: 64px;" alt="">
                                        <div class="flex-1 text-start ms-3">
                                            <h6 class="text-dark mb-0">T-shirt (M)</h6>
                                            <p class="text-muted mb-0">$320 X 2</p>
                                        </div>
                                        <h6 class="text-dark mb-0">$640</h6>
                                    </a>

                                    <a href="javascript:void(0)" class="d-flex align-items-center mt-4">
                                        <img src="assets/images/shop/product/s-2.jpg" class="shadow rounded" style="max-height: 64px;" alt="">
                                        <div class="flex-1 text-start ms-3">
                                            <h6 class="text-dark mb-0">Bag</h6>
                                            <p class="text-muted mb-0">$50 X 5</p>
                                        </div>
                                        <h6 class="text-dark mb-0">$250</h6>
                                    </a>

                                    <a href="javascript:void(0)" class="d-flex align-items-center mt-4">
                                        <img src="assets/images/shop/product/s-3.jpg" class="shadow rounded" style="max-height: 64px;" alt="">
                                        <div class="flex-1 text-start ms-3">
                                            <h6 class="text-dark mb-0">Watch (Men)</h6>
                                            <p class="text-muted mb-0">$800 X 1</p>
                                        </div>
                                        <h6 class="text-dark mb-0">$800</h6>
                                    </a>
                                </div>

                                <div class="d-flex align-items-center justify-content-between pt-4 border-top">
                                    <h6 class="text-dark mb-0">Total($):</h6>
                                    <h6 class="text-dark mb-0">$1690</h6>
                                </div>

                                <div class="mt-3 text-center">
                                    <a href="javascript:void(0)" class="btn btn-primary me-2">View Cart</a>
                                    <a href="javascript:void(0)" class="btn btn-primary">Checkout</a>
                                </div>
                                <p class="text-muted text-start mt-1 mb-0">*T&C Apply</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-inline-item mb-0">
                        <a href="#" class="btn btn-icon btn-pills btn-primary" data-bs-toggle="modal" data-bs-target="#wishlist"><i data-feather="heart" class="icons"></i></a>
                    </li>
                    <li class="list-inline-item mb-0">
                        <div class="dropdown dropdown-primary">
                            <button type="button" class="btn btn-icon btn-pills btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="user" class="icons"></i></button>
                            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 py-3" style="width: 200px;">
                                <a class="dropdown-item text-dark" href="#"><i class="uil uil-user align-middle me-1"></i> Account</a>
                                <a class="dropdown-item text-dark" href="#"><i class="uil uil-clipboard-notes align-middle me-1"></i> Order History</a>
                                <a class="dropdown-item text-dark" href="#"><i class="uil uil-arrow-circle-down align-middle me-1"></i> Download</a>
                                <div class="dropdown-divider my-3 border-top"></div>
                                <a class="dropdown-item text-dark" href="#"><i class="uil uil-sign-out-alt align-middle me-1"></i> Logout</a>
                            </div>
                        </div>
                    </li>
                </ul><!--end login button-->

                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu">
                        <li><a href="index-shop.html" class="sub-menu-item">Home</a></li>

                        <li><a href="shop-aboutus.html" class="sub-menu-item"> About Us</a></li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Shop</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="shop-fullwidth-grids.html" class="sub-menu-item">Fullwidth Grid</a></li>
                                <li><a href="shop-grids.html" class="sub-menu-item">Product Grids</a></li>
                                <li><a href="shop-fullwidth-lists.html" class="sub-menu-item">Fullwidth List</a></li>
                                <li><a href="shop-lists.html" class="sub-menu-item">Product List</a></li>
                                <li><a href="shop-product-detail.html" class="sub-menu-item">Product Details</a></li>
                                <li><a href="shop-cart.html" class="sub-menu-item">Shop Cart</a></li>
                                <li><a href="shop-checkouts.html" class="sub-menu-item">Checkouts</a></li>
                                <li><a href="shop-myaccount.html" class="sub-menu-item">My Account</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                            <ul class="submenu">                                        
                                <li><a href="auth-login.html" class="sub-menu-item">Login</a></li>
                                <li><a href="auth-signup.html" class="sub-menu-item">Signup</a></li>
                                <li><a href="auth-re-password.html" class="sub-menu-item">Reset Password</a></li>
                                <li><a href="page-comingsoon.html" class="sub-menu-item">Coming Soon</a></li>
                                <li><a href="page-maintenance.html" class="sub-menu-item">Maintenance</a></li>
                                <li><a href="page-error.html" class="sub-menu-item">Error</a></li>
                                <li><a href="page-thankyou.html" class="sub-menu-item">Thank you</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Blog</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="shop-blog.html" class="sub-menu-item">Blog Grid</a></li>
                                <li><a href="shop-blog-detail.html" class="sub-menu-item">Blog Detail</a></li>
                            </ul>
                        </li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->