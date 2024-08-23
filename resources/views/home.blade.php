@extends('layouts.front')

@section('title') {{$homesetting->meta_title}} @endsection
@section('meta') {{$homesetting->meta_description}} @endsection


@section('content')

<!-- Hero -->
<section class="overflow-hidden pt-5"
    style="background: radial-gradient(116.18% 118% at 50% 100%, rgba(99, 102, 241, 0.1) 0%, rgba(218, 70, 239, 0.05) 41.83%, rgba(241, 244, 253, 0.07) 82.52%);">
    <div class="container pt-3 pt-sm-4 pt-xl-5">
        <div class="row pt-md-2 pt-lg-5">
            <div class="col-md-5 d-flex flex-column mt-md-4 pt-5 pb-3 pb-sm-4 py-md-5">
                <h1 class="display-4 text-center text-md-start mb-4">Manage All Your Safety in One App</h1>
                <p class="fs-lg text-center text-md-start pb-2 pb-md-3 mb-4 mb-lg-5">Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Tempora sed perspiciatis voluptatum odio iusto odit, fuga modi itaque
                    earum aspernatur.</p>
                <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-md-start">
                    <a href="#" class="btn btn-dark btn-lg px-3 py-2 me-sm-3 me-lg-4 mb-3">
                        <img src="{{ asset('assets/img/market/appstore-light.svg') }}" class="light-mode-img" width="124"
                            alt="App Store">
                        <img src="{{ asset('assets/img/market/appstore-dark.svg') }}" class="dark-mode-img" width="124"
                            alt="App Store">
                    </a>
                    <a href="#" class="btn btn-dark btn-lg px-3 py-2 mb-3">
                        <img src="{{ asset('assets/img/market/googleplay-light.svg') }}" class="light-mode-img" width="139"
                            alt="Google Play">
                        <img src="{{ asset('assets/img/market/googleplay-dark.svg') }}" class="dark-mode-img" width="139"
                            alt="Google Play">
                    </a>
                </div>
                <div
                    class="position-relative d-inline-flex align-items-center justify-content-center justify-content-md-start mt-auto pt-3 pt-md-4 pb-xl-2">
                    <a href="#features" class="btn btn-icon btn-light bg-white stretched-link rounded-circle me-3"
                        data-scroll data-scroll-offset="120">
                        <i class="bx bx-chevron-down"></i>
                    </a>
                    <span class="fs-sm">Discover more</span>
                </div>
            </div>
            <div class="col-md-7 align-self-end">
                <div class="position-relative overflow-hidden mt-4 pb-3 pt-4 mx-auto me-md-0" style="max-width: 632px;">
                    <div class="ratio ratio-1x1"></div>
                    <img src="{{ asset('newimages/hero_image.png') }}" class="rellax position-absolute top-0 start-0 zindex-2"
                        data-rellax-speed="1.6" data-disable-parallax-down="md" alt="Phone">
                    <img src="{{ asset('newimages/hero_image1.png') }}" class="rellax position-absolute top-0 start-0"
                        data-rellax-speed="2.8" data-disable-parallax-down="md" alt="Phone">
                    <img src="{{ asset('newimages/hero_image3.png') }}" class="rellax position-absolute top-0 start-0"
                        data-rellax-speed="2.8" data-disable-parallax-down="md" alt="Phone">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Brands (carousel on screens < 1100px) -->
<section class="container py-5 mt-md-2 mt-lg-4">
    <div class="swiper pt-2 mx-n2" data-swiper-options='{
        "slidesPerView": 2,
        "pagination": {
        "el": ".swiper-pagination",
        "clickable": true
        },
        "breakpoints": {
        "500": {
            "slidesPerView": 3,
            "spaceBetween": 8
        },
        "650": {
            "slidesPerView": 4,
            "spaceBetween": 8
        },
        "900": {
            "slidesPerView": 5,
            "spaceBetween": 8
        },
        "1100": {
            "slidesPerView": 6,
            "spaceBetween": 8
        }
        }
    }'>
        <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide py-3">
                <a href="#" class="card card-body card-hover px-2 mx-2">
                    <img src="{{ asset('assets/img/brands/01.svg') }}" class="d-block mx-auto my-2" width="154" alt="Brand">
                </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
                <a href="#" class="card card-body card-hover px-2 mx-2">
                    <img src="{{ asset('assets/img/brands/02.svg') }}" class="d-block mx-auto my-2" width="154" alt="Brand">
                </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
                <a href="#" class="card card-body card-hover px-2 mx-2">
                    <img src="{{ asset('assets/img/brands/03.svg') }}" class="d-block mx-auto my-2" width="154" alt="Brand">
                </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
                <a href="#" class="card card-body card-hover px-2 mx-2">
                    <img src="{{ asset('assets/img/brands/04.svg') }}" class="d-block mx-auto my-2" width="154" alt="Brand">
                </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
                <a href="#" class="card card-body card-hover px-2 mx-2">
                    <img src="{{ asset('assets/img/brands/05.svg') }}" class="d-block mx-auto my-2" width="154" alt="Brand">
                </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
                <a href="#" class="card card-body card-hover px-2 mx-2">
                    <img src="{{ asset('assets/img/brands/06.svg') }}" class="d-block mx-auto my-2" width="154" alt="Brand">
                </a>
            </div>
        </div>

        <!-- Pagination (bullets) -->
        <div class="swiper-pagination position-relative pt-2 mt-4"></div>
    </div>
</section>


