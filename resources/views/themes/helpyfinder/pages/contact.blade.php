@extends('themes.helpyfinder.layouts.front')

@section('title') {{$contactsetting->meta_title}} @endsection
@section('meta') {{$contactsetting->meta_description}} @endsection

@section('content')

<!-- Page title start-->
<div class="page-title-area pb-100 bg-light bg-img contact-section-main">
    <div class="container">
        <div class="content text-center">
            <h2>{{$contactsetting->meta_title}}</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="bread-link" href="{{ route('home') }}"
                            title="Home">{{clean(trans('instep-backend.home'), array('Attr.EnableID' => true))}}</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{$contactsetting->meta_title}}</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page title end-->

<!-- Contact-area start -->
<div class="contact-area pt-100 pb-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 d-flex">
                <div class="card mb-30 color-1" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon">
                        {!!$contactsetting->box_icon1!!}
                    </div>
                    <div class="card-text">
                        <p>{!!$contactsetting->box_title1!!}</p>
                        {!!$contactsetting->box_html1!!}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 d-flex">
                <div class="card mb-30 color-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon">
                        {!!$contactsetting->box_icon2!!}
                    </div>
                    <div class="card-text">
                        <p>{!!$contactsetting->box_title2!!}</p>
                        {!!$contactsetting->box_html2!!}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 d-flex">
                <div class="card mb-30 color-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon">
                        {!!$contactsetting->box_icon3!!}
                    </div>
                    <div class="card-text">
                        <p>{!!$contactsetting->box_title3!!}</p>
                        {!!$contactsetting->box_html3!!}
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-70"></div>

        <div class="row gx-xl-5">
            <div class="section-title title-center mb-50" data-aos="fade-up">
                <h2 class="title mb-0">
                    {!!$contactsetting->title!!}
                </h2>
            </div>
            <div class="col-lg-6 mb-40" data-aos="fade-up">
                <!--hs form-->
                <div style="width: 100% !important; border: 0;" class="Contact-hubspotForm">
                    @shortcode('hubspotForm')
                </div>
            </div>
            <div class="col-lg-6 mb-40" data-aos="fade-up">
                <div class="map radius-md h-100 overflow-hidden">
                    {!!$contactsetting->iframe_txt!!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact-area end -->

<!-- Newsletter area start -->
{!!$contactsetting->custom_html_content!!}
<!-- Newsletter area end -->


@endsection

<style>
    .contact-us-map iframe {
        width: 100%;
    }

    .input input,
    .input textarea {
        color: #fff;
        background-color: #222227 !important;
        background-clip: padding-box;
        border: 1px solid #222227;
        border-radius: 12px;
    }

    .hbspt-form .hs-form {
        width: 100%;
        border: 1px solid #222227;
        padding: 20px;
        border-radius: 12px;
        box-sizing: border-box;
    }

    form#hsForm_27fca3ab-e7cb-47a9-a4d0-d4173328f3fa label {
        color: #ffffff !important;
    }
</style>