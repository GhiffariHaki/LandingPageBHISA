<!-- Navbar Start -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo Container-->
        <a class="logo" href="index.html">
            <span class="logo-light-mode">
                <img src="{{asset('images/logo/logo-dark.png')}}" class="l-dark" height="24" alt="">
                <img src="{{asset('images/logo/logo-white.png')}}" class="l-light" height="24" alt="">
            </span>
            <img src="{{asset('images/logo/logo-dark.png')}}" height="24" class="logo-dark-mode" alt="">
        </a>

        <!-- End Logo Container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile Menu Toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End Mobile Menu Toggle-->
            </div>
        </div>

        <!--Login button Start-->
        <ul class="buy-button list-inline mb-0">
            <li class="list-inline-item mb-0">
                <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <div class="login-btn-primary"><span class="btn btn-pills btn-primary">Sign In</span></div>
                    <div class="login-btn-light"><span class="btn btn-pills btn-primary">Sign In</span></div>
                </a>
            </li>
            
            <li class="list-inline-item ps-1 mb-0">
                <a href="#" target="_blank">
                    <div class="login-btn-primary"><span class="btn btn-pills btn-light">Try It Free</span></div>
                    <div class="login-btn-light"><span class="btn btn-pills btn-light">Try It Free</span></div>
                </a>
            </li>
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu nav-light">
                <li><a href="index.html" class="sub-menu-item">Home</a></li>
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Products</a></span>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Customers</a></span>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Support</a></span>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Company</a></span>
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