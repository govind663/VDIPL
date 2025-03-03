{{-- Header Section Start --}}
<header>
    <section class="topbar-section">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 dnone">
                    <div class="social-links">
                        <!-- <span>Follow Us:</span> -->
                        <ul>
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="topbar-info">
                        <ul>
                            <li>
                                <img src="{{ asset('frontend/assets/images/icons/contact/webp/phone-white.webp') }}">
                                <a href="tel:+91 22 27454244">+91 22 27454244</a>
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images/icons/contact/webp/email-white.webp') }}">
                                <a href="mailto:info@vdipl.in">info@vdipl.in</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- header start -->
    <section class="main_menu">
        <div class="container">
            <div class="row v-center">
                <div class="header-item item-left">
                    <div class="logo">
                        <a href="{{ route('frontend.home') }}">
                            <img src="{{ asset('frontend/assets/images/home/vdipl-logo.webp') }}" alt="logo">
                        </a>
                    </div>
                </div>
                <!-- menu start here -->
                <div class="header-item item-center">
                    <div class="menu-overlay"></div>
                    <nav class="menu">
                        <div class="mobile-menu-head">
                            <div class="go-back"><i class="fa fa-angle-left"></i></div>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">
                                <div class="mobile-menu-close-button">&times;</div>
                            </div>
                        </div>
                        <ul class="menu-main">
                            <li><a href="{{ url('frontend.home') }}">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Services <i class="fa fa-angle-down"></i></a>
                                <div class="sub-menu single-column-menu">
                                    <ul>
                                        <li><a href="#">Road Construction</a></li>
                                        <li><a href="#">Earthwork Projects</a></li>
                                        <li><a href="#">Urban Utilities</a></li>
                                        <li><a href="#">Warehouse Construction</a></li>
                                        <li><a href="#">Ready Mix Concrete</a></li>
                                        <li><a href="#">Quarrying and Crusher Operations</a></li>
                                        <li><a href="#">Asphalt and Bitumen Mixing </a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Our Assesets</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div><!-- menu end here -->
                <div class="header-item header-right-item item-right">
                    <!-- mobile menu trigger -->
                    <div class="mobile-menu-trigger">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
