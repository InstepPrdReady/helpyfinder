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
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
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
    <link rel="shortcut icon" href="{{$setting->favicon}}" type="image/x-icon">
    <link rel="icon" href="{{$setting->favicon}}" type="image/x-icon">

    <!-- Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->

    
    <!-- @if($currentLang->rtl == 1) 
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    @else 
        <link href="{{$setting->font}}" rel="stylesheet">
    @endif -->

    <!-- @if($setting->maintenance_status == 0) 

        @if($setting->loader_status == 1) 
            <script type='text/javascript' src="{{ asset('js/front/pace.min.js') }}" id='pace-js'></script>
            <script> setTimeout(function () {Pace.stop();},4500);</script>
        @endif

     @endif -->

        <!-- Styles -->
        <!-- <link href="{{ asset('css/front/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('css/libs/fontawesome.min.css')}}" type="text/css" rel="stylesheet">
        <link href="{{ asset('css/front/owl.carousel.min.css')}}" type="text/css" rel="stylesheet">
        <link href="{{ asset('css/front/instep.css') }}" type="text/css" rel="stylesheet">
         -->
        

        <!-- @yield('styles') -->

        <!-- @if($currentLang->rtl == 1) 
            <link href="{{ asset('css/front/rtl.css') }}" type="text/css" rel="stylesheet">
        @endif -->


        <!-- Inline Styles -->
        <style>
            body {
                @if($currentLang->rtl == 1) 
                    font-family: 'Cairo', sans-serif;
                @else 
                    font-family: 'Poppins', sans-serif;
                @endif
            }

            @if($setting->custom_css)
                {!! $setting->custom_css !!}
            @endif

            @if($setting->loader_status == 1) 
                .pace-cover {
                    background-image: url({!! $setting->loader_img !!});
                    background-color: {!! $setting->loader_color !!};
                }
            @endif


        </style>



<script type='text/javascript' src="{{ asset('js/front/common_script.js') }}"></script>


<!-- new theme start -->
 <!-- Vendor Styles -->
 <link rel="stylesheet" media="screen" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}"/>

    <!-- Main Theme Styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="{{ asset('assets/css/theme.min.css') }}">

    <!-- Page loading styles -->
    <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .dark-mode .page-loading {
        background-color: #0b0f19;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-size: 1rem;
        font-weight: normal;
        color: #9397ad;
      }
      .dark-mode .page-loading-inner > span {
        color: #fff;
        opacity: .6;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #b4b7c9;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      .dark-mode .page-spinner {
        border-color: rgba(255,255,255,.4);
        border-right-color: transparent;
      }
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
    </style>

    <!-- Theme mode -->
    <script>
      // let mode = window.localStorage.getItem('mode')
      let mode = 'dark',
          root = document.getElementsByTagName('html')[0];
          root.classList.add('dark-mode');
      if (mode !== null && mode === 'dark') {
        root.classList.add('dark-mode');
      } else {
        root.classList.remove('dark-mode');
      }
    </script>

    <!-- Page loading scripts -->
    <script>
      (function () {
        window.onload = function () {
          const preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 1000);
        };
      })();
    </script>
