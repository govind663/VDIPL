@extends('frontend.layouts.master')

@section('title')
VDIPL - Vaibhav Deshmukh Infra Projects Pvt. Ltd. | Home
@endsection

@push('styles')
@endpush

@section('content')
{{-- Slider Section Start --}}
<section class="banner slider-fade">
    <div class="owl-carousel owl-theme">
        <div class="text-center item bg-img" data-overlay-dark="2" data-background="{{ asset('frontend/assets/images/banner/1.webp') }}">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <h4>Quality. Integrity. Expertise.</h4>
                            <h1>Crafting Tomorrow’s <br>Strong Structures</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center item bg-img" data-overlay-dark="2" data-background="{{ asset('frontend/assets/images/banner/2.webp') }}">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <h4>Expert Builders, Trusted Services</h4>
                            <h1>Transforming Spaces,<br> Creating Value</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Services Section Start --}}
<div class="product-section">
    <div class="container-fluid">
        <div class="heading text-center" data-aos="fade-up" data-aos-duration="1000">
            <h2>Services We Offer</h2>
        </div>
        <div class="row gx-lg-5">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="owl-carousel owl-theme productslider">
                    <div class="item">
                        <div class="single-serv-item">
                            <div class="service-bg">
                                <div class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/icons/services/road.webp') }}" alt="">
                                </div>
                                <img src="{{ asset('frontend/assets/images/services/1.webp') }}" alt="">
                            </div>
                            <div class="service-info">
                                <h5>Road Construction</h5>
                                <a href="#" class="details-icon">
                                    <i class="fa fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-serv-item">
                            <div class="service-bg">
                                <div class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/icons/services/excavation.webp') }}" alt="">
                                </div>
                                <img src="{{ asset('frontend/assets/images/services/2.webp') }}" alt="">
                            </div>
                            <div class="service-info">
                                <h5>Earthwork Projects</h5>
                                <a href="#" class="details-icon">
                                    <i class="fa fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-serv-item">
                            <div class="service-bg">
                                <div class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/icons/services/settings.webp') }}" alt="">}">
                                </div>
                                <img src="{{ asset('frontend/assets/images/services/3.webp') }}" alt="">
                            </div>
                            <div class="service-info">
                                <h5>Urban Utilities</h5>
                                <a href="#" class="details-icon">
                                    <i class="fa fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-serv-item">
                            <div class="service-bg">
                                <div class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/icons/services/heart.webp') }}" alt="">
                                </div>
                                <img src="{{ asset('frontend/assets/images/services/4.webp') }}" alt="">
                            </div>
                            <div class="service-info">
                                <h5>Warehouse Construction</h5>
                                <a href="#" class="details-icon">
                                    <i class="fa fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-serv-item">
                            <div class="service-bg">
                                <div class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/icons/services/cement.webp') }}" alt="">
                                </div>
                                <img src="{{ asset('frontend/assets/images/services/5.webp') }}" alt="">
                            </div>
                            <div class="service-info">
                                <h5>Ready Mix Concrete</h5>
                                <a href="#" class="details-icon">
                                    <i class="fa fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-serv-item">
                            <div class="service-bg">
                                <div class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/icons/services/crusher.webp') }}" alt="">
                                </div>
                                <img src="{{ asset('frontend/assets/images/services/6.webp') }}" alt="">
                            </div>
                            <div class="service-info">
                                <h5>Quarrying and Crusher Operations</h5>
                                <a href="#" class="details-icon">
                                    <i class="fa fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-serv-item">
                            <div class="service-bg">
                                <div class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/icons/services/mixing.webp') }}" alt="">
                                </div>
                                <img src="{{ asset('frontend/assets/images/services/7.webp') }}" alt="">
                            </div>
                            <div class="service-info">
                                <h5>Asphalt and Bitumen Mixing</h5>
                                <a href="#" class="details-icon">
                                    <i class="fa fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

{{-- About Section Start --}}
<div class="about-section gray-bg">
    <div class="container">
        <div class="row gx-lg-5 align-center">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="about-img-wrap">
                    <img class="image-one img-fluid" src="{{ asset('frontend/assets/images/home/1.webp') }}" alt="">
                    <img class="image-two img-fluid" src="{{ asset('frontend/assets/images/home/2.webp') }}" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="about-content-wrap">
                    <div class="heading heading-left" data-aos="fade-up" data-aos-duration="1000">
                        <h2>Where Innovation Meets Construction Expertise</h2>
                    </div>
                    <p>Vaibhav Deshmukh Infra Projects Pvt. Ltd. (VDIPL) was founded in 2007 under the visionary
                        leadership of Mr. Vaibhav Deshmukh, who relentlessly pursued his dream to create an
                        enterprise that would leave a lasting impact on India’s infrastructure landscape. Initially
                        established as M/s Vaibhav Construction, the company has since evolved into VDIPL, a trusted
                        name in the industry.</p>
                    <div class="row mT60">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                            <div class="single-counter-box">
                                <p class="counter-number"><span class="purecounter counter">364</span>+</p>
                                <h6>Completed Project</h6>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                            <div class="single-counter-box">
                                <p class="counter-number"><span class="purecounter counter">156</span>+</p>
                                <h6>Satisfied Clients</h6>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                            <div class="single-counter-box">
                                <p class="counter-number"><span class="purecounter counter">15</span>+</p>
                                <h6>Years of Experience</h6>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="theme-btn" data-aos="fade-up" data-aos-duration="1000">Learn
                        More</a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- projects section start --}}
