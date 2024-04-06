@extends('frontend.layouts.master')
@section('title')
    Home Page
@endsection
@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('frontend/assets/images/banner/slider1.jpg') }}" style="width:1700px;height:550px"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('frontend/assets/images/banner/slider__5.jpg') }}" style="width:1700px;height:550px"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('frontend/assets/images/banner/slider__5-2.jpg') }}" style="width:1700px;height:550px"
                    alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="about rts__padding--120-100 v__1">
        <div class="container">
            <div class="row justify-content-md-center align-items-center">
                <div class="col-lg-6 col-md-10">
                    <div class="about__images">
                        <div class="about__images--wrapper">
                            <div class="about__images--wrapper--left">
                                <img src="{{ asset('frontend/assets/images/about/about__h1.png') }}" alt="">
                            </div>
                            <div class="about__images--wrapper--center">
                                <div class="rts__circle v__1">
                                    <svg class="spinner" viewBox="0 0 100 100">
                                        <defs>
                                            <path id="circle-2" d="M50,50 m-37,0a37,37 0 1,1 74,0a37,37 0 1,1 -74,0">
                                            </path>
                                        </defs>
                                        <text>
                                            <textPath xlink:href="#circle-2">Schools * Estd. 1971 * Explore Future
                                                *</textPath>
                                        </text>
                                    </svg>
                                    <div class="rts__circle--icon">
                                        <i class="fa-light fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="about__images--wrapper--right">
                                <img src="{{ asset('frontend/assets/images/about/about__h2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="about__content">
                        @php
                            $logoSection = \App\Models\LogoSetting::first();
                        @endphp
                        <h2 class="rts__title">About Our School {{ $logoSection->school_name }} </h2>
                        <p class="rts__description">{{ $aboutUs->about_us ?? '' }}</p>
                        {{-- <a href="javascript:void(0)" class="rts-nbg-btn btn-arrow">University Overview <span><i
                                    class="fa-sharp fa-regular fa-arrow-right"></i></span></a> --}}
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <h3 class="text-center">Some Fun Facts</h3>
        <p class="text-center">Empowering Minds, Building Futures: Educating the Leaders of Tomorrow.</p>
        <div class="container rts__pt100">
            <div class="row justify-content-center">
                <div class="col-lg-12 rts-funfact v__1">
                    <div class="rts-funfact-wrapper">
                        <div class="single-cta-item">
                            <h2 class="single-cta-item__title">{{ $student ?? '0' }}</h2>
                            <p>
                                Students</p>
                        </div>
                        <div class="single-cta-item">
                            <h2 class="single-cta-item__title">{{ $teacher ?? '0' }}</h2>
                            <p>Teachers</p>
                        </div>
                        <div class="single-cta-item">
                            <h2 class="single-cta-item__title">{{ $staff ?? '0' }}</h2>
                            <p>Other Staff</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="rts__section rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="rts__section--wrapper v__2">
                        <h2 class="rts__section--title">School Life</h2>
                        <p class="rts__section--description">Embark on a journey of knowledge, discovery, and growth at
                            Unipix University. Our admissions process is designed identify bright, motivated individuals who
                            are eager contribute to our dynamic academic community.</p>
                        <div class="campus__vector">
                            <img src="{{ asset('frontend/assets/images/campus/campus__vector.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="campus__life">
                        <!-- single campus -->
                        <div class="campus__life--single">
                            <div class="campus__life--single--bg">
                                <img src="{{ asset('frontend/assets/images/campus/campus__life__bg__1.jpg') }}"
                                    alt="">
                            </div>
                            <div class="campus__life--single--flex">
                                <div class="campus__life--single--content">
                                    <h4 class="campus__life--single--title"><a href="javascript:void(0)">Student Life</a>
                                    </h4>
                                    <p class="campus__life--single--description">Building a vibrant community of creative
                                        and accomplished people from around.</p>
                                </div>
                                <div class="campus__life--single--button">
                                    <a href="javascript:void(0)"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- single campus end -->
                        <!-- single campus -->
                        <div class="campus__life--single">
                            <div class="campus__life--single--bg">
                                <img src="{{ asset('frontend/assets/images/campus/campus__life__bg__2.jpg') }}"
                                    alt="">
                            </div>
                            <div class="campus__life--single--flex">
                                <div class="campus__life--single--content">
                                    <h4 class="campus__life--single--title"><a href="javascript:void(0)">Arts & Culture</a>
                                    </h4>
                                    <p class="campus__life--single--description">Building a vibrant community of creative
                                        and accomplished people from around.</p>
                                </div>
                                <div class="campus__life--single--button">
                                    <a href="javascript:void(0)"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- single campus end -->
                        <!-- single campus -->
                        <div class="campus__life--single">
                            <div class="campus__life--single--bg">
                                <img src="{{ asset('frontend/assets/images/campus/campus__life__bg__3.jpg') }}"
                                    alt="">
                            </div>
                            <div class="campus__life--single--flex">
                                <div class="campus__life--single--content">
                                    <h4 class="campus__life--single--title"><a href="javascript:void(0)">Athletics</a>
                                    </h4>
                                    <p class="campus__life--single--description">Building a vibrant community of creative
                                        and accomplished people from around.</p>
                                </div>
                                <div class="campus__life--single--button">
                                    <a href="javascript:void(0)"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- single campus end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="rts__section rts__light rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts__section--wrapper">
                    <h2 class="rts__section--title">You're Learning Free Started Today!</h2>
                    <div class="rts__section--link">
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <h1></h1>
                <p class=" text-dark">You're Learning Free Started Today!
                    Discovering the joy of learning, nurturing creativity, and fostering critical thinking skills to
                    empower our students as lifelong learners and leaders who make a positive impact on the world
                    around them. At our school, we believe in creating a culture of excellence through rigorous
                    academics, innovative teaching, and personalized support for each student's unique journey.</p>
            </div>
        </div>
    </section>

    <section class="rts__section rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="rts__section--wrapper v__2">
                        <h2 class="rts__section--title">Important Notice</h2>
                        <p class="rts__section--description">Embark on a journey of knowledge, discovery, and growth at
                            Unipix University. Our admissions process is designed identify bright, motivated individuals who
                            are eager contribute to our dynamic academic community.</p>

                    </div>
                </div>
                <div class="col-lg-7 col-md-6">

                    <img src="{{ asset('frontend/assets/images/notice.jpg') }}" alt="">

                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