<!-- Features -->
<section id="features" class="container pt-lg-2 pt-xl-3 pb-3 pb-xl-5 mt-n2 mt-sm-0 mb-2 mb-md-4 mb-lg-5">
    <div class="row pb-xl-3">

        <!-- Parallax gfx -->
        <div class="col-lg-5 d-none d-lg-block">
            <div class="position-relative" style="max-width: 348px;">
                <img src="{{ asset('newimages/mobile_1.png') }}" alt="Phone">
                <div class="rellax position-absolute top-0" data-rellax-vertical-scroll-axis="x"
                    data-rellax-horizontal-speed="0.75" data-disable-parallax-down="lg"
                    style="max-width: 348px; right: -2.75rem;">
                    <img src="{{ asset('newimages/mobile_features.png') }}" alt="Card">
                </div>
            </div>
        </div>

        <!-- Feature list -->
        <div class="col-lg-7">
            <h2 class="h1 text-center text-md-start mb-4">App Features</h2>
            <p class="fs-lg text-muted text-center text-md-start mb-4 mb-xl-5">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Proin volutpat mollis egestas. Nam luctus facilisis ultrices. Pellentesque volutpat
                ligula est. Mattis fermentum, at nec lacus.</p>
            <div class="row row-cols-1 row-cols-sm-2 pt-2 pt-sm-3 pt-xl-2">

                <!-- Item -->
                <div class="col pb-2 pb-xl-0 mb-4 mb-xl-5">
                    <div class="d-flex align-items-start pe-xl-3">
                        <div class="d-table bg-secondary rounded-3 flex-shrink-0 p-3 mb-3">
                            <img src="{{ asset('assets/img/landing/app-showcase/features/payments.svg') }}" alt="Icon">
                        </div>
                        <div class="ps-4 ps-sm-3 ps-md-4">
                            <h3 class="h5 pb-1 mb-2">Easy Payments</h3>
                            <p class="mb-0">Id mollis consectetur congue egestas egestas suspendisse blandit justo.</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col pb-2 pb-xl-0 mb-4 mb-xl-5">
                    <div class="d-flex align-items-start ps-xl-3">
                        <div class="d-table bg-secondary rounded-3 flex-shrink-0 p-3 mb-3">
                            <img src="{{ asset('assets/img/landing/app-showcase/features/security.svg') }}" alt="Icon">
                        </div>
                        <div class="ps-4 ps-sm-3 ps-md-4">
                            <h3 class="h5 pb-1 mb-2">Data Security</h3>
                            <p class="mb-0">Augue pulvinar justo, fermentum fames aliquam accumsan vestibulum non.</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col pb-2 pb-xl-0 mb-4 mb-xl-5">
                    <div class="d-flex align-items-start pe-xl-3">
                        <div class="d-table bg-secondary rounded-3 flex-shrink-0 p-3 mb-3">
                            <img src="{{ asset('assets/img/landing/app-showcase/features/statistics.svg') }}" alt="Icon">
                        </div>
                        <div class="ps-4 ps-sm-3 ps-md-4">
                            <h3 class="h5 pb-1 mb-2">Cost Statistics</h3>
                            <p class="mb-0">Mattis urna ultricies non amet, purus in auctor non. Odio vulputate ac nibh.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col pb-2 pb-xl-0 mb-4 mb-xl-5">
                    <div class="d-flex align-items-start ps-xl-3">
                        <div class="d-table bg-secondary rounded-3 flex-shrink-0 p-3 mb-3">
                            <img src="{{ asset('assets/img/landing/app-showcase/features/support.svg') }}" alt="Icon">
                        </div>
                        <div class="ps-4 ps-sm-3 ps-md-4">
                            <h3 class="h5 pb-1 mb-2">Support 24/7</h3>
                            <p class="mb-0">A elementum, imperdiet enim, pretium etiam facilisi in aenean quam mauris.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col pb-2 pb-xl-0 mb-4 mb-xl-5">
                    <div class="d-flex align-items-start pe-xl-3">
                        <div class="d-table bg-secondary rounded-3 flex-shrink-0 p-3 mb-3">
                            <img src="{{ asset('assets/img/landing/app-showcase/features/cashback.svg') }}" alt="Icon">
                        </div>
                        <div class="ps-4 ps-sm-3 ps-md-4">
                            <h3 class="h5 pb-1 mb-2">Regular Cashback</h3>
                            <p class="mb-0">Sit facilisis dolor arcu, fermentum vestibulum arcu elementum imperdiet
                                eleifend.</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col pb-2 pb-xl-0 mb-4 mb-xl-5">
                    <div class="d-flex align-items-start ps-xl-3">
                        <div class="d-table bg-secondary rounded-3 flex-shrink-0 p-3 mb-3">
                            <img src="{{ asset('assets/img/landing/app-showcase/features/happy.svg') }}" alt="Icon">
                        </div>
                        <div class="ps-4 ps-sm-3 ps-md-4">
                            <h3 class="h5 pb-1 mb-2">Top Standards</h3>
                            <p class="mb-0">Faucibus cursus maecenas lorem cursus nibh. Sociis sit risus id. Sit
                                facilisis dolor arcu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- How it works (Slider) -->
