@extends('themes.helpyfinder.layouts.front')

@section('title') {{$homesetting->meta_title}} @endsection
@section('meta') {{$homesetting->meta_description}} @endsection

@section('content')
{!!$homesetting->about_description!!}
@endsection