<div class="projects-section">
    <div class="container-fluid">
        <div class="heading text-center" data-aos="fade-up" data-aos-duration="1400">
            <h2>Projects We Created </h2>
        </div>
        <div class="row gx-lg-5">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="owl-carousel owl-theme projectslider">
                    <div class="item">
                        <div class="single-project-item">
                            <div class="project-img">
                                <img src="{{ asset('frontend/assets/images/projects/webp/1.webp') }}" class="img-fluid">
                            </div>
                            <div class="project-content">
                                <a href="#">
                                    <h5>JNPA - Swastik Infra-Logic (India) Private Limited</h5>
                                </a>
                                <p>Earth Filling in area between Rail line and NH-348A from Dastan-Phata to Junction
                                    of Nh-348A and Port Road at JN port-Part A & Part B</p>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="single-project-item">
                            <div class="project-img">
                                <img src="{{ asset('frontend/assets/images/projects/webp/2.webp') }}" class="img-fluid">
                            </div>
                            <div class="project-content">
                                <a href="#">
                                    <h5>Persipina Developers Pvt Ltd</h5>
                                </a>
                                <p>Earthwork (Plot 'R' Region)</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-project-item">
                            <div class="project-img">
                                <img src="{{ asset('frontend/assets/images/projects/webp/3.webp') }}" class="img-fluid">
                            </div>
                            <div class="project-content">
                                <a href="#">
                                    <h5>CIDCO LTD </h5>
                                </a>
                                <p>Area levelling by earth filling of strip of land en-marked for Dormitory in Sect
                                    - 02, Dronagiri Node, Navi Mumbai</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-project-item">
                            <div class="project-img">
                                <img src="{{ asset('frontend/assets/images/projects/webp/4.webp') }}" class="img-fluid">
                            </div>
                            <div class="project-content">
                                <a href="#">
                                    <h5>The Mumbai Metropolitan Region Iron & Steel Market Committee</h5>
                                </a>
                                <p>Construction of Cement Concrete Road, Strom Water Drain & Street lighting on
                                    service road no 'D' in the MMRISMC, Market Yard at Kalamboli</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-project-item">
                            <div class="project-img">
                                <img src="{{ asset('frontend/assets/images/projects/webp/5.webp') }}" class="img-fluid">
                            </div>
                            <div class="project-content">
                                <a href="#">
                                    <h5>Bridge and Roof Co. (India) Ltd.,</h5>
                                </a>
                                <p>Generl Civil Worsk including borrow Earth filling in Connetion with Civil Works
                                    for Warehouse in ICD, Taloja, Maharashtra on Sub Contract Basis</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-project-item">
                            <div class="project-img">
                                <img src="{{ asset('frontend/assets/images/projects/webp/6.webp') }}" class="img-fluid">
                            </div>
                            <div class="project-content">
                                <a href="#">
                                    <h5>JNPA - Niraj Cement Structurals Ltd </h5>
                                </a>
                                <p>Upgradation of roads and drainage system outside custom bound area in J N Port,
                                    Navi Mumbai through an EPC on back to back basis.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

{{-- Clients Section Start --}}
<div class="clients-section">
    <div class="container">
        <div class="clients-wrap">
            <div class="heading text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2>Our Clientele</h2>
            </div>
            <div class="row gx-lg-5">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <h6><span>Infra </span></h6>
                    <div class="owl-carousel owl-theme clientsliderone">
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/clients/webp/1.webp') }}" class="img-fluid" alt="client logo">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/clients/webp/2.webp') }}" class="img-fluid" alt="client logo">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/clients/webp/3.webp') }}" class="img-fluid" alt="client logo">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/clients/webp/4.webp') }}" class="img-fluid" alt="client logo">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/clients/webp/1.webp') }}" class="img-fluid" alt="client logo">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/clients/webp/2.webp') }}" class="img-fluid" alt="client logo">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/clients/webp/3.webp') }}" class="img-fluid" alt="client logo">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/clients/webp/4.webp') }}" class="img-fluid" alt="client logo">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <h6><span>RMC</span></h6>
                    <div class="owl-carousel owl-theme clientslidertwo">
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/clients/webp/5.webp') }}" class="img-fluid" alt="client logo">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/clients/webp/6.webp') }}" class="img-fluid" alt="client logo">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/clients/webp/7.webp') }}" class="img-fluid" alt="client logo">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/clients/webp/8.webp') }}" class="img-fluid" alt="client logo">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/clients/webp/5.webp') }}" class="img-fluid" alt="client logo">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/clients/webp/6.webp') }}" class="img-fluid" alt="client logo">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/clients/webp/7.webp') }}" class="img-fluid" alt="client logo">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/clients/webp/8.webp') }}" class="img-fluid" alt="client logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
@endpush