<section class="position-relative bg-secondary py-5">
    <div class="container mt-3 pt-md-2 pt-lg-4 pb-2 pb-md-4 pb-lg-5">
        <h2 class="h1 text-center pb-2 pb-md-0 mb-4 mb-md-5">How Does It Work?</h2>
        <div class="position-relative mx-5">

            <!-- Slider prev/next buttons -->
            <button type="button" id="prev-screen"
                class="btn btn-prev btn-icon position-absolute top-50 start-0 ms-n5 translate-middle-y">
                <i class="bx bx-chevron-left"></i>
            </button>
            <button type="button" id="next-screen"
                class="btn btn-next btn-icon position-absolute top-50 end-0 me-n5 translate-middle-y">
                <i class="bx bx-chevron-right"></i>
            </button>

            <!-- Phone frame -->
            <div class="position-absolute top-0 start-50 translate-middle-x h-100 w-100 w-md-33 zindex-5">
                <div class="d-flex bg-repeat-0 bg-size-cover w-100 h-100 mx-auto"
                    style="max-width: 328px; background-image: url({{ asset('assets/img/landing/app-showcase/screens/phone-frame.png') }});">
                </div>
            </div>

            <!-- Phone screen -->
            <div class="position-absolute top-0 start-50 translate-middle-x h-100 w-100 w-md-33">
                <div class="d-flex bg-repeat-0 bg-size-cover w-100 h-100 mx-auto"
                    style="max-width: 328px; background-image: url({{ asset('assets/img/landing/app-showcase/screens/phone-screen.png') }});">
                </div>
            </div>

            <!-- Swiper slider -->
            <div class="swiper mobile-app-slider" data-swiper-options='{
            "slidesPerView": 1,
            "centeredSlides": true,
            "loop": true,
            "tabs": true,
            "pagination": {
            "el": "#swiper-progress",
            "type": "progressbar"
            },
            "navigation": {
            "prevEl": "#prev-screen",
            "nextEl": "#next-screen"
            },
            "breakpoints": {
            "768": { "slidesPerView": 3 }
            }
        }'>
                <div class="swiper-wrapper">

                    <!-- Item -->
                    <div class="swiper-slide" data-swiper-tab="#text-1">
                        <img src="{{ asset('newimages/slider_2.png') }}" class="d-block mx-auto" width="328" alt="Screen">
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide" data-swiper-tab="#text-2">
                        <img src="{{ asset('newimages/slider_3.png') }}" class="d-block mx-auto" width="328" alt="Screen">
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide" data-swiper-tab="#text-3">
                        <img src="{{ asset('newimages/slider_4.png') }}" class="d-block mx-auto" width="328" alt="Screen">
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide" data-swiper-tab="#text-4">
                        <img src="{{ asset('newimages/slider_5.png') }}" class="d-block mx-auto" width="328" alt="Screen">
                    </div>
                    <!-- Item -->
                    <div class="swiper-slide" data-swiper-tab="#text-4">
                        <img src="{{ asset('newimages/slider_1.png') }}" class="d-block mx-auto" width="328" alt="Screen">
                    </div>

                </div>
            </div>
        </div>

        <!-- Swiper tabs (Description text) -->
        <div class="row justify-content-center pt-4 mt-2 mt-md-3">
            <div class="swiper-tabs col-xl-6 col-lg-7 col-md-8 text-center">

                <!-- Text 1 -->
                <div id="text-1" class="swiper-tab active">
                    <h3 class="h4 pb-1 mb-2">Step 1. Advanced budget management</h3>
                    <p class="mb-0">Consequat ut cras nisl, enim purus in facilisi. Ipsum amet, lectus malesuada risus
                        sollicitudin accumsan. Id sem elit vel vel lectus risus senectus.</p>
                </div>

                <!-- Text 2 -->
                <div id="text-2" class="swiper-tab">
                    <h3 class="h4 pb-1 mb-2">Step 2. Latest transaction history</h3>
                    <p class="mb-0">Enim, et amet praesent pharetra. Mi non ante hendrerit amet sed. Arcu sociis
                        tristique quisque hac in consectetur condimentum.</p>
                </div>

                <!-- Text 3 -->
                <div id="text-3" class="swiper-tab">
                    <h3 class="h4 pb-1 mb-2">Step 3. Transfers to people from your contact list</h3>
                    <p class="mb-0">Proin volutpat mollis egestas. Nam luctus facilisis ultrices. Pellentesque volutpat
                        ligula est. Mattis fermentum, at nec lacus.</p>
                </div>

                <!-- Text 4 -->
                <div id="text-4" class="swiper-tab">
                    <h3 class="h4 pb-1 mb-2">Step 4. Card-to-card transfers</h3>
                    <p class="mb-0">A sed lorem felis, pulvinar pharetra. At tempus, vel sed faucibus amet sit elementum
                        sed erat. Id nunc blandit pharetra facilisis.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider progress -->
    <div id="swiper-progress" class="swiper-pagination bottom-0" style="top: auto;"></div>
</section>


<!-- Fetures -->
<section class="container pt-5 pb-2 pb-md-3 py-lg-5">
    <div class="row align-items-center my-3 py-md-3 py-lg-5">
        <div class="col-md-6 col-xl-5 offset-lg-1 offset-xl-2 order-md-2 mb-2 mb-md-0 pb-4 pb-md-0">
            <div class="position-relative mx-auto mx-md-0" style="max-width: 469px;">
                <img src="{{ asset('newimages/features1.png') }}" class="rellax d-block" alt="Screen" data-rellax-percentage="0.5"
                    data-rellax-speed="-0.5" data-disable-parallax-down="md">
                <div class="rellax position-absolute top-0 end-0 w-100 h-100" data-rellax-percentage="0.5"
                    data-rellax-speed="0.75" data-disable-parallax-down="md">
                    <img src="{{ asset('newimages/features2.png') }}" alt="Screen">
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-5 col-xl-4 offset-xl-1 order-md-1 pb-md-4">
            <h2 class="pb-3">Make your money transfer simple and clear</h2>
            <ul class="list-unstyled pb-3 mb-3">
                <li class="d-flex align-items-center mb-2">
                    <i class="bx bx-check-circle fs-xl text-primary me-2"></i>
                    Banking transactions are free for you
                </li>
                <li class="d-flex align-items-center mb-2">
                    <i class="bx bx-check-circle fs-xl text-primary me-2"></i>
                    No monthly cash commission
                </li>
                <li class="d-flex align-items-center mb-2">
                    <i class="bx bx-check-circle fs-xl text-primary me-2"></i>
                    Manage payments and transactions online
                </li>
            </ul>
            <a href="#" class="btn btn-primary">
                Learn more
                <i class="bx bx-right-arrow-alt fs-xl ms-2 me-n1"></i>
            </a>
        </div>
    </div>
    <div class="row align-items-center mt-2 mt-md-0 pt-5 pt-md-4 pt-lg-0 pb-md-3 pb-lg-5">
        <div class="col-md-6 col-lg-5 offset-xl-1 mb-2 mb-md-0 pb-4 pb-md-0">
            <div class="position-relative mx-auto mx-md-0" style="max-width: 462px;">
                <img src="{{ asset('newimages/features3.png') }}" class="rellax d-block" alt="Screen" data-rellax-percentage="0.5"
                    data-rellax-speed="-0.5" data-disable-parallax-down="md">
                <div class="rellax position-absolute top-0 end-0 w-100 h-100 me-md-n3" data-rellax-percentage="0.5"
                    data-rellax-speed="0.75" data-disable-parallax-down="md">
                    <img src="{{ asset('newimages/features2.png') }}" alt="Screen">
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-5 offset-lg-1">
            <h2 class="pb-3">Receive payment from international bank details</h2>
            <div class="row row-cols-1 row-cols-sm-2 text-start pb-3">
                <div class="col pb-4">
                    <div class="d-table bg-secondary rounded-3 flex-shrink-0 p-3 mb-3">
                        <img src="{{ asset('assets/img/landing/app-showcase/features/payments.svg') }}" alt="Easy Payments">
                    </div>
                    <p class="mb-0">Manage your payments online. Mollis congue egestas egestas fermentum fames.</p>
                </div>
                <div class="col pb-4">
                    <div class="d-table bg-secondary rounded-3 flex-shrink-0 p-3 mb-3">
                        <img src="{{ asset('assets/img/landing/app-showcase/features/cashback.svg') }}" alt="Regular Cashback">
                    </div>
                    <p class="mb-0">A elementur and imperdiet enim, pretium etiam facilisi aenean quam mauris.</p>
                </div>
            </div>
            <a href="#" class="btn btn-primary">
                Learn more
                <i class="bx bx-right-arrow-alt fs-xl ms-2 me-n1"></i>
            </a>
        </div>
    </div>
    <!-- Extra spacing for dark mode only -->
    <div class="pt-5 d-none d-dark-mode-block"></div>
