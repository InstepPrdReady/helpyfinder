@extends('themes.helpyfinder.layouts.front')

@section('title') {{$page->meta_title}} @endsection
@section('meta') {{$page->meta_description}} @endsection

@section('content')

<div class="page-title-area pb-100 bg-light bg-img @if($page->header_banner_view == 0) disable-header-banner @endif"
  data-bg-image="/themes/helpyfinder/assets/images/banner/page-title-bg.png" style="object-fit: cover; background-position: center;">
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

<div class="page-body-content @if($page->header_banner_view == 0) without-header-banner @endif">
  @if($page->page_full_width == 1)
    <div class="container-fluid">
      {!!$page->body!!}
    </div>
    @else
      <div class="container">
      {!!$page->body!!}
      </div>
  @endif
</div>

@endsection