<!-- new theme start -->
</head>
<body class="common-front @if($currentLang->rtl == 1) rtl @endif" @if($currentLang->rtl == 1) dir="rtl" @endif>
    
    @if($setting->maintenance_status == 1) 

        <!-- <div class="maintenance_cls"><div class="maintenance_inner">{!!$setting->maintenance_text!!}</div></div> -->

    @endif

    @if($setting->maintenance_status == 0) 

    <!-- body -->

    @if($setting->loader_status == 1) 
    <!-- <div class="pace-cover"></div> -->
    @endif

    <!-- Page loading spinner -->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div>

    <main class="page-wrapper">

    <header class="header navbar navbar-expand-lg position-absolute navbar-sticky">
        <div class="container px-3">
          <a href="index.html" class="navbar-brand pe-3">
            <img src="{{ asset('newimages/logo.png') }}" width="180" alt="Silicon">
            
          </a>
          <div id="navbarNav" class="offcanvas offcanvas-end">
            <div class="offcanvas-header border-bottom">
              <h5 class="offcanvas-title">Menu</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                <li class="nav-item active">
                  <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">About us</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">FAQ</a>
                </li>
              </ul>
            </div>
            <div class="offcanvas-header border-top">
              <a href="https://themes.getbootstrap.com/product/silicon-business-technology-template-ui-kit/" class="btn btn-primary w-100" target="_blank" rel="noopener">
                <i class="bx bx-cart fs-4 lh-1 me-1"></i>
                &nbsp;Buy now
              </a>
            </div>      
          </div>
          <!-- <div class="form-check form-switch mode-switch pe-lg-1 ms-auto me-4" data-bs-toggle="mode">
            <input type="checkbox" class="form-check-input" id="theme-mode">
            <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label>
            <label class="form-check-label d-none d-sm-block" for="theme-mode">Dark</label>
          </div> -->
          <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a href="https://themes.getbootstrap.com/product/silicon-business-technology-template-ui-kit/" class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex" target="_blank" rel="noopener">
            <!-- <i class="bx bx-cart fs-5 lh-1 me-1"></i> -->
            &nbsp;Get early Access
          </a>
        </div>
      </header>

    
    <!-- @yield('content') -->

     
</main>

     <!-- Footer -->
     <footer class="footer pt-5 pb-4 pb-lg-5">
      <div class="container text-center pt-lg-3">
        <div class="navbar-brand justify-content-center text-dark mb-2 mb-lg-4">
          <img src="{{ asset('assets/img/logo.svg') }}" class="me-2" width="60" alt="Silicon">
          <span class="fs-4">Silicon</span>
        </div>
        <ul class="nav justify-content-center pt-3 pb-4 pb-lg-5">
          <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link">About us</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="#" class="nav-link">FAQ</a></li>
        </ul>
        <div class="d-flex flex-column flex-sm-row justify-content-center">
          <a href="#" class="btn btn-dark btn-lg px-3 py-2 me-sm-4 mb-3">
            <img src="{{ asset('assets/img/market/appstore-light.svg') }}" class="light-mode-img" width="124" alt="App Store">
            <img src="{{ asset('assets/img/market/appstore-dark.svg') }}" class="dark-mode-img" width="124" alt="App Store">
          </a>
          <a href="#" class="btn btn-dark btn-lg px-3 py-2 mb-3">
            <img src="{{ asset('assets/img/market/googleplay-light.svg') }}" class="light-mode-img" width="139" alt="Google Play">
            <img src="{{ asset('assets/img/market/googleplay-dark.svg') }}" class="dark-mode-img" width="139" alt="Google Play">
          </a>
        </div>
        <div class="d-flex justify-content-center pt-4 mt-lg-3">
          <a href="#" class="btn btn-icon btn-secondary btn-facebook mx-2">
            <i class="bx bxl-facebook"></i>
          </a>
          <a href="#" class="btn btn-icon btn-secondary btn-instagram mx-2">
            <i class="bx bxl-instagram"></i>
          </a>
          <a href="#" class="btn btn-icon btn-secondary btn-twitter mx-2">
            <i class="bx bxl-twitter"></i>
          </a>
          <a href="#" class="btn btn-icon btn-secondary btn-youtube mx-2">
            <i class="bx bxl-youtube"></i>
          </a>
        </div>
        <p class="nav d-block fs-sm text-center pt-5 mt-lg-4 mb-0">
          <span class="opacity-80">&copy; Copyright 2024 HelpyFinder, Inc. | All Rights Reserved. </span>
        </p>
      </div>
    </footer>


    <!-- Back to top button -->
    <a href="#top" class="btn-scroll-top" data-scroll>
      <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
      <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
    </a>
  <!-- Vendor Scripts -->
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/rellax/rellax.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main Theme Script -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>