</section>


<!-- Testimonials -->
<section class="py-5 mb-md-2"
    style="background: radial-gradient(116.18% 118% at 50% 100%, rgba(99, 102, 241, 0.1) 0%, rgba(218, 70, 239, 0.05) 41.83%, rgba(241, 244, 253, 0.07) 82.52%);">
    <div class="container py-lg-4">
        <div class="row py-md-3">
            <div class="col-xl-3 col-lg-4 pt-2">
                <h2 class="h1 text-center text-lg-start pb-2">Clients are Loving Our App</h2>

                <!-- Slider prev/next buttons -->
                <div class="d-flex justify-content-center justify-content-lg-start pt-lg-5">
                    <button type="button" id="prev-review" class="btn btn-prev btn-icon btn-sm me-3">
                        <i class="bx bx-chevron-left"></i>
                    </button>
                    <button type="button" id="next-review" class="btn btn-next btn-icon btn-sm">
                        <i class="bx bx-chevron-right"></i>
                    </button>
                </div>
            </div>
            <div class="col-lg-8 offset-xl-1 pt-4 mt-2 mt-md-3 mt-lg-0 pt-lg-0">
                <div class="px-2 px-sm-0">
                    <div class="swiper mx-n2" data-swiper-options='{
                "slidesPerView": 1,
                "spaceBetween": 8,
                "navigation": {
                "prevEl": "#prev-review",
                "nextEl": "#next-review"
                },
                "loop": true,
                "breakpoints": {
                "600": { "slidesPerView": 2 }
                }
            }'>
                        <div class="swiper-wrapper">

                            <!-- Item -->
                            <div class="swiper-slide h-auto pt-4 pb-3 px-2">
                                <div class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                                    <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                                        <span
                                            class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                                            <i class="bx bxs-quote-left"></i>
                                        </span>
                                        <blockquote class="card-body pb-4 mb-0">
                                            <div class="text-nowrap pt-1 mb-3">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bx-star text-muted opacity-75"></i>
                                                <i class="bx bx-star text-muted opacity-75"></i>
                                            </div>
                                            <p class="fs-lg mb-0">Sit pretium aliquam tempor, orci dolor sed maecenas
                                                rutrum sagittis. Laoreet posuere rhoncus, egestas lacus, egestas justo
                                                aliquam vel. Nisi vitae lectus hac hendrerit. Montes justo turpis sit
                                                amet.</p>
                                        </blockquote>
                                        <div class="card-footer d-flex align-items-center border-0 pt-0">
                                            <img src="{{ asset('assets/img/avatar/42.png') }}" width="48" class="rounded-circle ms-n1"
                                                alt="Fannie Summers">
                                            <div class="ps-2 ms-1">
                                                <h6 class="fs-base fw-semibold mb-0">Fannie Summers</h6>
                                                <span class="fs-sm text-muted">Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide h-auto pb-3 px-2 pt-4">
                                <div class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                                    <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                                        <span
                                            class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                                            <i class="bx bxs-quote-left"></i>
                                        </span>
                                        <blockquote class="card-body pb-4 mb-0">
                                            <div class="text-nowrap pt-1 mb-3">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                            </div>
                                            <p class="fs-lg mb-0">Nunc senectus leo vel venenatis accumsan vestibulum
                                                sollicitudin amet porttitor. Nisl bibendum nulla tincidunt eu enim
                                                ornare dictumst sit amet. Dictum pretium dolor tincidunt egestas eget
                                                nunc.</p>
                                        </blockquote>
                                        <div class="card-footer d-flex align-items-center border-0 pt-0">
                                            <img src="{{ asset('assets/img/avatar/43.png') }}" width="48" class="rounded-circle ms-n1"
                                                alt="Robert Fox">
                                            <div class="ps-2 ms-1">
                                                <h6 class="fs-base fw-semibold mb-0">Robert Fox</h6>
                                                <span class="fs-sm text-muted">QA Engineer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide h-auto pb-3 px-2 pt-4">
                                <div class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                                    <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                                        <span
                                            class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                                            <i class="bx bxs-quote-left"></i>
                                        </span>
                                        <blockquote class="card-body pb-4 mb-0">
                                            <div class="text-nowrap pt-1 mb-3">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bx-star text-muted opacity-75"></i>
                                            </div>
                                            <p class="fs-lg mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Mauris ipsum odio, bibendum ornare mi at, efficitur urna. Sit
                                                pretium aliquam tempor, orci dolor sed maecenas.</p>
                                        </blockquote>
                                        <div class="card-footer d-flex align-items-center border-0 pt-0">
                                            <img src="{{ asset('assets/img/avatar/44.png') }}" width="48" class="rounded-circle ms-n1"
                                                alt="Annette Black">
                                            <div class="ps-2 ms-1">
                                                <h6 class="fs-base fw-semibold mb-0">Annette Black</h6>
                                                <span class="fs-sm text-muted">Project Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide h-auto pb-3 px-2 pt-4">
                                <div class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                                    <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                                        <span
                                            class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                                            <i class="bx bxs-quote-left"></i>
                                        </span>
                                        <blockquote class="card-body pb-4 mb-0">
                                            <div class="text-nowrap pt-1 mb-3">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                            </div>
                                            <p class="fs-lg mb-0">Etiam augue ante, imperdiet et nunc sed, bibendum
                                                faucibus est. Suspendisse egestas facilisis erat eu eleifend.
                                                Pellentesque finibus congue egestas egestas suspendisse blandit justo.
                                            </p>
                                        </blockquote>
                                        <div class="card-footer d-flex align-items-center border-0 pt-0">
                                            <img src="{{ asset('assets/img/avatar/45.png') }}" width="48" class="rounded-circle ms-n1"
                                                alt="Jerome Bell">
                                            <div class="ps-2 ms-1">
                                                <h6 class="fs-base fw-semibold mb-0">Jerome Bell</h6>
                                                <span class="fs-sm text-muted">Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FAQ -->
