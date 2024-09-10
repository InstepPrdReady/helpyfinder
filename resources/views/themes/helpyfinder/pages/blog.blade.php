@extends('themes.helpyfinder.layouts.front')

@section('title') {{$blogsettings->meta_title}} @endsection
@section('meta') {{$blogsettings->meta_description}} @endsection

@section('content')


<!-- Page title start-->
<div class="page-title-area pb-100 bg-light bg-img"
    data-bg-image="http://app.helpyfinder.com/themes/helpyfinder/assets/images/banner/blog.png">
    <div class="container">
        <div class="content text-center">
            <h2>{{$blogsettings->meta_title}}</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="bread-link" href="{{ route('home') }}"
                            title="Home">{{clean(trans('instep-backend.home'), array('Attr.EnableID' => true))}}</a>
                    </li>
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
                                <img class="lazyload" src="/public/img/loading-blog.gif"
                                    data-src="{{$post->photo ? '/public/images/media/' . $post->photo->file : '/public/img/200x200.png'}}"
                                    alt="{{$post->title}}">
                            </a>
                        </div>
                        <div class="card-content radius-md p-25 text-center bg-white">
                            <h5 class="card-title lc-2 mb-15">
                                <a href="{{URL::to('/')}}/post/{{$post->slug}}" target="_self" title="Link">
                                    {{$post->title}}
                                </a>
                            </h5>
                            <a href="{{URL::to('/')}}/post/{{$post->slug}}" class="btn-text color-primary" target="_self"
                                title="Read More">Read
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
    </div>
</div>
<!-- Blog-area end -->

<!-- Newsletter area start -->
{!!$blogsettings->html_page_content!!}
<!-- Newsletter area end -->

@endsection