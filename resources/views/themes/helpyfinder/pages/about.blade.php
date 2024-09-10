@extends('themes.helpyfinder.layouts.front')

@section('title') {{$aboutsetting->meta_title}} @endsection
@section('meta') {{$aboutsetting->meta_description}} @endsection

@section('styles')
<link href="{{ asset('css/front/magnific.min.css')}}" type="text/css" rel="stylesheet">
@endsection

@section('content')

<!-- Page title start-->
<div class="page-title-area pb-100 bg-light bg-img about-section-main">
    <div class="container">
        <div class="content text-center">
            <h2>{{$aboutsetting->meta_title}}</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="bread-link" href="{{ route('home') }}"
                            title="Home">{{clean(trans('instep-backend.home'), array('Attr.EnableID' => true))}}</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{$aboutsetting->meta_title}}</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page title end-->
  
{!!$aboutsetting->about_description!!}

@endsection

