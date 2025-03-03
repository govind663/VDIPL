{{-- Footer Section Start --}}
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12">
                <a href="{{ route('frontend.home') }}">
                    <img src="{{ asset('frontend/assets/images/home/vdipl-footer-logo.webp') }}" alt="footer-logo">
                </a>
                <p class="morbi">
                    Vaibhav Deshmukh Infra Projects Pvt. Ltd. (VDIPL) was founded in 2007 under the
                    visionary leadership of Mr. Vaibhav Deshmukh, who relentlessly pursued his dream to create an
                    enterprise that would leave a lasting impact on India’s infrastructure landscape. Initially
                    established as M/s Vaibhav Construction, the company has since evolved into VDIPL, a trusted
                    name in the industry.
                </p>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12">
                <div class="row two-rows-wrap">
                    <div class="col-6">
                        <h2 class="useful-link-text">Useful Links</h2>
                        <ul class="usefulLinks-List">
                            <li><a href="{{ route('frontend.home') }}">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Our Assesets</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <h2 class="useful-link-text">Services</h2>
                        <ul class="usefulLinks-List">
                            <li><a href="#">Road Construction</a></li>
                            <li><a href="#">Earthwork Projects</a></li>
                            <li><a href="#">Urban Utilities</a></li>
                            <li><a href="#">Warehouse Construction</a></li>
                            <li><a href="#">Ready Mix Concrete</a></li>
                            <li><a href="#">Quarrying and Crusher Operations</a></li>
                            <li><a href="#">Asphalt and Bitumen Mixing </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12">
                <h2 class="useful-link-text">Contact Us</h2>
                <div class="head-phone-white-main">
                    <div class="headphone-white">
                        <img src="{{ asset('frontend/assets/images/icons/contact/webp/phone-white.webp') }}" alt="headphone-white">
                    </div>
                    <div>
                        <p class="CallUs">Call Us</p>
                        <a href="tel:+91 22 27454244 " class="CallUs-phone">
                            +91 22 27454244
                        </a>
                    </div>
                </div>
                <div class="head-phone-white-main">
                    <div class="headphone-white">
                        <img src="{{ asset('frontend/assets/images/icons/contact/webp/email-white.webp') }}" alt="email-White">
                    </div>
                    <div>
                        <p class="CallUs">Email Us</p>
                        <a href="mailto:info@vdipl.in" class="CallUs-phone">
                            info@vdipl.in
                        </a>
                    </div>
                </div>
                <div class="head-phone-white-main">
                    <div class="headphone-white">
                        <img src="{{ asset('frontend/assets/images/icons/contact/webp/maps-white.webp') }}" alt="loaction-white">
                    </div>
                    <div>
                        <p class="CallUs">Find Us</p>
                        <p class="CallUs-phone">Office No. B3- B4, 1st Floor, Bldg. No. 7B, Dwarkamai, Gurusharnam
                            Complex, Vishrali Naka, <br>Panvel - 410 206.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

{{-- Copyright Section Start --}}
<div class="copyright-main">
    <div class="container">
        <div class="rights-reserved">
            <h2>
                <div id="copyright">
                    Copyright © {{ date('Y') }} VDIPL. All rights reserved. Designed By <a href="http://www.matrixbricks.com"
                        target="_blank">Matrix Bricks</a></div>
            </h2>
            <div class="home-media-icon-main-head">
                <a href="#">
                    <div class="home-media-icon-main">
                        <i class="fa-brands fa-facebook-f"></i>
                    </div>
                </a>
                <a href="#">
                    <div class="home-media-icon-main">
                        <i class="fa-brands fa-x-twitter"></i>
                    </div>
                </a>
                <a href="#">
                    <div class="home-media-icon-main">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </a>
                <a href="#">
                    <div class="home-media-icon-main">
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
