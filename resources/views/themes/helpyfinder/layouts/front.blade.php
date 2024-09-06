<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @php $setting = App\Models\Setting::find($currentLang->id); @endphp
    <!-- Page Title -->
    <title>@yield('title')</title>
    @if($setting->loader_status == 1) 
        <script type="text/javascript">
            window.paceOptions = { ajax: false, restartOnRequestAfter: false, restartOnPushState: false};
        </script>
    @endif
    <!-- Meta Data -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="@yield('meta')">
    <link rel="canonical" href="{{url()->current()}}">
    <meta name="keywords" content="{{$setting->keywords}}" />
    <meta name="publisher" content="{{url()->current()}}">
    <meta name="copyright" content="Copyright (c) {{$setting->title}}" />
    <meta name="author" content="{{$setting->author}}" />
    <meta name="contact" content="{{$setting->contact}}" />

    <meta name="revisit-after" content="7 Days" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="googlebot" content="noindex, nofollow" />
    <meta name="subjects" content="{{$setting->title}}" />
    <meta name="classification" content="{{$setting->title}}" />

    <meta itemprop="name" content="@yield('title')">
    <meta itemprop="description" content="@yield('meta')">
    <meta itemprop="image" content="{{route('home')}}{{$setting->photo ? '/public/images/media/' . $setting->photo->file : '/public/img/200x200.png'}}">
    
    @if($setting->OGgraph_switch == 1)

    <meta property="og:title" content="@yield('title')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{route('home')}}" />
    <meta property="og:image" content="{{route('home')}}{{$setting->photo ? '/public/images/media/' . $setting->photo->file : '/public/img/200x200.png'}}" />
    <meta property="og:site_name" content="{{$setting->author}}" />
    <meta property="og:description" content="@yield('meta')" />
    
    @endif

    @if($setting->analytics_switch == 1)

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{$setting->analytics}}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{$setting->analytics}}');
        </script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','{{$setting->gtm_analytics}}');</script>
        <!-- End Google Tag Manager -->
    
    @endif

    @if($setting->facebook_pixel_switch == 1)

        <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '{{$setting->facebook_pixel}}');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id={{$setting->facebook_pixel}}&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->
    
    @endif
    
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="{{$setting->favicon}}" type="image/x-icon">
    <link rel="icon" href="{{$setting->favicon}}" type="image/x-icon"> -->

<!-- Inline Styles -->
<style>
    @if($setting->custom_css)
        {!! $setting->custom_css !!}
    @endif
</style>


<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('themes/helpyfinder/assets/images/logo/fav-4.png') }}" type="image/x-icon">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('themes/helpyfinder/assets/css/vendors/bootstrap.min.css') }}">
<!-- Fontawesome Icon CSS -->
<link rel="stylesheet" href="{{ asset('themes/helpyfinder/assets/fonts/fontawesome/css/all.min.css') }}">
<!-- Flaticon CSS -->
<link rel="stylesheet" href="{{ asset('themes/helpyfinder/assets/fonts/flaticon/font/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('themes/helpyfinder/assets/fonts/flaticon/font/uicons-bold-rounded.css') }}">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="{{ asset('themes/helpyfinder/assets/css/vendors/magnific-popup.min.css') }}">
<!-- Swiper Slider -->
<link rel="stylesheet" href="{{ asset('themes/helpyfinder/assets/css/vendors/swiper-bundle.min.css') }}">
<!-- Nice Select -->
<link rel="stylesheet" href="{{ asset('themes/helpyfinder/assets/css/vendors/nice-select.css') }}">
<!-- AOS Animation CSS -->
<link rel="stylesheet" href="{{ asset('themes/helpyfinder/assets/css/vendors/aos.min.css') }}">
<!-- Animate CSS -->
<link rel="stylesheet" href="{{ asset('themes/helpyfinder/assets/css/vendors/animate.min.css') }}">
<!-- Main Style CSS -->
<link rel="stylesheet" href="{{ asset('themes/helpyfinder/assets/css/style.css') }}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{ asset('themes/helpyfinder/assets/css/responsive.css') }}">
<!-- Dark Theme CSS -->
<link rel="stylesheet" href="{{ asset('themes/helpyfinder/assets/css/theme-dark.css') }}">