<section class="container py-5 mb-lg-2">
    <div class="row py-2 py-md-4 py-lg-5">
        <div class="col-xl-4 col-md-5 text-center text-md-start pt-md-2 pb-2 pb-md-0 mb-4 mb-md-0">
            <h2 class="pb-3 mb-1 mb-lg-3">Any questions? <br class="d-none d-md-inline">Check out the FAQs</h2>
            <p class="fs-lg pb-3 mb-2 mb-lg-3">Still have unanswered questions and need to get in touch?</p>
            <div class="row row-cols-1 row-cols-sm-2 g-3 g-sm-4">
                <div class="col">
                    <div class="card card-hover">
                        <div class="card-body pb-3">
                            <i class="bx bxs-phone-call d-block fs-2 text-primary mb-2 py-1"></i>
                            <p class="fs-sm mb-2">Still have questions?</p>
                            <a href="#" class="btn btn-link stretched-link px-0">
                                Call us
                                <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-hover">
                        <div class="card-body pb-3">
                            <i class="bx bx-message-rounded-dots d-block fs-2 text-success mb-2 py-1"></i>
                            <p class="fs-sm mb-2">Still have questions?</p>
                            <a href="#" class="btn btn-link text-success stretched-link px-0">
                                Chat with us
                                <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7 offset-xl-1">
            <div class="accordion" id="faq">
                <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                    <h2 class="accordion-header" id="q1-heading">
                        <button class="accordion-button shadow-none rounded-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#q1" aria-expanded="true" aria-controls="q1">
                            Is any of my personal information stored in the App?
                        </button>
                    </h2>
                    <div id="q1" class="accordion-collapse collapse show" aria-labelledby="q1-heading"
                        data-bs-parent="#faq">
                        <div class="accordion-body fs-sm pt-0">
                            <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam arcu,
                                viverra et, cursus. Aliquet pretium cursus adipiscing gravida et consequat lobortis arcu
                                velit. Nibh pharetra fermentum duis accumsan lectus non. Massa cursus molestie lorem
                                scelerisque pellentesque. Nisi, enim, arcu purus gravida adipiscing euismod montes, duis
                                egestas. Vehicula eu etiam quam tristique tincidunt suspendisse ut consequat.</p>
                            <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu tortor, faucibus
                                et lacinia posuere. Turpis sit viverra lorem suspendisse lacus aliquam auctor vulputate.
                                Quis egestas aliquam nunc purus lacus, elit leo elit facilisi. Dignissim amet adipiscing
                                massa integer.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                    <h2 class="accordion-header" id="q2-heading">
                        <button class="accordion-button shadow-none rounded-3 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#q2" aria-expanded="false" aria-controls="q2">
                            What formats can I download my transaction history in?
                        </button>
                    </h2>
                    <div id="q2" class="accordion-collapse collapse" aria-labelledby="q2-heading" data-bs-parent="#faq">
                        <div class="accordion-body fs-sm pt-0">
                            <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam arcu,
                                viverra et, cursus. Aliquet pretium cursus adipiscing gravida et consequat lobortis arcu
                                velit. Nibh pharetra fermentum duis accumsan lectus non. Massa cursus molestie lorem
                                scelerisque pellentesque. Nisi, enim, arcu purus gravida adipiscing euismod montes, duis
                                egestas. Vehicula eu etiam quam tristique tincidunt suspendisse ut consequat.</p>
                            <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu tortor, faucibus
                                et lacinia posuere. Turpis sit viverra lorem suspendisse lacus aliquam auctor vulputate.
                                Quis egestas aliquam nunc purus lacus, elit leo elit facilisi. Dignissim amet adipiscing
                                massa integer.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                    <h2 class="accordion-header" id="q3-heading">
                        <button class="accordion-button shadow-none rounded-3 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#q3" aria-expanded="false" aria-controls="q3">
                            Can I schedule future transfers?
                        </button>
                    </h2>
                    <div id="q3" class="accordion-collapse collapse" aria-labelledby="q3-heading" data-bs-parent="#faq">
                        <div class="accordion-body fs-sm pt-0">
                            <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam arcu,
                                viverra et, cursus. Aliquet pretium cursus adipiscing gravida et consequat lobortis arcu
                                velit. Nibh pharetra fermentum duis accumsan lectus non. Massa cursus molestie lorem
                                scelerisque pellentesque. Nisi, enim, arcu purus gravida adipiscing euismod montes, duis
                                egestas. Vehicula eu etiam quam tristique tincidunt suspendisse ut consequat.</p>
                            <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu tortor, faucibus
                                et lacinia posuere. Turpis sit viverra lorem suspendisse lacus aliquam auctor vulputate.
                                Quis egestas aliquam nunc purus lacus, elit leo elit facilisi. Dignissim amet adipiscing
                                massa integer.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                    <h2 class="accordion-header" id="q4-heading">
                        <button class="accordion-button shadow-none rounded-3 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#q4" aria-expanded="false" aria-controls="q4">
                            When can I use Banking App services?
                        </button>
                    </h2>
                    <div id="q4" class="accordion-collapse collapse" aria-labelledby="q4-heading" data-bs-parent="#faq">
                        <div class="accordion-body fs-sm pt-0">
                            <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam arcu,
                                viverra et, cursus. Aliquet pretium cursus adipiscing gravida et consequat lobortis arcu
                                velit. Nibh pharetra fermentum duis accumsan lectus non. Massa cursus molestie lorem
                                scelerisque pellentesque. Nisi, enim, arcu purus gravida adipiscing euismod montes, duis
                                egestas. Vehicula eu etiam quam tristique tincidunt suspendisse ut consequat.</p>
                            <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu tortor, faucibus
                                et lacinia posuere. Turpis sit viverra lorem suspendisse lacus aliquam auctor vulputate.
                                Quis egestas aliquam nunc purus lacus, elit leo elit facilisi. Dignissim amet adipiscing
                                massa integer.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                    <h2 class="accordion-header" id="q5-heading">
                        <button class="accordion-button shadow-none rounded-3 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#q5" aria-expanded="false" aria-controls="q5">
                            Can I create my own password that is easy for me to remember?
                        </button>
                    </h2>
                    <div id="q5" class="accordion-collapse collapse" aria-labelledby="q5-heading" data-bs-parent="#faq">
                        <div class="accordion-body fs-sm pt-0">
                            <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam arcu,
                                viverra et, cursus. Aliquet pretium cursus adipiscing gravida et consequat lobortis arcu
                                velit. Nibh pharetra fermentum duis accumsan lectus non. Massa cursus molestie lorem
                                scelerisque pellentesque. Nisi, enim, arcu purus gravida adipiscing euismod montes, duis
                                egestas. Vehicula eu etiam quam tristique tincidunt suspendisse ut consequat.</p>
                            <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu tortor, faucibus
                                et lacinia posuere. Turpis sit viverra lorem suspendisse lacus aliquam auctor vulputate.
                                Quis egestas aliquam nunc purus lacus, elit leo elit facilisi. Dignissim amet adipiscing
                                massa integer.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 rounded-3 shadow-sm">
                    <h2 class="accordion-header" id="q6-heading">
                        <button class="accordion-button shadow-none rounded-3 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#q6" aria-expanded="false" aria-controls="q6">
                            What happens if I forget or lose my password?
                        </button>
                    </h2>
                    <div id="q6" class="accordion-collapse collapse" aria-labelledby="q6-heading" data-bs-parent="#faq">
                        <div class="accordion-body fs-sm pt-0">
                            <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam arcu,
                                viverra et, cursus. Aliquet pretium cursus adipiscing gravida et consequat lobortis arcu
                                velit. Nibh pharetra fermentum duis accumsan lectus non. Massa cursus molestie lorem
                                scelerisque pellentesque. Nisi, enim, arcu purus gravida adipiscing euismod montes, duis
                                egestas. Vehicula eu etiam quam tristique tincidunt suspendisse ut consequat.</p>
                            <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu tortor, faucibus
                                et lacinia posuere. Turpis sit viverra lorem suspendisse lacus aliquam auctor vulputate.
                                Quis egestas aliquam nunc purus lacus, elit leo elit facilisi. Dignissim amet adipiscing
                                massa integer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Subscription CTA -->
