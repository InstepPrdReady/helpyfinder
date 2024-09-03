@extends('themes.helpyfinder.layouts.front')

@section('title') {{$blogsettings->meta_title}} @endsection
@section('meta') {{$blogsettings->meta_description}} @endsection

@section('content')


   <!-- Page title start-->
  <div class="page-title-area pb-100 bg-light bg-img" data-bg-image="http://app.helpyfinder.com/themes/helpyfinder/assets/images/page-title-bg-1.jpg">
    <div class="container">
        <div class="content text-center">
            <h2>{{$blogsettings->meta_title}}</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a class="bread-link" href="{{ route('home') }}" title="Home">{{clean( trans('instep-backend.home') , array('Attr.EnableID' => true))}}</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{$blogsettings->meta_title}}</li>
                </ol>
            </nav>
        </div>
    </div>
  </div>
  <!-- Page title end-->

   <!-- Blog-area start -->
   <div class="blog-area blog-1 ptb-100">
        <div class="container">
            <div class="row">

               @foreach($posts as $post)
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <article class="card mb-25 radius-md">
                        <div class="card-img">
                            <a href="{{URL::to('/')}}/post/{{$post->slug}}" target="_self" title="Link"
                                class="lazy-container ratio ratio-1-1">
                                <img class="lazyload" src="/public/img/loading-blog.gif" data-src="{{$post->photo ? '/public/images/media/' . $post->photo->file : '/public/img/200x200.png'}}" alt="{{$post->title}}">
                            </a>
                        </div>
                        <div class="card-content radius-md p-25 text-center bg-white">
                            <h5 class="card-title lc-2 mb-15">
                                <a href="{{URL::to('/')}}/post/{{$post->slug}}" target="_self" title="Link">
                                {{$post->title}}
                                </a>
                            </h5>
                            <a href="{{URL::to('/')}}/post/{{$post->slug}}" class="btn-text color-primary" target="_self" title="Read More">Read
                                More</a>
                        </div>
                    </article>
                </div>
               @endforeach
         
            </div>

            {{-- Render pagination links --}}
            <div class="pagination">
               {{ $posts->links() }}
            </div>
            <!-- <nav class="pagination-nav mt-10" data-aos="fade-up">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="blogs.html" aria-label="Previous">
                            <i class="far fa-angle-left"></i>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="blogs.html">1</a></li>
                    <li class="page-item"><a class="page-link" href="blogs.html">2</a></li>
                    <li class="page-item"><a class="page-link" href="blogs.html">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="blogs.html" aria-label="Next">
                            <i class="far fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </nav> -->
        </div>
   </div>
   <!-- Blog-area end -->

    <!-- Newsletter area start -->
    <section class="newsletter-area newsletter-1">
        <div class="newsletter-inner position-relative z-1 px-60">
            <div class="overlay bg-primary opacity-1"></div>
            <div class="container">
                <div class="row align-items-center" data-aos="fade-up">
                    <div class="col-lg-6">
                        <div class="content ptb-30">
                            <h2 class="color-white mb-30">Let’s Download Teeno Mobile App Free</h2>
                            <div class="content-text w-75 w-sm-100">
                                <p class="text color-white">A Private Limited is the most popular type of partnership
                                    Malta. The limited liabilityis in fact, the only type of the</p>
                            </div>
                            <div class=" btn-groups mt-30">
                                <a href="error-404.html" class="btn btn-img radius-md" title="App Store" target="_blank">
                                    <img class="lazyload blur-up" src="assets/images/placeholder.png"
                                        data-src="assets/images/app-store.png" alt="App Store">
                                </a>
                                <a href="error-404.html" class="btn btn-img radius-md" title="Play Store" target="_blank">
                                    <img class="lazyload blur-up" src="assets/images/placeholder.png"
                                        data-src="assets/images/play-store.png" alt="App Store">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-end">
                        <div class="image d-none d-lg-block">
                            <img class="lazyload blur-up" src="assets/images/placeholder.png"
                                data-src="assets/images/newsletter-2.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter area end -->
     
@endsection




