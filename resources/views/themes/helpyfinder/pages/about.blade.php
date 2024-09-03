@extends('themes.helpyfinder.layouts.front')

@section('title') {{$aboutsetting->meta_title}} @endsection
@section('meta') {{$aboutsetting->meta_description}} @endsection

@section('styles')
<link href="{{ asset('css/front/magnific.min.css')}}" type="text/css" rel="stylesheet">
@endsection

@section('content')
  
{!!$aboutsetting->about_description!!}

@endsection

