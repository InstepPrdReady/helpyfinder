@extends('themes.helpyfinder.layouts.front')

@section('title') {{$post->meta_title}} @endsection
@section('meta') {{$post->meta_description}} @endsection

@section('content')
  
<?php //echo "<pre>"; print_r($post); ?>
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
                                <img class="lazyload" src="{{ route('home') }}/{{$post->photo ? '/images/media/' . $post->photo->file : '/public/img/200x200.png'}}"
								data-src="{{ route('home') }}/{{$post->photo ? '/images/media/' . $post->photo->file : '/public/img/200x200.png'}}" alt="{{$post->title}}">
                            </div>
                            <a style="display:none;" href="{{URL::to('/')}}/post/{{$post->slug}}" title="Share Now" target="_self" class="btn btn-md btn-primary"><i class="fas fa-share-alt"></i>Share Now</a>
                        </div>
                        <div class="content">
                            <ul class="info-list">
                                <li><i class="fal fa-user"></i>Admin</li>
                                <li><i class="fal fa-calendar"></i>{{ date('d M Y', strtotime($post->created_at)) }}</li>
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
                        @foreach($recent_posts as $post)
                            <article class="article-item mb-30">
                                <div class="image">
                                    <a href="{{URL::to('/')}}/blog/{{$post->slug}}" class="lazy-container ratio ratio-5-4">
                                        <img class="lazyload" src="{{ route('home') }}/{{$post->photo ? '/images/media/' . $post->photo->file : '/img/200x200.png'}}"
                                            data-src="{{ route('home') }}/{{$post->photo ? '/images/media/' . $post->photo->file : '/img/200x200.png'}}" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="lc-2">
                                        <a href="{{URL::to('/')}}/blog/{{$post->slug}}">{{$post->title}}</a>
                                    </h6>
                                    <ul class="info-list">
                                        <li><i class="fal fa-user"></i>Admin</li>
                                        <li><i class="fal fa-calendar"></i>{{ date('d M Y', strtotime($post->created_at)) }}</li>
                                    </ul>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <div class="widget widget-blog-categories mb-30 p-30 border radius-md" style="display:none;">
                        <h4 class="title mb-15">Categories</h4>
                        <ul class="list-unstyled m-0">
                            @foreach($post_categories as $category)
                                <li class="d-flex align-items-center justify-content-between">
                                    <a href="blogs.html"><i class="fal fa-folder"></i>{{ $category->name }}</a>
                                    <!-- <span class="tqy">(11)</span> -->
                                </li>
                            @endforeach
                           
                        </ul>
                    </div>
                    
                    <div class="widget widget-social-link mb-30 p-30 border radius-md">
                    {!!$blogsettings->html_sidebar2!!}
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

