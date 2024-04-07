@extends('frontend.layouts.master')
@section('title')
    About Us
@endsection
@section('content')
    <!-- BREADCRUMB AREA -->
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg"
        style="background-image: url({{ asset('frontend/assets/images/banner/breadcrumb.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">about</li>
                        </ul>
                        <h2 class="section-title">About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BREADCRUMB AREA END -->


    <!-- about university -->
    <section class="rts-about-university rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts-section">
                    <div class="col-lg-4 col-md-5">
                        <h3 class="rts-section-title">About School {{ $logoSection->school_name ?? '' }}</h3>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <p class="rts-section-description">
                            {{ $aboutUs->about_us ?? '' }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-5 justify-content-md-center justify-content-start">
                <div class="col-lg-7 col-xl-8 col-md-11">
                    <div class="rts-about-section">
                        <img src="{{ asset('frontend/assets/images/about/about-01.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 col-md-11">
                    <div class="rts-about-details">
                        <div class="single-about-info">
                            <div class="content">
                                <h3 class="title">{{ $student ?? 0 }}</h3>
                                <img src="{{ asset('frontend/assets/images/icon/11.svg') }}" alt="">
                            </div>
                            <div class="desc">
                                <p>Students</p>
                            </div>
                        </div>
                        <div class="single-about-info">
                            <div class="content">
                                <h3 class="title">{{ $teacher ?? 0 }}</h3>
                                <img src="{{ asset('frontend/assets/images/icon/12.svg') }}" alt="">
                            </div>
                            <div class="desc">
                                <p>Teacher </p>
                            </div>
                        </div>
                        <div class="single-about-info">
                            <div class="content">
                                <h3 class="title">{{ $staff ?? 0 }}</h3>
                                <img src="{{ asset('frontend/assets/images/icon/13.svg') }}" alt="">
                            </div>
                            <div class="desc">
                                <p>Schools Staff </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
@endsection
