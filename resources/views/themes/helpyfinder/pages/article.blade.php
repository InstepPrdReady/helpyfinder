@extends('themes.helpyfinder.layouts.front')

@section('title') {{$post->meta_title}} @endsection
@section('meta') {{$post->meta_description}} @endsection

@section('content')
  
<?php //echo "<pre>"; print_r($post->user); ?>
<div class="page-title-area pb-100 bg-light bg-img" data-bg-image="http://app.helpyfinder.com/themes/helpyfinder/assets/images/page-title-bg-1.jpg">
    <div class="container">
        <div class="content text-center">
            <h2>{{$post->meta_title}}</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a class="bread-link" href="{{ route('home') }}" title="Home">{{clean( trans('instep-backend.home') , array('Attr.EnableID' => true))}}</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{$post->meta_title}}</li>
                </ol>
            </nav>
        </div>
    </div>
  </div>

<!-- Blog-details-area start -->
<div class="blog-details-area pt-100 pb-60">
    <div class="container">
        <div class="row justify-content-center gx-xl-5">
            <div class="col-lg-8">
                <div class="blog-description mb-40">
                    <article class="item-single">
                        <div class="image radius-md">
                            <div class="lazy-container ratio ratio-2-3">
                                <img class="lazyload" src="{{ route('home') }}/assets/images/placeholder.png"
								data-src="{{$post->photo ? '/public/images/media/' . $post->photo->file : '/public/img/200x200.png'}}" alt="{{$post->title}}">
                            </div>
                            <a style="display:none;" href="{{URL::to('/')}}/post/{{$post->slug}}" title="Share Now" target="_self" class="btn btn-md btn-primary"><i class="fas fa-share-alt"></i>Share Now</a>
                        </div>
                        <div class="content">
                            <ul class="info-list">
                                <li><i class="fal fa-user"></i>Admin</li>
                                <li><i class="fal fa-calendar"></i>{{ date('d.M.Y', strtotime($post->created_at)) }}</li>
                                <li><i class="fal fa-tag"></i>{{$post->category->name}}</li>
                            </ul>
                            <h4 class="title">
								{{$post->title}}
                            </h4>

                            {!! $post->body !!}

                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="widget-area">
                    <div class="widget widget-post mb-30 p-30 border radius-md">
                        <h4 class="title mb-15">Recent Posts</h4>
                        <article class="article-item mb-30">
                            <div class="image">
                                <a href="blog-details.html" class="lazy-container ratio ratio-5-4">
                                    <img class="lazyload" src="{{ route('home') }}/assets/images/placeholder.png"
                                        data-src="{{ route('home') }}/assets/images/blog/blog-1.jpg" alt="Blog Image">
                                </a>
                            </div>
                            <div class="content">
                                <h6 class="lc-2">
                                    <a href="blog-details.html">Teeno Application Allow to Send Message</a>
                                </h6>
                                <ul class="info-list">
                                    <li><i class="fal fa-user"></i>Admin</li>
                                    <li><i class="fal fa-calendar"></i>18 Feb 2022</li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <div class="widget widget-blog-categories mb-30 p-30 border radius-md">
                        <h4 class="title mb-15">Categories</h4>
                        <ul class="list-unstyled m-0">
                            <li class="d-flex align-items-center justify-content-between">
                                <a href="blogs.html"><i class="fal fa-folder"></i>Technology</a>
                                <span class="tqy">(11)</span>
                         </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <a href="blogs.html"><i class="fal fa-folder"></i>Business</a>
                                <span class="tqy">(02)</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <a href="blogs.html"><i class="fal fa-folder"></i>Android</a>
                                <span class="tqy">(45)</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <a href="blogs.html"><i class="fal fa-folder"></i>iOS</a>
                                <span class="tqy">(26)</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <a href="blogs.html"><i class="fal fa-folder"></i>Watch</a>
                                <span class="tqy">(45)</span>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget-tags mb-30 p-30 border radius-md">
                        <h4 class="title mb-15">Tags</h4>
                        <div class="tags-group d-flex flex-wrap gap-2">
                            <a href="freelancers.html" class="px-3 py-1 bg-light radius-sm font-xsm" title="Link" target="_self">UI/UX</a>
                            <a href="freelancers.html" class="px-3 py-1 bg-light radius-sm font-xsm" title="Link" target="_self">App</a>
                            <a href="freelancers.html" class="px-3 py-1 bg-light radius-sm font-xsm" title="Link" target="_self">Figma</a>
                            <a href="freelancers.html" class="px-3 py-1 bg-light radius-sm font-xsm" title="Link" target="_self">Branding</a>
                            <a href="freelancers.html" class="px-3 py-1 bg-light radius-sm font-xsm" title="Link" target="_self">Web</a>
                            <a href="freelancers.html" class="px-3 py-1 bg-light radius-sm font-xsm" title="Link" target="_self">iOS</a>
                            <a href="freelancers.html" class="px-3 py-1 bg-light radius-sm font-xsm" title="Link" target="_self">Android</a>
                            <a href="freelancers.html" class="px-3 py-1 bg-light radius-sm font-xsm" title="Link" target="_self">Digital</a>
                        </div>
                    </div>
                    <div class="widget widget-social-link mb-30 p-30 border radius-md">
                        <h4 class="title mb-15">Follow Us</h4>
                        <div class="social-link style-2 gap-3">
                           <a href="https://www.instagram.com/" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a>
                           <a href="https://www.dribbble.com/" target="_blank" title="dribbble"><i class="fab fa-dribbble"></i></a>
                           <a href="https://www.twitter.com/" target="_blank" title="twitter"><i class="fab fa-twitter"></i></a>
                           <a href="https://www.youtube.com/" target="_blank" title="youtube"><i class="fab fa-youtube"></i></a>
                           <a href="https://www.facebook.com/" target="_blank" title="facebook"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <!-- spacer -->
                    <div class="pb-10 d-none d-lg-block"></div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- Blog-details-area end -->


@endsection

