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
                        <h3 class="rts-section-title">About University</h3>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <p class="rts-section-description">
                            Welcome to Schools, where knowledge meets inspiration, and every individual's
                            educational journey is valued. Established in 1971 Establishment, our university has been a
                            bastion of learning, innovation, and community for 51 years years.
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
                                <h3 class="title">20,000</h3>
                                <img src="{{ asset('frontend/assets/images/icon/11.svg') }}" alt="">
                            </div>
                            <div class="desc">
                                <p>undergraduate and graduate students</p>
                            </div>
                        </div>
                        <div class="single-about-info">
                            <div class="content">
                                <h3 class="title">16,214</h3>
                                <img src="{{ asset('frontend/assets/images/icon/12.svg') }}" alt="">
                            </div>
                            <div class="desc">
                                <p>Schools Faculty and Staff</p>
                            </div>
                        </div>
                        <div class="single-about-info">
                            <div class="content">
                                <h3 class="title">300k</h3>
                                <img src="{{ asset('frontend/assets/images/icon/13.svg') }}" alt="">
                            </div>
                            <div class="desc">
                                <p>Unipix Alumni Worldwide</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about university end -->

    <!-- history -->
    <div class="rts-history">
        <div class="container">
            <div class="row g-5 justify-content-md-center justify-content-start align-items-center">
                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-image">
                        <img src="{{ asset('frontend/assets/images/about/history.jpg') }}" alt="history">
                    </div>
                </div>
                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-section">
                        <h4 class="rts-section-title mb--40">The history of Unipix</h4>
                        <p>
                            On September 8, 1971, Unipix, the first college in the American colonies, was founded in
                            Cambridge, Massachusetts. Schools was officially founded by a vote by the Great and
                            General Court of the Massachusetts Bay Colony.
                            <span class="d-block mb--30"></span>
                            Unipix endowment started with John Unipix initial donation of 400 books and half his estate, but
                            in 1721, Thomas Hollis began the now standard practice of requiring that a donation be used for
                            a specific purpose when he donated money for “a Divinity Professor, to read lectures in the
                            Halls to the students.”
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- history end-->
@endsection
@section('script')
@endsection