<section class="container">
    <div class="bg-secondary rounded-3 py-5 px-3 px-sm-4 px-lg-5 px-xl-0">
        <div class="row align-items-center py-lg-4">
            <div class="col-xl-5 col-md-6 offset-xl-1 mb-4 mb-md-0">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/landing/app-showcase/notification-icon.svg') }}" width="78" alt="Bell icon">
                    <div class="ps-3 ms-sm-3">
                        <h2 class="h4 mb-0">Subscribe to our newsletter to stay informed about latest updates</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-md-6">
                <div class="ps-lg-5 ms-xl-2">
                    <form class="input-group input-group-lg needs-validation" novalidate>
                        <input type="email" id="subscr-email" class="form-control rounded-start ps-5"
                            placeholder="Your email" required>
                        <i
                            class="bx bx-envelope fs-xl text-muted position-absolute top-50 start-0 translate-middle-y ms-3 zindex-5"></i>
                        <div class="invalid-tooltip position-absolute top-100 start-0">Please provide a valid email
                            address.</div>
                        <button type="submit" class="btn btn-primary px-sm-4">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <div class="slider-instep-section">
        <div class="slider-instep owl-carousel">
            
            @php $count = 0; @endphp
            @foreach( $sliders as $slido )
            
            <div class="slider-inner-instep"  data-background-image-url="{{$slido->photo ? '/public/images/media/' . $slido->photo->file : '/public/img/200x200.png'}}">
                
                <div class="container">
                   
                    <div class="slider-content">
                       <h1 @if( $count == 0 ) class="active" @endif>{!!$slido->heading1!!} </h1>
                       <h2 @if( $count == 0 ) class="active" @endif>{!!$slido->heading2!!}</h2>

                     

                       <div class="slider-body  @if( $count == 0 ) active @endif">{!!$slido->bodyslider!!}</div>
                       
                        @if($slido->button_text)
                            <div class="button-slider-b">
                                <a href="{!!$slido->button_link!!}" target="_self" class="btn btn-slider"><span>{!!$slido->button_text!!}</span><svg width="11.4" height="9.2"> <use xlink:href="#arrow"></use></svg></a>
                            </div>
                        @endif

                        @if($slido->button_text2)
                            <div class="button-slider-b">
                                <a href="{!!$slido->button_link2!!}" target="_self" class="btn btn-slider"><span>{!!$slido->button_text2!!}</span><svg width="11.4" height="9.2"> <use xlink:href="#arrow"></use></svg></a>
                            </div>
                        @endif
                       
                    </div>
                </div>
            </div>

            @php $count++; @endphp

            @endforeach
        
        </div>

        <div class="header-social-share">
            {!!$headerfooter->social_links!!}
        </div>

        <a href="#" class="hero__scroll"><svg width="15" height="22.1"><use xlink:href="#scroll"></use></svg></a>
    </div>

    

    <div class="about-section light-section">
        <div class="container">
            <div class="row">
               
                <div class="col-md-6">
                    
              
                    <div class="item-about">

                        <div class="item-about-row">
                            <div class="item-about-img2">
                                <div class="avo-image avo-tooltip about-img3 big-paral">
                                    <div class="simpleParallax imago" data-tooltip-tit="{{$homesetting->about_image3_titlu1}}" data-tooltip-sub="{{$homesetting->about_image3_titlu2}}"><img src="/public/img/loading-blog.gif" width="500" height="666" class="lazy thumparallax-down img-fluid" data-src="{{$homesetting->about_image3}}" alt="about-us" /></div>
                                </div>
                            </div>
                            
                            <div class="item-about-img1">
                                <div class="avo-image avo-tooltip about-img1 big-paral">
                                    <div class="simpleParallax imago" data-tooltip-tit="{{$homesetting->about_image2_titlu1}}" data-tooltip-sub="{{$homesetting->about_image2_titlu2}}"><img src="/public/img/loading-blog.gif" width="500" height="666" class="lazy thumparallax-down img-fluid" data-src="{{$homesetting->about_image2}}" alt="about-us" /></div>
                                </div>
                                <div class="avo-image avo-tooltip about-img2 big-paral">
                                    <div class="simpleParallax imago" data-tooltip-tit="{{$homesetting->about_image1_titlu1}}" data-tooltip-sub="{{$homesetting->about_image1_titlu2}}"><img src="/public/img/loading-blog.gif" width="500" height="666" class="lazy thumparallax-down img-fluid" data-src="{{$homesetting->about_image1}}" alt="about-us" /></div>
                                </div>
                            </div>
                        </div>
                       

                        <div class="exp-about">
                            <h5 class="nmb-font-about">{{$homesetting->about_yearstitle}}</h5>
                            <h6 class="service_summary-about">{{$homesetting->about_yearstext}}</h6>
                        </div>

                    </div>

                 

                </div>


                <div class="col-md-6">

                    <h4 class="about-heading1-home">{!!$homesetting->about_subtitle!!}</h4>
                    <h3 class="about-heading2-home">{!!$homesetting->about_title!!}</h3>

                    {!!$homesetting->about_description!!}

                    <a href="{{$homesetting->about_buttonlink}}" target="_self" class="btn btn-style1"><span>{{$homesetting->about_buttontext}}</span><svg width="11.4" height="9.2"> <use xlink:href="#arrow"></use></svg></a>

                </div>


            </div>
        </div>
    </div>


    <div class="services-section">
        <div class="container">
            
            <h3>{!!$homesetting->services_title!!}</h3>

            <div class="description-services">{!!$homesetting->sevices_text!!}</div>

            <div class="service-boxes-slider owl-carousel">
                
                @foreach( $services as $service )
                <div class="card-parent">
                    <div class="card-inner-row">
                        <div class="card featured to-top-left">
                            <div class="heading-wrapper">
                                <h4 class="heading">{!!$service->icon!!} {{$service->title}}</h4>
                            </div> 
            
                            <div class="paragraph-wrapper">
                                <p class="paragraph">{{$service->description}}</p>
                            </div>

                            <div class="project-button">
                                <a href="{{$service->button_link}}" title="{{$service->title}}"><span>{{$service->button_text}}</span><svg viewBox="0 0 80 80"><polyline points="19.89 15.25 64.03 15.25 64.03 59.33"></polyline><line x1="64.03" y1="15.25" x2="14.03" y2="65.18"></line></svg></a>
                            </div>

                        </div>
                        <div class="card-img">
                            <img class="img-fluid project-image lazy" width="400" height="400" src="/public/img/loading-blog.gif " data-src="{{$service->photo ? '/public/images/media/' . $service->photo->file : '/public/img/200x200.png'}}" alt="{{$service->title}}">
                        </div>
                    </div>
                </div>
                @endforeach

            </div> 
     
        </div>
    </div>


     <div class="fun-facts-section light-section" id="fun-facts">
        <div class="container">

            <h3 class="fun-facts-heading1">{{$homesetting->fun_title}}</h3>

            <p>{{$homesetting->fun_description}}</p>

            <div class="row fun-facts-timer">
                <div class="col-md-3">
                    <div class="radial">
                        <div class="radial-icon">{!!$homesetting->count_icon1!!}</div>
                        <span class="timer" data-from="0" data-to="{{$homesetting->count_number1}}" data-speed="4000">{{$homesetting->count_number1}}</span>
                        <h4>{{$homesetting->count_description1}}</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="radial">
                        <div class="radial-icon">{!!$homesetting->count_icon2!!}</div>
                        <span class="timer" data-from="0" data-to="{{$homesetting->count_number2}}" data-speed="4000">{{$homesetting->count_number2}}</span>
                        <h4>{{$homesetting->count_description2}}</h4>
                    </div>
                    
                </div>
                <div class="col-md-3">
                    <div class="radial">
                        <div class="radial-icon">{!!$homesetting->count_icon3!!}</div>
                        <span class="timer" data-from="0" data-to="{{$homesetting->count_number3}}" data-speed="4000">{{$homesetting->count_number3}}</span>
                        <h4>{{$homesetting->count_description3}}</h4>
                    </div>
                    
                </div>
                <div class="col-md-3">
                    <div class="radial">
                        <div class="radial-icon">{!!$homesetting->count_icon4!!}</div>
                        <span class="timer" data-from="0" data-to="{{$homesetting->count_number4}}" data-speed="4000">{{$homesetting->count_number4}}</span>
                        <h4>{{$homesetting->count_description4}}</h4>
                    </div>
                </div>
            </div>


        </div>
    </div>

     <div class="portfolio-section">
        <div class="container">
            <h4>{{$homesetting->projects_subtitle}}</h4>
            <h3>{!!$homesetting->projects_title!!}</h3>



            <div class="portfolio-slider owl-carousel">
                
                @foreach($projects as $key=>$project)
                    
                    <div class="portfolio-slider-inner">
                
                            <div class="project-box-div"> 
                                @php $count = $key + 1 @endphp
                                <a href="{{URL::to('/')}}/project/{{$project->slug}}" title="{{$project->title}}">
                                       <img class="img-fluid project-image lazy" width="400" height="400" src="/public/img/loading-blog.gif " data-src="{{$project->photo ? '/public/images/media/' . $project->photo->file : '/public/img/200x200.png'}}" alt="{{$project->title}}">
                                </a>
                                <div class="project-meta">
                                    <div class="project-number">
                                        <span>0{{$count}}</span>
                                    </div>
                                    <div class="project-category">
                                        <span class="block_text">{{$project->project_category->name}} </span>
                                    </div>
                                    <div class="project-meta-title">
                                        <a href="{{URL::to('/')}}/project/{{$project->slug}}" title="{{$project->title}}"><span class="project__text">{{$project->title}}</span></a>
                                    </div>
                                    <div class="project-button">
                                        <a href="{{URL::to('/')}}/project/{{$project->slug}}" title="{{$project->title}}"><span>{{clean( trans('instep-backend.view_project') , array('Attr.EnableID' => true))}}</span><svg viewBox="0 0 80 80"><polyline points="19.89 15.25 64.03 15.25 64.03 59.33"></polyline><line x1="64.03" y1="15.25" x2="14.03" y2="65.18"></line></svg></a>
                                    </div>
                                </div>
                            </div>
                       
                    </div>

                    @if ($key == 3)
                        @break
                    @endif


                @endforeach

            
            </div>
        </div>
    </div>

    


    <div class="testimonial-section light-section">

        <div class="container">

            <h3>{{$homesetting->testimonial_title}}</h3>
            <p>{{$homesetting->testimonial_subtitle}}</p>

            <div class="testimonial-section-slider owl-carousel">

                @foreach($testimonials as $testimonial)
                <blockquote class="testimonial-slide">
                    <div class="testimonial-layout1">
                        <div class="item-figure">
                            <img class="img-fluid" width="90" height="90" src="{{$testimonial->profile_pic ? $testimonial->profile_pic : '/public/img/200x200.png'}}" alt="">
                        </div>
                        <div class="item-content">
                            <h3 class="item-title">{{$testimonial->name}}</h3>
                            <div class="item-sub-title">{{$testimonial->position}}</div>
                            <div class="item-paragraph">{!!$testimonial->description!!}</div>
                        </div>
                    </div>
                </blockquote>
                @endforeach

            </div>

        </div>

    </div>

    <div class="blog-section">

        <div class="container">

            <h3 class="blog-section-subtitle">{!!$homesetting->blog_subtitle!!}</h3>
            <h3 class="blog-section-title">{!!$homesetting->blog_title!!}</h3>

            <div class="row">

                @foreach($posts as $post)
                <div class="col-md-4">
                    <article class="blog-single-post">

                        <div class="after-bg">
                           <img class="lazy blog_post_image img-fluid" width="370" height="380" src="https://cdn.dribbble.com/users/105033/screenshots/1132714/loading-animation-800.gif" data-src="{{$post->photo ? '/public/images/media/' . $post->photo->file : '/public/img/200x200.png'}}" alt="{{$post->title}}">
                        </div>
                        <div class="blog-item">
                           <div class="box-content p-relative">
                              <div class="box-content-body">
                                <div class="entry-meta">
                                    <div class="entry-date"><span>  {{ date('M d, Y', strtotime($post->created_at)) }} </span></div>
                                </div>
                                <h2 class="title-block">
                                    <a href="{{URL::to('/')}}/post/{{$post->slug}}" title="{{$post->title}}">{{$post->title}}</a>
                                 </h2>
                                <div class="block-desc"><p>{{$post->meta_description}}</p></div>
                                <div class="project-button">
                                    <a href="{{URL::to('/')}}/post/{{$post->slug}}" title="{{$post->title}}"><span>{{clean( trans('instep-backend.load_more') , array('Attr.EnableID' => true))}}</span><svg viewBox="0 0 80 80"><polyline points="19.89 15.25 64.03 15.25 64.03 59.33"></polyline><line x1="64.03" y1="15.25" x2="14.03" y2="65.18"></line></svg></a>
                                </div>
                              </div>
                           </div>
                        </div>

                    </article>
                </div>
                @endforeach

                
            </div>

        </div>

    </div> -->



@endsection