<!-- 
    @if($setting->SchmeaORG_switch == 1)

    <div class="hidden"  itemscope="" itemtype="https://schema.org/LocalBusiness">
        <span itemprop="description">@yield('meta')</span> 
        <a itemprop="url" href="{{route('home')}}"> </a>
        <div itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
        <img src="{{route('home')}}{{$setting->photo ? '/public/images/media/' . $setting->photo->file : '/public/img/200x200.png'}}" alt="logo" width="120" itemprop="url"></div>
        <span itemprop="name">{{$setting->title}}</span>
        <em><span itemprop="priceRange">{{$setting->price_range}}</span></em>
        <div itemprop="address" itemscope="" itemtype="https://schema.org/PostalAddress"> 
            <span itemprop="addressLocality">{{$setting->address}}</span> | 
            <span itemprop="addressCountry">{{$setting->country}}</span> | 
            <span itemprop="telephone">{{$setting->phone}}</span> | 
            <span itemprop="email">{{$setting->contact}}</span>
        </div>
    </div> 

    @endif -->


    <!-- @if($setting->whatsapp == 1)
    <a class="chat__trigger-instep logo-chat" href="https://wa.me/{{$setting->phone}}"  target="_blank" title="whatsapp">
        <svg class="chat" width="30.2" height="30.2"><use xlink:href="#chat"></use></svg>
    </a>
    @endif-->

    <!-- <script src="{{ asset('js/libs/jquery.min.js') }}"></script>
    <script src="{{ asset('js/front/popper.min.js') }}"></script>
    <script src="{{ asset('js/front/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/front/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/front/simpleParallax.min.js') }}" defer></script>
    <script src="{{ asset('js/front/countTO.js') }}" defer></script>
    <script src="{{ asset('js/front/typed.min.js') }}" defer></script>
    <script src="{{ asset('js/front/shuffleLetters.js') }} " defer></script>
    <script src="{{ asset('js/front/magnific.min.js') }}" defer></script>
    <script src="{{ asset('js/front/scrollreveal.min.js') }}" defer></script>
    <script src="{{ asset('js/front/instep.js') }}" defer></script> -->

    <!-- <svg width="0" height="0" display="none" xmlns="http://www.w3.org/2000/svg">
        <symbol id="arrow" xmlns="http://www.w3.org/2000/svg" width="11.4" height="9.2"><path d="M11.3 4.1L8.1.2c-.3-.2-.7-.3-1 0-.3.2-.3.6-.1.9l2.3 2.8H.7c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h8.6L7 8c-.2.3-.2.8.1 1 .3.2.7.2 1-.1L11.3 5c.2-.3.2-.6 0-.9z"/></symbol>
        <symbol id="chat" xmlns="http://www.w3.org/2000/svg" width="30.2" height="30.2" viewBox="0 0 30.2 30.2" style="enable-background:new 0 0 30.2 30.2"><path d="M15.1 29c-2.5 0-5-.7-7.2-2l-.2-.1-5.1 1.5c-.2.1-.4 0-.5-.1-.2-.1-.2-.3-.2-.5l1.5-5.1-.1-.2c-1.3-2.2-2-4.7-2-7.3 0-7.7 6.2-13.9 13.9-13.9S29 7.4 29 15.1C29 22.8 22.7 29 15.1 29zm0-29C6.8 0 0 6.8 0 15.1c0 2.7.7 5.3 2 7.6l.1.1-1.3 4.6c-.2.6 0 1.2.4 1.7.4.4 1.1.6 1.7.4l4.7-1.3.1.1c2.3 1.3 4.9 2 7.5 2 8.3 0 15.1-6.8 15.1-15.1S23.4 0 15.1 0z"/><path d="M7.7 18.1c-1.6 0-3-1.3-3-3 0-1.6 1.3-3 3-3 1.6 0 3 1.3 3 3s-1.4 3-3 3zm0-5c-1.1 0-2.1.9-2.1 2.1 0 1.1.9 2.1 2.1 2.1s2.1-.9 2.1-2.1c0-1.2-1-2.1-2.1-2.1zM14.8 18.1c-1.6 0-3-1.3-3-3 0-1.6 1.3-3 3-3 1.6 0 3 1.3 3 3s-1.3 3-3 3zm0-5c-1.1 0-2.1.9-2.1 2.1 0 1.1.9 2.1 2.1 2.1s2.1-.9 2.1-2.1c0-1.2-.9-2.1-2.1-2.1zM21.8 18.1c-1.6 0-3-1.3-3-3 0-1.6 1.3-3 3-3 1.6 0 3 1.3 3 3s-1.4 3-3 3zm0-5c-1.1 0-2.1.9-2.1 2.1 0 1.1.9 2.1 2.1 2.1 1.1 0 2.1-.9 2.1-2.1-.1-1.2-1-2.1-2.1-2.1z"/></symbol>
        <symbol id="scroll" xmlns="http://www.w3.org/2000/svg" width="15" height="22.1"><path class="st0" d="M7.5 16.5c.6 0 1.1.5 1.1 1.1 0 .6-.5 1.1-1.1 1.1-.6 0-1.1-.5-1.1-1.1 0-.6.5-1.1 1.1-1.1zM7.5 9.8c.6 0 1.1.5 1.1 1.1 0 .6-.5 1.1-1.1 1.1-.6 0-1.1-.5-1.1-1.1 0-.6.5-1.1 1.1-1.1zM7.5 6.5c.6 0 1.1.5 1.1 1.1 0 .6-.5 1.1-1.1 1.1-.6 0-1.1-.5-1.1-1.1 0-.6.5-1.1 1.1-1.1zM7.5 3.2c.6 0 1.1.5 1.1 1.1 0 .6-.5 1.1-1.1 1.1-.6 0-1.1-.5-1.1-1.1 0-.6.5-1.1 1.1-1.1zM7.5 0c.6 0 1.1.5 1.1 1.1 0 .6-.5 1.1-1.1 1.1-.6 0-1.1-.5-1.1-1.1C6.4.5 6.9 0 7.5 0zM7.5 19.8c.6 0 1.1.5 1.1 1.1 0 .6-.5 1.1-1.1 1.1-.6 0-1.1-.5-1.1-1.1 0-.6.5-1.1 1.1-1.1zM4.2 16.5c.6 0 1.1.5 1.1 1.1 0 .6-.5 1.1-1.1 1.1-.6 0-1.1-.5-1.1-1.1 0-.6.5-1.1 1.1-1.1zM10.6 16.5c.6 0 1.1.5 1.1 1.1 0 .6-.5 1.1-1.1 1.1-.6 0-1.1-.5-1.1-1.1 0-.6.5-1.1 1.1-1.1zM7.5 13.2c.6 0 1.1.5 1.1 1.1 0 .6-.5 1.1-1.1 1.1-.6 0-1.1-.5-1.1-1.1 0-.6.5-1.1 1.1-1.1zM1.9 13.5c.4.4.4 1.2 0 1.6-.4.4-1.2.4-1.6 0-.4-.4-.4-1.2 0-1.6.5-.4 1.2-.4 1.6 0M4.3 13.2c.6 0 1.1.5 1.1 1.1 0 .6-.5 1.1-1.1 1.1-.6 0-1.1-.5-1.1-1.1 0-.6.5-1.1 1.1-1.1zM14.7 13.5c.4.4.4 1.2 0 1.6-.4.4-1.2.4-1.6 0-.4-.4-.4-1.2 0-1.6.4-.4 1.1-.4 1.6 0M10.7 13.2c.6 0 1.1.5 1.1 1.1 0 .6-.5 1.1-1.1 1.1-.6 0-1.1-.5-1.1-1.1 0-.6.5-1.1 1.1-1.1z"/></symbol>

    </svg> -->


    <!-- @include('cookieConsent::index') -->



 

    <!-- <script type="text/javascript">
    ( function ( $ ) {
        'use strict';
        $( document ).ready( function () {
            /* TYPED TEXT */
            $(function(){
                $(".mt_typed_text").typed({
                  strings: {!! $headerfooter->typed_text !!}, //blade / php dynamic functionality
                  typeSpeed: 1,
                  backDelay: 4000,
                  loop: true
                });
            });
        })
    } ( jQuery ) )
    </script> -->

    <!-- @if($setting->custom_css)
        <script type="text/javascript">
            {!! $setting->custom_js !!} //blade / php dynamic functionality
        </script>
    @endif -->



    <!-- @yield('scripts') -->


    <!-- body -->

    <!-- @endif -->



</body>
</html>
