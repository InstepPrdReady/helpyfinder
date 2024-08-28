@extends('themes.helpyfinder.layouts.front')

@section('title') {{$homesetting->meta_title}} @endsection
@section('meta') {{$homesetting->meta_description}} @endsection


@section('content')


<!-- Home-area start-->
<section class="hero-banner hero-banner-4">
        <div class="container">
            <div class="row align-items-center gx-xl-5">
                <div class="col-lg-6">
                    <div class="banner-content mb-40">
                        <h1 class="title mb-30" data-aos="fade-up" data-aos-delay="100">Empower Your Safety: Connect,
                            Protect, and Support</h1>
                        <p class="text" data-aos="fade-up" data-aos-delay="100">Bringing Communities Together for
                            Instant Emergency Assistance, Family Safety, and More - Anytime, Anywhere.
                        </p>
                        <div class="cta-btn mt-40 btn-groups" data-aos="fade-up" data-aos-delay="200">
                            <a href="https://apps.apple.com/us/app/helpyfinder/id1565616389"
                                class="btn btn-img radius-md" title="App Store" target="_blank">
                                <img class="lazyload blur-up" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                    data-src="{{ asset('themes/helpyfinder/assets/images/app-store.png') }}" alt="App Store">
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=com.helpyfinder"
                                class="btn btn-img radius-md" title="Play Store" target="_blank">
                                <img class="lazyload blur-up" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                    data-src="{{ asset('themes/helpyfinder/assets/images/play-store.png') }}" alt="App Store">
                            </a>
                        </div>
                        <div class="clients-avatar mt-40" data-aos="fade-up" data-aos-delay="250">
                            <div class="client-img">
                                <img class="lazyload blur-up" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                    data-src="{{ asset('themes/helpyfinder/assets/images/avatar-1.jpg') }}" alt="Client Image">
                                <img class="lazyload blur-up" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                    data-src="{{ asset('themes/helpyfinder/assets/images/avatar-2.jpg') }}" alt="Client Image">
                                <img class="lazyload blur-up" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                    data-src="{{ asset('themes/helpyfinder/assets/images/avatar-3.jpg') }}" alt="Client Image">
                                <img class="lazyload blur-up" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                    data-src="{{ asset('themes/helpyfinder/assets/images/avatar-4.jpg') }}" alt="Client Image">
                                <span>+10</span>
                            </div>
                            <span>500+ User download our app</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="banner-image mb-40">
                        <img class="lazyload blur-up" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                            data-src="{{ asset('themes/helpyfinder/assets/images/banner/hero-banner-3.png') }}" alt="Banner Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home-area end -->

    <!-- Work-area start -->
    <section class="work-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title title-center mb-20" data-aos="fade-up">
                        <h2 class="title mb-15">How HelpyFinder App Works</h2>
                        <p class="text">
                            HelpyFinder connects communities, provides emergency assistance, and fosters support through
                            real-time alerts and service coordination.
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3 item mt-30" data-aos="fade-up">
                            <div class="card border text-center radius-md pb-10">
                                <div class="card-icon mx-auto">
                                    <!-- <i class="flaticon-downloads"></i> -->
                                    <!-- <i class="fi fi-rr-download"></i> -->
                                    <i class="fi fi-rr-cloud-download-alt"></i>
                                </div>
                                <div class="card-content px-2 ptb-30">
                                    <h4>Download App</h4>
                                    <p class="card-text lh-1">Lorem ipsum Dummy</p>
                                </div>
                                <span class="count">01</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 item mt-30" data-aos="fade-up">
                            <div class="card border text-center radius-md pb-10">
                                <div class="card-icon mx-auto">
                                    <!-- <i class="flaticon-app-installation"></i> -->
                                    <!-- <i class="fi fi-br-apps"></i> -->
                                    <i class="fi fi-rr-apps-add"></i>
                                </div>
                                <div class="card-content px-2 ptb-30">
                                    <h4>Install App</h4>
                                    <p class="card-text lh-1">Lorem ipsum Dummy</p>
                                </div>
                                <span class="count">02</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 item mt-30" data-aos="fade-up">
                            <div class="card border text-center radius-md pb-10">
                                <div class="card-icon mx-auto">
                                    <!-- <i class="flaticon-add-user"></i> -->
                                    <!-- <i class="fi fi-br-portrait"></i> -->
                                    <i class="fi fi-rr-user-pen"></i>
                                </div>
                                <div class="card-content px-2 ptb-30">
                                    <h4>Create Account</h4>
                                    <p class="card-text lh-1">Lorem ipsum Dummy</p>
                                </div>
                                <span class="count">03</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 item mt-30" data-aos="fade-up">
                            <div class="card border text-center radius-md pb-10">
                                <div class="card-icon mx-auto">
                                    <!-- <i class="flaticon-version"></i> -->
                                    <!-- <i class="fi fi-br-headset"></i> -->
                                    <i class="fi fi-rr-user-headset"></i>
                                </div>
                                <div class="card-content px-2 ptb-30">
                                    <h4>Complate KYC</h4>
                                    <p class="card-text lh-1">Lorem ipsum Dummy</p>
                                </div>
                                <span class="count">04</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-4 item mt-30" data-aos="fade-up">
                            <div class="card border text-center radius-md pb-10">
                                <div class="card-icon mx-auto">
                                    <!-- <i class="flaticon-downloads"></i> -->
                                    <!-- <i class="fi fi-br-settings-sliders"></i> -->
                                    <i class="fi fi-rr-settings-sliders"></i>
                                </div>
                                <div class="card-content px-2 ptb-30">
                                    <h4>Give App Permissions</h4>
                                    <p class="card-text lh-1">Lorem ipsum Dummy</p>
                                </div>
                                <span class="count">05</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 item mt-30" data-aos="fade-up">
                            <div class="card border text-center radius-md pb-10">
                                <div class="card-icon mx-auto">
                                    <!-- <i class="flaticon-app-installation"></i> -->
                                    <!-- <i class="fi fi-br-family"></i> -->
                                    <i class="fi fi-rr-people-roof"></i>
                                </div>
                                <div class="card-content px-2 ptb-30">
                                    <h4>Add Family Member Details</h4>
                                    <p class="card-text lh-1">Lorem ipsum Dummy</p>
                                </div>
                                <span class="count">06</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 item mt-30" data-aos="fade-up">
                            <div class="card border text-center radius-md pb-10">
                                <div class="card-icon mx-auto">
                                    <!-- <i class="flaticon-add-user"></i> -->
                                    <!-- <i class="fi fi-br-shield-check"></i> -->
                                    <i class="fi fi-rr-handshake-trust"></i>
                                </div>
                                <div class="card-content px-2 ptb-30">
                                    <h4>You are secure now</h4>
                                    <p class="card-text lh-1">Lorem ipsum Dummy</p>
                                </div>
                                <span class="count">07</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Work-area end -->

    <!-- Choose-area start -->
    <section class="choose-area pt-100">
        <div class="container">
            <div class="row align-items-center gx-xl-5">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="image mb-40">
                        <img class="lazyload blur-up radius-md" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                            data-src="{{ asset('themes/helpyfinder/assets/images/choose-4.png') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="content-title mb-40">
                        <h2 class="title mb-20">
                            NearBy Help
                        </h2>
                        <div class="content-text">
                            <p>
                                <strong>Quick Help from Community:</strong> Get fast help from people nearby when you need it.
                            </p>
                            <p>
                                <strong>Emergency Button:</strong>  Press a button to tell people and emergency helpers where you are quickly.
                            </p>
                            <p>
                                <strong>Share Where You Are:</strong>   Let your emergency contacts know your exact place with one tap, and see who is coming to help.
                            </p>
                            
                        </div>
                        <div class="d-flex align-items-center flex-wrap gap-25 mt-40" data-aos="fade-up">
                            <a href="login.html" class="btn btn-lg btn-primary bg-gradient rounded-pill"
                                title="Download App" target="_self">Download App
                            </a>
                            <a href="about.html" class="btn-text icon-end" target="_self" title="Link">Know More <i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Choose-area end -->

    <!-- About-area start -->
    <section class="about-area about-3 ptb-60">
        <div class="container">
            <div class="row align-items-center gx-xl-5">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="image mb-40">
                        <img class="lazyload blur-up radius-md" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                            data-src="{{ asset('themes/helpyfinder/assets/images/about-4.png') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-first" data-aos="fade-up">
                    <div class="content-title mb-40">
                        <h2 class="title mb-20">
                            Family Help
                        </h2>
                        <div class="content-text">
                            <p>
                                <strong>Real-Time Location Sharing:</strong> Allows family members to share and view each other's locations in real time.
                            </p>
                            <p>
                                <strong>Emergency Check-Ins:</strong> Enables quick safety confirmations with a simple tap during emergencies.
                            </p>
                            <p>
                                <strong>Safe Zone Alerts:</strong> Notifies when family members enter or leave designated safe zones.
                            </p>
                        </div>
                        <div class="info-list mt-40">
                            <div class="row">
                                <div class="col-12 item">
                                    <div class="card mb-30">
                                        <div class="card-icon rounded-pill">
                                            <i class="fal fa-chart-pie"></i>
                                        </div>
                                        <div class="card-content">
                                            <h6 class="card-title mb-2">Data Analysis Report</h6>
                                            <p class="card-text">Maintain app data with time</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 item">
                                    <div class="card mb-30">
                                        <div class="card-icon rounded-pill">
                                            <i class="fal fa-chart-bar"></i>
                                        </div>
                                        <div class="card-content">
                                            <h6 class="card-title mb-2">Growth Report Dashboard</h6>
                                            <p class="card-text">Daily growth report analysis</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-groups gap-25 mt-20" data-aos="fade-up">
                            <a href="about.html" class="btn btn-lg btn-primary bg-gradient rounded-pill"
                                title="Download App" target="_self">Download App
                            </a>
                            <a href="https://www.youtube.com/watch?v=QSwvg9Rv2EI"
                                class="video-btn video-btn-text video-btn-sm youtube-popup" target="_self"
                                title="Show Video">
                                <i class="fas fa-play"></i>
                                <span>Video Tutorial</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-area end -->

    <!-- Screenshot-area start -->
    <section class="screenshot-area pb-100">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-12">
                    <div class="section-title title-center mb-50" data-aos="fade-up">
                        <h2 class="title">Checkout HelpyFinder Application Screenshot</h2>
                    </div>
                </div>
                <div class="col-12" data-aos="fade-up">
                    <div class="swiper screenshot-slider" id="screenshot-slider-4" data-slides-per-view="5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide radius-lg">
                                <img class="lazyload" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                    data-src="{{ asset('themes/helpyfinder/assets/images/screenshot/screenshot-11.png') }}" alt="Image">
                            </div>
                            <div class="swiper-slide radius-lg">
                                <img class="lazyload" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                    data-src="{{ asset('themes/helpyfinder/assets/images/screenshot/screenshot-12.png') }}" alt="Image">
                            </div>
                            <div class="swiper-slide radius-lg">
                                <img class="lazyload" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                    data-src="{{ asset('themes/helpyfinder/assets/images/screenshot/screenshot-13.png') }}" alt="Image">
                            </div>
                            <div class="swiper-slide radius-lg">
                                <img class="lazyload" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                    data-src="{{ asset('themes/helpyfinder/assets/images/screenshot/screenshot-14.png') }}" alt="Image">
                            </div>
                            <div class="swiper-slide radius-lg">
                                <img class="lazyload" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                    data-src="{{ asset('themes/helpyfinder/assets/images/screenshot/screenshot-15.png') }}" alt="Image">
                            </div>
                            <div class="swiper-slide radius-lg">
                                <img class="lazyload" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                    data-src="{{ asset('themes/helpyfinder/assets/images/screenshot/screenshot-16.png') }}" alt="Image">
                            </div>
                            <div class="swiper-slide radius-lg">
                                <img class="lazyload" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                    data-src="{{ asset('themes/helpyfinder/assets/images/screenshot/screenshot-17.png') }}" alt="Image">
                            </div>
                            <div class="swiper-slide radius-lg">
                                <img class="lazyload" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                    data-src="{{ asset('themes/helpyfinder/assets/images/screenshot/screenshot-18.png') }}" alt="Image">
                            </div>
                            <div class="swiper-slide radius-lg">
                                <img class="lazyload" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                    data-src="{{ asset('themes/helpyfinder/assets/images/screenshot/screenshot-19.png') }}" alt="Image">
                            </div>
                        </div>
                        <!-- Slider pagination's -->
                        <div class="swiper-pagination position-static mt-40" id="screenshot-slider-4-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Screenshot-area end -->

    <!-- Testimonial-area start -->
    <section class="testimonial-area ptb-100 bg-cover bg-img" data-bg-image="{{ asset('themes/helpyfinder/assets/images/testimonial-bg-2.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title title-center mb-50" data-aos="fade-up">
                        <h2 class="title mt-0">Who’s Using Our HelpyFinder Mobile App</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row justify-content-center" data-aos="fade-up">
                        <div class="col-lg-6">
                            <div class="swiper" id="testimonial-slider-2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide pb-25">
                                        <div class="slider-item text-center">
                                            <div class="quote">
                                                <p class="text font-lg">
                                                    "Family Help module brought immediate relief!"
                                                </p>
                                            </div>
                                            <div class="client-info mt-20">
                                                <h6 class="name mb-1">John Smith, New York</h6>
                                                <span class="designation font-sm">IT Expert</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide pb-25">
                                        <div class="slider-item text-center">
                                            <div class="quote">
                                                <p class="text font-lg">
                                                    "Family Help module brought immediate relief!"
                                                </p>
                                            </div>
                                            <div class="client-info mt-20">
                                                <h6 class="name mb-1">John Smith, New York</h6>
                                                <span class="designation font-sm">IT Expert</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide pb-25">
                                        <div class="slider-item text-center">
                                            <div class="quote">
                                                <p class="text font-lg">
                                                    "Family Help module brought immediate relief!"
                                                </p>
                                            </div>
                                            <div class="client-info mt-20">
                                                <h6 class="name mb-1">John Smith, New York</h6>
                                                <span class="designation font-sm">IT Expert</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination position-static" id="testimonial-slider-2-pagination">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Testimonial-area end -->

    <!-- Blog-area start -->
    <section class="blog-area blog-3 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <div class="section-title title-inline mb-50" data-aos="fade-up">
                            <h2 class="title">Read Our Blog Post</h2>
                            <button class="btn btn-lg btn-primary bg-gradient rounded-pill" type="button"
                                aria-label="Read Now">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6 col-lg-4" data-aos="fade-up">
                            <article class="card mb-30">
                                <div class="card-img">
                                    <a href="blog-details.html" target="_self" title="Link"
                                        class="lazy-container ratio ratio-5-4">
                                        <img class="lazyload" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                            data-src="{{ asset('themes/helpyfinder/assets/images/blog/blog-13.jpg') }}" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="card-content radius-md p-25 text-center radius-md">
                                    <h5 class="card-title lc-2 mb-15">
                                        <a href="blog-details.html" target="_self" title="Link">
                                            Step by Step Guide to HelpyFinder Application
                                        </a>
                                    </h5>
                                    <a href="blogs.html" class="btn-text color-primary" target="_self"
                                        title="Read More">Read More</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up">
                            <article class="card mb-30">
                                <div class="card-img">
                                    <a href="blog-details.html" target="_self" title="Link"
                                        class="lazy-container ratio ratio-5-4">
                                        <img class="lazyload" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                            data-src="{{ asset('themes/helpyfinder/assets/images/blog/blog-14.jpg') }}" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="card-content radius-md p-25 text-center radius-md">
                                    <h5 class="card-title lc-2 mb-15">
                                        <a href="blog-details.html" target="_self" title="Link">
                                            Never Miss a Single Notification
                                        </a>
                                    </h5>
                                    <a href="blogs.html" class="btn-text color-primary" target="_self"
                                        title="Read More">Read More</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up">
                            <article class="card mb-30">
                                <div class="card-img">
                                    <a href="blog-details.html" target="_self" title="Link"
                                        class="lazy-container ratio ratio-5-4">
                                        <img class="lazyload" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                            data-src="{{ asset('themes/helpyfinder/assets/images/blog/blog-15.jpg') }}" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="card-content radius-md p-25 text-center radius-md">
                                    <h5 class="card-title lc-2 mb-15">
                                        <a href="blog-details.html" target="_self" title="Link">
                                            HelpyFinder Application Allow to Send Message
                                        </a>
                                    </h5>
                                    <a href="blogs.html" class="btn-text color-primary" target="_self"
                                        title="Read More">Read More</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog-area end -->

    <!-- Newsletter area start -->
    <section class="newsletter-area newsletter-3 pt-70">
        <div class="newsletter-inner position-relative z-1 ptb-30 px-60">
            <div class="overlay bg-gradient opacity-1"></div>
            <div class="container">
                <div class="row align-items-center" data-aos="fade-up">
                    <div class="col-lg-6">
                        <div class="content">
                            <h2 class="color-white mb-30">Download HelpyFinder Mobile App for Free</h2>
                            <div class="content-text w-75 w-sm-100">
                                <p class="text color-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet magnam deleniti minima odio quidem esse at, veniam veritatis.</p>
                            </div>
                            <div class=" btn-groups mt-30">
                                <a href="error-404.html" class="btn btn-img radius-md" title="App Store"
                                    target="_blank">
                                    <img class="lazyload blur-up" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                        data-src="{{ asset('themes/helpyfinder/assets/images/app-store.png') }}" alt="App Store">
                                </a>
                                <a href="error-404.html" class="btn btn-img radius-md" title="Play Store"
                                    target="_blank">
                                    <img class="lazyload blur-up" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                        data-src="{{ asset('themes/helpyfinder/assets/images/play-store.png') }}" alt="App Store">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image d-none d-lg-block">
                            <img class="lazyload blur-up" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                data-src="{{ asset('themes/helpyfinder/assets/images/newsletter-4.png') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter area end -->

@endsection