</head>
<body class="body-dark theme-color-4">

    @if($setting->analytics_switch == 1)
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{$setting->gtm_analytics}}"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    @endif

    @if($setting->maintenance_status == 0) 

    <!-- Preloader start -->
    <div id="preLoader">
        <div class="loader"></div>
    </div>
    <!-- Preloader end -->


    <!-- Header-area start -->
    <header class="header-area" data-aos="fade-down">
        <!-- Start mobile menu -->
        <div class="mobile-menu">
            <div class="container">
                <div class="mobile-menu-wrapper"></div>
            </div>
        </div>
        <!-- End mobile menu -->

        <div class="main-responsive-nav">
            <div class="container">
                <!-- Mobile Logo -->
                <div class="logo">
                    <a href="#" target="_self" title="HelpyFinder">
                        <img src="{{ asset('themes/helpyfinder/assets/images/logo/logo.svg') }}" alt="Brand logo">
                    </a>
                </div>
                <!-- Menu toggle button -->
                <button class="menu-toggler" type="button">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container-fluid container-custom">
                <nav class="navbar navbar-expand-lg">

                    <!-- Navigation items -->
                    <div class="collapse navbar-collapse container">

                    <a class="navbar-brand nav-link logo" href="/" target="_self" title="HelpyFinder">
                                    <img src="{{ asset('themes/helpyfinder/assets/images/logo/logo.svg') }}" alt="Brand Logo">
                                </a>
                        <ul id="mainMenu" class="navbar-nav mobile-item align-items-xl-center">

                           
                            <li class="nav-item">
                                <a href="/" class="nav-link toggle">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about-us">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header-area end -->

    @yield('content')

    <!-- Footer-area start -->
    <footer class="footer-area bg-primary-light radius-0">
        <div class="footer-top pt-100 pb-70">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-widget" data-aos="fade-up" data-aos-delay="100">
                            <div class="navbar-brand footer-logo">
                                <a href="/" target="_self" title="Link">
                                    <img class="lazyload blur-up" src="{{ asset('themes/helpyfinder/assets/images/logo/logo.svg') }}"
                                        data-src="{{ asset('themes/helpyfinder/assets/images/logo/logo.svg') }}" alt="Brand Logo">
                                </a>
                            </div>
                            <p>Indignation and dislike men who are so beguiled and demoralized by the charms of pleasure
                                of the moment, so blinded by desire that they cannot foresee.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget" data-aos="fade-up" data-aos-delay="200">
                            <h5>Useful Links</h5>
                            <ul class="footer-links">
                                <li>
                                    <a href="#" target="_self" title="link">Download App</a>
                                </li>
                                <li>
                                    <a href="#" target="_self" title="link">Registration</a>
                                </li>
                                <li>
                                    <a href="#" target="_self" title="link">Business</a>
                                </li>
                                <li>
                                    <a href="/privacy-policy" target="_self" title="link">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget" data-aos="fade-up" data-aos-delay="200">
                            <h5>Features</h5>
                            <ul class="footer-links">
                                <li>
                                    <a href="#" target="_self" title="link">Paid Features</a>
                                </li>
                                <li>
                                    <a href="#" target="_self" title="link">Management</a>
                                </li>
                                <li>
                                    <a href="#" target="_self" title="link">Tracking</a>
                                </li>
                                <li>
                                    <a href="#" target="_self" title="link">Invoice</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget" data-aos="fade-up" data-aos-delay="200">
                            <h5>Explore</h5>
                            <ul class="footer-links">
                                <li>
                                    <a href="/about-us" target="_self" title="link">About Us</a>
                                </li>
                                <li>
                                    <a href="#" target="_self" title="link">Our Mission</a>
                                </li>
                                <li>
                                    <a href="#" target="_self" title="link">How It Work</a>
                                </li>
                                <li>
                                    <a href="/terms-conditions" target="_self" title="link">Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget" data-aos="fade-up" data-aos-delay="200">
                            <h5>Download App</h5>
                            <div class="btn-groups">
                                <a href="https://apps.apple.com/us/app/helpyfinder/id1565616389" class="btn btn-img radius-sm size-sm" title="App Store"
                                    target="_blank">
                                    <img class="lazyload blur-up" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                        data-src="{{ asset('themes/helpyfinder/assets/images/app-store.png') }}" alt="App Store">
                                </a>
                                <a href="https://play.google.com/store/apps/details?id=com.helpyfinder" class="btn btn-img radius-sm size-sm" title="Play Store"
                                    target="_blank">
                                    <img class="lazyload blur-up" src="{{ asset('themes/helpyfinder/assets/images/placeholder.png') }}"
                                        data-src="{{ asset('themes/helpyfinder/assets/images/play-store.png') }}" alt="App Store">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right-area border-top ptb-30">
            <div class="container">
                <div class="social-link">
                    <a href="https://www.instagram.com/" target="_blank" title="Link"><i
                            class="fab fa-instagram"></i></a>
                    <a href="https://www.dribbble.com/" target="_blank" title="Link"><i class="fab fa-dribbble"></i></a>
                    <a href="https://www.twitter.com/" target="_blank" title="Link"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.youtube.com/" target="_blank" title="Link"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="copy-right-content mt-20">
                    <span>
                        Copyright <i class="fal fa-copyright"></i><span id="footerDate"></span> <a href="#"
                            target="_self" title="HelpyFinder" class="color-primary">HelpyFinder</a>. All Rights
                        Reserved
                    </span>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer-area end-->


    <!-- Go to Top -->
    <div class="go-top"><i class="fal fa-angle-up"></i></div>
    <!-- Go to Top -->

    <!-- Jquery JS -->
    <script src="{{ asset('themes/helpyfinder/assets/js/vendors/jquery.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('themes/helpyfinder/assets/js/vendors/bootstrap.min.js') }}"></script>
    <!-- Counter JS -->
    <script src="{{ asset('themes/helpyfinder/assets/js/vendors/jquery.counterup.min.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('themes/helpyfinder/assets/js/vendors/jquery.nice-select.min.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('themes/helpyfinder/assets/js/vendors/jquery.magnific-popup.min.js') }}"></script>
    <!-- Swiper Slider JS -->
    <script src="{{ asset('themes/helpyfinder/assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <!-- Lazysizes -->
    <script src="{{ asset('themes/helpyfinder/assets/js/vendors/lazysizes.min.js') }}"></script>
    <!-- Twinmax JS -->
    <script src="{{ asset('themes/helpyfinder/assets/js/vendors/tweenMax.min.js') }}"></script>
    <!-- Tilt JS -->
    <script src="{{ asset('themes/helpyfinder/assets/js/vendors/tilt.jquery.min.js') }}"></script>
    <!-- AOS JS -->
    <script src="{{ asset('themes/helpyfinder/assets/js/vendors/aos.min.js') }}"></script>
    <!-- Main script JS -->
    <script src="{{ asset('themes/helpyfinder/assets/js/script.js') }}"></script>

    @if($setting->custom_css)
        <script type="text/javascript">
            {!! $setting->custom_js !!} //blade / php dynamic functionality
        </script>
    @endif
    
    @yield('scripts')

    @endif
</body>
</html>
