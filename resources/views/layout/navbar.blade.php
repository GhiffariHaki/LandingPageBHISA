<!-- Navbar Start -->
<header id="topnav" class="defaultscroll sticky navbar-white-bg">
    <div class="container">
        <!-- Logo Container-->
        <a class="logo img-logo-responsive" href="/">
            <img src="{{asset('images/logo/LogoArsa-Hitam.png')}}" height="24" class="logo-light-mode" alt="">
            <img src="{{asset('images/logo/LogoArsa-Putih.png')}}" height="24" class="logo-dark-mode" alt="">
        </a>

        <!--Login button Start-->
        <ul class="buy-button list-inline mb-0">
            <li class="list-inline-item mb-0">
                <a href="/login" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <div class="login-btn-primary"><span class="btn btn-pills btn-dark">Sign In</span></div>
                    <div class="login-btn-light"><span class="btn btn-pills btn-dark">Sign In</span></div>
                </a>
            </li>
            
            <li class="list-inline-item ps-1 mb-0">
                <a href="/requestdemo">
                    <div class="login-btn-primary"><span class="btn btn-pills btn-outline-dark">Get Started</span></div>
                    <div class="login-btn-light"><span class="btn btn-pills btn-outline-dark">Get Started</span></div>
                </a>
            </li>
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu">
                <li><a href="/" class="sub-menu-item">Home</a></li>
                <li class="has-submenu parent-menu-item">
                    <a href="/product" class="sub-menu-item">Products</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="/product/workshop" class="sub-menu-item">Workshop Management</a></li>
                        <li><a href="/product/inventory" class="sub-menu-item">Inventory Management</a></li>
                        <li><a href="/product/maintenance" class="sub-menu-item">Maintenance Management</a></li>
                        <li><a href="/product/pricing" class="sub-menu-item">Pricing</a></li>
                    </ul>
                </li>
                <li class="has-submenu parent-menu-item">
                    <a href="/company" class="sub-menu-item">Company</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="/contact" class="sub-menu-item">Contact</a></li>
                        <li><a href="/requestdemo" class="sub-menu-item">Request Demo</a></li>
                    </ul>
                </li>
            </ul>
            <!-- End Navigation Menu-->
        </div>
        <!-- End Navigation-->
    </div>
    <!-- End Container -->
</header>
<!-- End Header -->

<!-- Navbar End -->