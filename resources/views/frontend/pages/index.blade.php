@extends('frontend.layouts.master')
@section('title')
    Home Page
@endsection
@section('content')
    <section class="about rts__padding--120-100 v__1">
        <div class="container">
            <div class="row justify-content-md-center align-items-center">
                <div class="col-lg-6 col-md-10">
                    <div class="about__images">
                        <div class="about__images--wrapper">
                            <div class="about__images--wrapper--left">
                                <img src="{{asset('frontend/assets/images/about/about__h1.png') }}" alt="">
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
                                <img src="{{asset('frontend/assets/images/about/about__h2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="about__content">
                        <h2 class="rts__title">About Our University unipix</h2>
                        <p class="rts__description">At University Unipix, we believe in the transformative power of
                            education and the boundless potential within every individual. Established in 1971, we have been
                            dedicated to fostering intellectual curiosity, academic excellence, and a vibrant campus
                            community.</p>
                        <div class="stroke__text v__1">EST. 1971</div>
                        <a href="javascript:void(0)" class="rts-nbg-btn btn-arrow">University Overview <span><i
                                    class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- funfact -->
        <div class="container rts__pt100">
            <div class="row justify-content-center">
                <div class="col-lg-12 rts-funfact v__1">
                    <div class="rts-funfact-wrapper">
                        <div class="single-cta-item">
                            <h2 class="single-cta-item__title">20,000</h2>
                            <p>undergraduate & graduate
                                students</p>
                        </div>
                        <div class="single-cta-item">
                            <h2 class="single-cta-item__title">16,214</h2>
                            <p>Schools Faculty
                                & Staff</p>
                        </div>
                        <div class="single-cta-item">
                            <h2 class="single-cta-item__title">300k</h2>
                            <p>Schools alumni
                                Worldwide</p>
                        </div>
                        <div class="single-cta-item">
                            <h2 class="single-cta-item__title">20,000</h2>
                            <p>undergraduate & graduate
                                students</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="rts__section rts__light rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts__section--wrapper">
                    <h2 class="rts__section--title">Our Programs</h2>
                    <div class="rts__section--link">

                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="rts__program--item" style="background-image: url({{ asset('frontend/assets/images/program/program__1.jpg') }});">
                        <h5 class="rts__program--item--title">Graduation Program</h5>
                        <p class="rts__program--item--description">Embark on a journey of knowledge discovery, and growth at
                            Schools.</p>
                        <a href="javascript:void(0)" class="rts-nbg-btn btn-arrow">Learn More<span><i
                                    class="fa-sharp fa-regular fa-arrow-right"></i>
                            </span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="rts__program--item" style="background-image: url({{ asset('frontend/assets/images/program/program__2.jpg') }});">
                        <h5 class="rts__program--item--title">Summer Program</h5>
                        <p class="rts__program--item--description">Embark on a journey of knowledge discovery, and growth at
                            Schools.</p>
                        <a href="javascript:void(0)" class="rts-nbg-btn btn-arrow">Learn More<span><i
                                    class="fa-sharp fa-regular fa-arrow-right"></i>
                            </span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="rts__program--item" style="background-image: url({{ asset('frontend/assets/images/program/program__3.jpg') }});">
                        <h5 class="rts__program--item--title">Undergraduate</h5>
                        <p class="rts__program--item--description">Embark on a journey of knowledge discovery, and growth at
                            Schools.</p>
                        <a href="javascript:void(0)" class="rts-nbg-btn btn-arrow">Learn More<span><i
                                    class="fa-sharp fa-regular fa-arrow-right"></i>
                            </span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="rts__program--item" style="background-image: url({{ asset('frontend/assets/images/program/program__4.jpg') }});">
                        <h5 class="rts__program--item--title">Online Program</h5>
                        <p class="rts__program--item--description">Embark on a journey of knowledge discovery, and growth at
                            Schools.</p>
                        <a href="javascript:void(0)" class="rts-nbg-btn btn-arrow">Learn More<span><i
                                    class="fa-sharp fa-regular fa-arrow-right"></i>
                            </span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="rts__section rts__light rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts__section--wrapper">
                    <h2 class="rts__section--title">University Professors</h2>
                    <div class="rts__section--link">

                    </div>
                </div>
            </div>
            <!-- team member area -->
            <div class="row g-5">
                <!-- single team -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="rts__single--member">
                        <div class="rts__single--member--thumb">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('frontend/assets/images/speaker/teacher__1.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="rts__single--member--meta">
                            <h5 class="rts__single--member--meta--title">
                                <a href="javascript:void(0)">C. Hannah Ueno</a>
                            </h5>
                            <span class="rts__single--member--meta--designation">
                                Assistant Professor
                            </span>
                        </div>
                    </div>
                </div>
                <!-- single team end -->
                <!-- single team -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="rts__single--member">
                        <div class="rts__single--member--thumb">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('frontend/assets/images/speaker/teacher__2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="rts__single--member--meta">
                            <h5 class="rts__single--member--meta--title">
                                <a href="javascript:void(0)">Thomas Fred</a>
                            </h5>
                            <span class="rts__single--member--meta--designation">
                                Associate Professor of History
                            </span>
                        </div>
                    </div>
                </div>
                <!-- single team end -->
                <!-- single team -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="rts__single--member">
                        <div class="rts__single--member--thumb">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('frontend/assets/images/speaker/teacher__3.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="rts__single--member--meta">
                            <h5 class="rts__single--member--meta--title">
                                <a href="javascript:void(0)">Jennifer Aarons</a>
                            </h5>
                            <span class="rts__single--member--meta--designation">
                                Professor of Art
                            </span>
                        </div>
                    </div>
                </div>
                <!-- single team end -->
                <!-- single team -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="rts__single--member">
                        <div class="rts__single--member--thumb">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('frontend/assets/images/speaker/teacher__4.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="rts__single--member--meta">
                            <h5 class="rts__single--member--meta--title">
                                <a href="javascript:void(0)">Michael McGarvey</a>
                            </h5>
                            <span class="rts__single--member--meta--designation">
                                Professor of Literature
                            </span>
                        </div>
                    </div>
                </div>
                <!-- single team end -->
            </div>
            <!-- team member area end -->
        </div>
    </section>




@endsection
@section('script')
@endsection
