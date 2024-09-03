@extends('themes.helpyfinder.layouts.front')

@section('title') {{$page->meta_title}} @endsection
@section('meta') {{$page->meta_description}} @endsection

@section('content')
  
<div class="page-title-area pb-100 bg-light bg-img" data-bg-image="http://app.helpyfinder.com/themes/helpyfinder/assets/images/page-title-bg-1.jpg">
  <div class="container">
    <div class="content text-center">
      <h2>{{$page->meta_title}}</h2>
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$page->meta_title}}</li>
          </ol>
      </nav>
    </div>
  </div>
</div>

  {!!$page->body!!}

@endsection

