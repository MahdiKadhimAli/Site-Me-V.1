@extends('theme.master')
@section('title', 'Home')
@section('content')
    <section class="py-3 ">
        <!-- Page Content Goes Here -->

        <div class="container" data-scroll-section>

            <!-- Hero-->
            <div class="mb-lg-10">
                <p class="subtitle-sm" data-scroll data-scroll-speed="2" data-scroll-position="top">Hello there!</p>
                <h1 class="display-1 mb-4" data-scroll data-scroll-speed="4" data-scroll-position="top">I am Mahdi
                    Kadhim</h1>
                <p data-scroll data-scroll-speed="6" data-scroll-position="top" class="lead typed-elem">
                    Iraq-based freelance
                    <span class="fw-bold text-highlight"
                        data-typed='{"backSpeed": 50,"strings": ["Graphic Designer", "Brand Designer", "web designer", "UI designer"]}'></span><span
                        class="d-block">Specializing in graphic design using Photoshop, Illustrator, and
                        Figma.</span>
                </p>
            </div> <!-- /Hero-->

            <!-- Latest Projects Slideshow Top-->
            <div>
                <h2 class="display-6 border-bottom pb-5 mb-5 fade-in-up" data-scroll data-scroll-position="bottom">
                    Selected
                    Work</h2>
                <div class="position-relative">
                    <div class="swiper-container swiper-linked-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide cursor-pointer">
                                <picture>
                                    <img class="img-fluid" src="{{ asset('assets') }}/images/project-listing-1.jpg"
                                        alt="">
                                </picture>
                            </div>
                            <div class="swiper-slide cursor-pointer">
                                <picture>
                                    <img class="img-fluid" src="{{ asset('assets') }}/images/project-listing-2.jpg"
                                        alt="">
                                </picture>
                            </div>
                            <div class="swiper-slide cursor-pointer">
                                <picture>
                                    <img class="img-fluid" src="{{ asset('assets') }}/images/project-listing-3.jpg"
                                        alt="">
                                </picture>
                            </div>
                            <div class="swiper-slide cursor-pointer">
                                <picture>
                                    <img class="img-fluid" src="{{ asset('assets') }}/images/project-listing-4.jpg"
                                        alt="">
                                </picture>
                            </div>
                            <div class="swiper-slide cursor-pointer">
                                <picture>
                                    <img class="img-fluid" src="{{ asset('assets') }}/images/project-listing-5.jpg"
                                        alt="">
                                </picture>
                            </div>
                            <div class="swiper-slide cursor-pointer">
                                <picture>
                                    <img class="img-fluid" src="{{ asset('assets') }}/images/project-listing-6.jpg"
                                        alt="">
                                </picture>
                            </div>
                            <div class="swiper-slide cursor-pointer">
                                <picture>
                                    <img class="img-fluid" src="{{ asset('assets') }}/images/project-listing-7.jpg"
                                        alt="">
                                </picture>
                            </div>
                            <div class="swiper-slide cursor-pointer">
                                <picture>
                                    <img class="img-fluid" src="{{ asset('assets') }}/images/project-listing-8.jpg"
                                        alt="">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-prev swiper-btn"><i class="ri-arrow-left-line"></i></div>
                    <div class="swiper-next swiper-btn"><i class="ri-arrow-right-line"></i></div>
                </div>
            </div>
            <!-- / Latest Projects Slideshow Top-->

            <!-- Latest Projects Slideshow Bottom-->
            <div class="mt-3 mb-5">
                <div class="swiper-container swiper-linked-bottom">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row gx-4 align-items-center">

                                <!-- Slide Image-->
                                <div class="col-12 col-md-6" data-swiper-parallax-x="-100">
                                    <picture>
                                        <img class="img-fluid" src="{{ asset('assets') }}/images/project-listing-1.jpg"
                                            alt="">
                                    </picture>
                                </div>
                                <!-- / Slide Image -->

                                <!-- Slide Text-->
                                <div class="col-12 col-md-6">
                                    <p class="subtitle-xs mb-0 mt-4 mt-md-0" data-swiper-parallax-x="-100"><span
                                            class='me-2'>Ecommerce</span> &middot; <span class='ms-2'>Shopify</span>
                                    </p>
                                    <p class="fw-bolder lead mb-3 mt-2" data-swiper-parallax-x="-150">Shopify
                                        Fashion Store</p>
                                    <p class="small text-muted mb-2" data-swiper-parallax-x="-200">Design and
                                        development of a custom
                                        Shopify Ecommerce platform for a fashion retailer.</p>
                                    <div class="mt-3" data-swiper-parallax-y="-15">
                                        <a class="link-body" href="./work-single.html">View Project</a>
                                    </div>
                                </div>
                                <!-- / Slide Text-->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row gx-4 align-items-center">

                                <!-- Slide Image-->
                                <div class="col-12 col-md-6" data-swiper-parallax-x="-100">
                                    <picture>
                                        <img class="img-fluid" src="{{ asset('assets') }}/images/project-listing-2.jpg"
                                            alt="">
                                    </picture>
                                </div>
                                <!-- / Slide Image -->

                                <!-- Slide Text-->
                                <div class="col-12 col-md-6">
                                    <p class="subtitle-xs mb-0 mt-4 mt-md-0" data-swiper-parallax-x="-100"><span
                                            class='me-2'>Ecommerce</span> &middot; <span class='ms-2'>Magento</span>
                                    </p>
                                    <p class="fw-bolder lead mb-3 mt-2" data-swiper-parallax-x="-150">Magento
                                        Furniture Store</p>
                                    <p class="small text-muted mb-2" data-swiper-parallax-x="-200">Design and
                                        development of a custom
                                        Magento Ecommerce platform for a furniture retailer.</p>
                                    <div class="mt-3" data-swiper-parallax-y="-15">
                                        <a class="link-body" href="./work-single.html">View Project</a>
                                    </div>
                                </div>
                                <!-- / Slide Text-->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row gx-4 align-items-center">

                                <!-- Slide Image-->
                                <div class="col-12 col-md-6" data-swiper-parallax-x="-100">
                                    <picture>
                                        <img class="img-fluid" src="{{ asset('assets') }}/images/project-listing-3.jpg"
                                            alt="">
                                    </picture>
                                </div>
                                <!-- / Slide Image -->

                                <!-- Slide Text-->
                                <div class="col-12 col-md-6">
                                    <p class="subtitle-xs mb-0 mt-4 mt-md-0" data-swiper-parallax-x="-100"><span
                                            class='me-2'>Ecommerce</span> &middot; <span class='ms-2'>Wordpress</span>
                                    </p>
                                    <p class="fw-bolder lead mb-3 mt-2" data-swiper-parallax-x="-150">Wordpress
                                        Grocery Store</p>
                                    <p class="small text-muted mb-2" data-swiper-parallax-x="-200">Design and
                                        development of a
                                        WooCommerce Ecommerce platform for a grocery platform.</p>
                                    <div class="mt-3" data-swiper-parallax-y="-15">
                                        <a class="link-body" href="./work-single.html">View Project</a>
                                    </div>
                                </div>
                                <!-- / Slide Text-->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row gx-4 align-items-center">

                                <!-- Slide Image-->
                                <div class="col-12 col-md-6" data-swiper-parallax-x="-100">
                                    <picture>
                                        <img class="img-fluid" src="{{ asset('assets') }}/images/project-listing-4.jpg"
                                            alt="">
                                    </picture>
                                </div>
                                <!-- / Slide Image -->

                                <!-- Slide Text-->
                                <div class="col-12 col-md-6">
                                    <p class="subtitle-xs mb-0 mt-4 mt-md-0" data-swiper-parallax-x="-100"><span
                                            class='me-2'>Mobile</span> &middot; <span class='ms-2'>React
                                            Native</span></p>
                                    <p class="fw-bolder lead mb-3 mt-2" data-swiper-parallax-x="-150">Messaging
                                        App</p>
                                    <p class="small text-muted mb-2" data-swiper-parallax-x="-200">Creation of a
                                        custom React Native
                                        messaging app for a messaging SAAS startup.</p>
                                    <div class="mt-3" data-swiper-parallax-y="-15">
                                        <a class="link-body" href="./work-single.html">View Project</a>
                                    </div>
                                </div>
                                <!-- / Slide Text-->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row gx-4 align-items-center">

                                <!-- Slide Image-->
                                <div class="col-12 col-md-6" data-swiper-parallax-x="-100">
                                    <picture>
                                        <img class="img-fluid" src="{{ asset('assets') }}/images/project-listing-5.jpg"
                                            alt="">
                                    </picture>
                                </div>
                                <!-- / Slide Image -->

                                <!-- Slide Text-->
                                <div class="col-12 col-md-6">
                                    <p class="subtitle-xs mb-0 mt-4 mt-md-0" data-swiper-parallax-x="-100"><span
                                            class='me-2'>Ecommerce</span> &middot; <span class='ms-2'>Shopify</span>
                                    </p>
                                    <p class="fw-bolder lead mb-3 mt-2" data-swiper-parallax-x="-150">Shopify
                                        Online Store</p>
                                    <p class="small text-muted mb-2" data-swiper-parallax-x="-200">Design and
                                        development of a custom
                                        Shopify Ecommerce platform for a car retailer.</p>
                                    <div class="mt-3" data-swiper-parallax-y="-15">
                                        <a class="link-body" href="./work-single.html">View Project</a>
                                    </div>
                                </div>
                                <!-- / Slide Text-->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row gx-4 align-items-center">

                                <!-- Slide Image-->
                                <div class="col-12 col-md-6" data-swiper-parallax-x="-100">
                                    <picture>
                                        <img class="img-fluid" src="{{ asset('assets') }}/images/project-listing-6.jpg"
                                            alt="">
                                    </picture>
                                </div>
                                <!-- / Slide Image -->

                                <!-- Slide Text-->
                                <div class="col-12 col-md-6">
                                    <p class="subtitle-xs mb-0 mt-4 mt-md-0" data-swiper-parallax-x="-100"><span
                                            class='me-2'>Ecommerce</span> &middot; <span class='ms-2'>Magento</span>
                                    </p>
                                    <p class="fw-bolder lead mb-3 mt-2" data-swiper-parallax-x="-150">Magento
                                        Online Store</p>
                                    <p class="small text-muted mb-2" data-swiper-parallax-x="-200">Design and
                                        development of a custom
                                        Magento Ecommerce platform for a pet food retailer.</p>
                                    <div class="mt-3" data-swiper-parallax-y="-15">
                                        <a class="link-body" href="./work-single.html">View Project</a>
                                    </div>
                                </div>
                                <!-- / Slide Text-->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row gx-4 align-items-center">

                                <!-- Slide Image-->
                                <div class="col-12 col-md-6" data-swiper-parallax-x="-100">
                                    <picture>
                                        <img class="img-fluid" src="{{ asset('assets') }}/images/project-listing-7.jpg"
                                            alt="">
                                    </picture>
                                </div>
                                <!-- / Slide Image -->

                                <!-- Slide Text-->
                                <div class="col-12 col-md-6">
                                    <p class="subtitle-xs mb-0 mt-4 mt-md-0" data-swiper-parallax-x="-100"><span
                                            class='me-2'>Ecommerce</span> &middot; <span class='ms-2'>Wordpress</span>
                                    </p>
                                    <p class="fw-bolder lead mb-3 mt-2" data-swiper-parallax-x="-150">Web
                                        Application</p>
                                    <p class="small text-muted mb-2" data-swiper-parallax-x="-200">Design and
                                        development of a custom
                                        WooCommerce Ecommerce platform for a furniture retailer.</p>
                                    <div class="mt-3" data-swiper-parallax-y="-15">
                                        <a class="link-body" href="./work-single.html">View Project</a>
                                    </div>
                                </div>
                                <!-- / Slide Text-->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row gx-4 align-items-center">

                                <!-- Slide Image-->
                                <div class="col-12 col-md-6" data-swiper-parallax-x="-100">
                                    <picture>
                                        <img class="img-fluid" src="{{ asset('assets') }}/images/project-listing-8.jpg"
                                            alt="">
                                    </picture>
                                </div>
                                <!-- / Slide Image -->

                                <!-- Slide Text-->
                                <div class="col-12 col-md-6">
                                    <p class="subtitle-xs mb-0 mt-4 mt-md-0" data-swiper-parallax-x="-100"><span
                                            class='me-2'>Ecommerce</span> &middot; <span class='ms-2'>Shopify</span>
                                    </p>
                                    <p class="fw-bolder lead mb-3 mt-2" data-swiper-parallax-x="-150">Ecommerce
                                        Marketing</p>
                                    <p class="small text-muted mb-2" data-swiper-parallax-x="-200">Design and
                                        development of a custom
                                        Shopify Ecommerce platform for a fashion retailer.</p>
                                    <div class="mt-3" data-swiper-parallax-y="-15">
                                        <a class="link-body" href="./work-single.html">View Project</a>
                                    </div>
                                </div>
                                <!-- / Slide Text-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Latest Projects Slideshow Bottom-->

            <!-- Experience-->
            <div class="py-lg-6" data-scroll>
                <h2 class="display-6 border-bottom pb-5 mb-5 fade-in-up" data-scroll data-scroll-position="bottom">
                    Experience
                </h2> <!-- Single Experience-->
                <div class="row gx-2 mb-5 fade-in-up" data-scroll data-scroll-position="bottom">
                    <div class="col-12 col-lg-4">
                        <p class="fw-bolder mb-1">ITCT (It Coder Team)</p>
                        <span class="text-muted small">(2021 - 2023)
                        </span>
                    </div>
                    <div class="col-12 col-lg-8">
                        <p class="fw-bolder">Design Manager
                        </p>
                        <p class="text-muted fw-light fs-6">I joined the ITCT tech team in 2021, a team focused on
                            creating
                            educational courses in programming and technology.
                            During my time with them, I managed all aspects of design and oversaw the advertising
                            accounts. I was
                            responsible for
                            developing visual ads promoting online courses, as well as designing educational
                            materials. I left the
                            team in 2023
                            after contributing significantly to creating engaging visual content that attracted
                            audiences.</p>
                        <a class="link-body" href="https://www.instagram.com/itct_iq?igsh=ZGx3bzVhd3Zzd3Fk">View
                            account </a>
                    </div>
                </div>
                <!-- / Single Experience -->
                <!-- Single Experience-->
                <div class="row gx-2 mb-5 fade-in-up" data-scroll data-scroll-position="bottom">
                    <div class="col-12 col-lg-4">
                        <p class="fw-bolder mb-1">Alpha Medical Academy
                        </p>
                        <span class="text-muted small">(2023 - present)
                        </span>
                    </div>
                    <div class="col-12 col-lg-8">
                        <p class="fw-bolder">Design Manager
                        </p>
                        <p class="text-muted fw-light fs-6">In 2023, I joined Alpha Medical Academy as a Design
                            Manager. My role
                            included designing advertisements for workshops and
                            training courses, as well as writing the related ad copy. I also designed attendance
                            certificates, video
                            covers, and
                            edited workshop photos. This experience enhanced my skills in advertising design while
                            working with a
                            diverse medical
                            team.</p>
                        <a class="link-body"
                            href="https://www.instagram.com/alpha_medical_academy?igsh=MTR6aWR4ejI3OHBiZg==">View
                            account</a>
                    </div>
                </div>
                <!-- / Single Experience -->
                <!-- Single Experience-->
                <div class="row gx-2 mb-5 fade-in-up" data-scroll data-scroll-position="bottom">
                    <div class="col-12 col-lg-4">
                        <p class="fw-bolder mb-1">Freelance Projects
                        </p>
                        <span class="text-muted small">(2023 - present)</span>
                    </div>
                    <div class="col-12 col-lg-8">
                        <p class="fw-bolder">Freelance Designer
                        </p>
                        <p class="text-muted fw-light fs-6">During the same year, I worked as a freelance designer
                            for various
                            clients, including competitors of Alpha Medical
                            Academy. I delivered innovative design solutions for workshop and course advertisements,
                            helping these
                            companies stand
                            out in a competitive market.</p>
                    </div>
                </div>
                <!-- / Single Experience -->
                <!-- Single Experience-->
                <div class="row gx-2 mb-5 fade-in-up" data-scroll data-scroll-position="bottom">
                    <div class="col-12 col-lg-4">
                        <p class="fw-bolder mb-1">Creative Logos
                        </p>
                        <span class="text-muted small">(2024 - present)
                        </span>
                    </div>
                    <div class="col-12 col-lg-8">
                        <p class="fw-bolder">Logo Designer
                        </p>
                        <p class="text-muted fw-light fs-6">In 2024, I improved my logo design skills, creating a
                            collection of
                            creative logos for a variety of clients. This
                            experience allowed me to refine my ability to deliver unique designs that reflect the
                            client's brand
                            identity.</p>
                    </div>
                </div>
                <!-- / Single Experience -->
            </div> <!-- / Experience-->

        </div>

        <!-- Testimonials -->
        @include('theme.partial.testimonials')
        <!-- / Testimonials-->

        <!-- /Page Content -->
    </section>
@endsection
