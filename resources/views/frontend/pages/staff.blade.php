@extends('frontend.layouts.master')
@section('title')
    Staff Members
@endsection
@section('content')
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg"
        style="background-image: url({{ asset('frontend/assets/images/banner/breadcrumb.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Faculty</li>
                        </ul>
                        <h2 class="section-title">Faculty Directory</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="rts-faculty rts-section-padding">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-12 col-md-11">
                    <div class="rts-section mb--50">
                        <h3 class="rts-section-title">Faculty & Staff Directory</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center g-5">
                <!-- single staff item -->
                <div class="col-lg-6 col-md-11">
                    <div class="single-staff">
                        <div class="single-staff__content">
                            <div class="staf-image">
                                <img src="{{ asset('frontend/assets/images/faculty/01.jpg') }}" alt="staff-image">
                            </div>
                            <div class="staf-info">
                                <h5 class="name">Jennifer Aarons, PhD</h5>
                                <span class="designation">Assistant Professor</span>
                                <div class="staf-info__social">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-medium"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                                <a href="mailto:jenni@Unipixuni.edu" class="email-contact"><span><i
                                            class="fa-light fa-envelope"></i></span>jenni@Unipixuni.edu</a>
                                <a href="calltto:121" class="phone-contact"><span><i class="fa-light fa-phone"></i></span>+1
                                    2245 1247 241</a>
                                <div class="staf-info__speciality">
                                    <p>Hospitality, Tourism, Event Management and Esports</p>
                                </div>
                                <a href="faculty-details.html" class="rts-theme-btn border-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single staff item -->
                <div class="col-lg-6 col-md-11">
                    <div class="single-staff">
                        <div class="single-staff__content">
                            <div class="staf-image">
                                <img src="{{ asset('frontend/assets/images/faculty/02.jpg') }}" alt="staff-image">
                            </div>
                            <div class="staf-info">
                                <h5 class="name">Barry Palatnik, Ed.D</h5>
                                <span class="designation">Associate Professor of History</span>
                                <div class="staf-info__social">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-medium"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                                <a href="mailto:jenni@Unipixuni.edu" class="email-contact"><span><i
                                            class="fa-light fa-envelope"></i></span>jenni@Unipixuni.edu</a>
                                <a href="calltto:121" class="phone-contact"><span><i class="fa-light fa-phone"></i></span>+1
                                    2245 1247 241</a>
                                <div class="staf-info__speciality">
                                    <p>Hospitality, Tourism, Event Management and Esports</p>
                                </div>
                                <a href="faculty-details.html" class="rts-theme-btn border-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single staff item -->
                <div class="col-lg-6 col-md-11">
                    <div class="single-staff">
                        <div class="single-staff__content">
                            <div class="staf-image">
                                <img src="{{ asset('frontend/assets/images/faculty/03.jpg') }}" alt="staff-image">
                            </div>
                            <div class="staf-info">
                                <h5 class="name">Marc Robinson, MBA</h5>
                                <span class="designation">Teaching Specialist of Accounting</span>
                                <div class="staf-info__social">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-medium"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                                <a href="mailto:jenni@Unipixuni.edu" class="email-contact"><span><i
                                            class="fa-light fa-envelope"></i></span>jenni@Unipixuni.edu</a>
                                <a href="calltto:121" class="phone-contact"><span><i class="fa-light fa-phone"></i></span>+1
                                    2245 1247 241</a>
                                <div class="staf-info__speciality">
                                    <p>Hospitality, Tourism, Event Management and Esports</p>
                                </div>
                                <a href="faculty-details.html" class="rts-theme-btn border-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single staff item -->
                <div class="col-lg-6 col-md-11">
                    <div class="single-staff">
                        <div class="single-staff__content">
                            <div class="staf-image">
                                <img src="{{ asset('frontend/assets/images/faculty/04.jpg') }}" alt="staff-image">
                            </div>
                            <div class="staf-info">
                                <h5 class="name">Jennifer Aarons, PhD</h5>
                                <span class="designation">Assistant Professor</span>
                                <div class="staf-info__social">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-medium"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                                <a href="mailto:jenni@Unipixuni.edu" class="email-contact"><span><i
                                            class="fa-light fa-envelope"></i></span>jenni@Unipixuni.edu</a>
                                <a href="calltto:121" class="phone-contact"><span><i
                                            class="fa-light fa-phone"></i></span>+1 2245 1247 241</a>
                                <div class="staf-info__speciality">
                                    <p>Hospitality, Tourism, Event Management and Esports</p>
                                </div>
                                <a href="faculty-details.html" class="rts-theme-btn border-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single staff item -->
                <div class="col-lg-6 col-md-11">
                    <div class="single-staff">
                        <div class="single-staff__content">
                            <div class="staf-image">
                                <img src="{{ asset('frontend/assets/images/faculty/05.jpg') }}" alt="staff-image">
                            </div>
                            <div class="staf-info">
                                <h5 class="name">Chengzhang Wu, Ph.D</h5>
                                <span class="designation">Professor of Literature</span>
                                <div class="staf-info__social">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-medium"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                                <a href="mailto:jenni@Unipixuni.edu" class="email-contact"><span><i
                                            class="fa-light fa-envelope"></i></span>jenni@Unipixuni.edu</a>
                                <a href="calltto:121" class="phone-contact"><span><i
                                            class="fa-light fa-phone"></i></span>+1 2245 1247 241</a>
                                <div class="staf-info__speciality">
                                    <p>Hospitality, Tourism, Event Management and Esports</p>
                                </div>
                                <a href="faculty-details.html" class="rts-theme-btn border-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single staff item -->
                <div class="col-lg-6 col-md-11">
                    <div class="single-staff">
                        <div class="single-staff__content">
                            <div class="staf-image">
                                <img src="{{ asset('frontend/assets/images/faculty/06.jpg') }}" alt="staff-image">
                            </div>
                            <div class="staf-info">
                                <h5 class="name">Nancy Stempin, DBA</h5>
                                <span class="designation">Assistant Professor of Accounting</span>
                                <div class="staf-info__social">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-medium"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                                <a href="mailto:jenni@Unipixuni.edu" class="email-contact"><span><i
                                            class="fa-light fa-envelope"></i></span>jenni@Unipixuni.edu</a>
                                <a href="calltto:121" class="phone-contact"><span><i
                                            class="fa-light fa-phone"></i></span>+1 2245 1247 241</a>
                                <div class="staf-info__speciality">
                                    <p>Hospitality, Tourism, Event Management and Esports</p>
                                </div>
                                <a href="faculty-details.html" class="rts-theme-btn border-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single staff item -->
                <div class="col-lg-6 col-md-11">
                    <div class="single-staff">
                        <div class="single-staff__content">
                            <div class="staf-image">
                                <img src="{{ asset('frontend/assets/images/faculty/07.jpg') }}" alt="staff-image">
                            </div>
                            <div class="staf-info">
                                <h5 class="name">Michael McGarvey</h5>
                                <span class="designation">Professor of Art</span>
                                <div class="staf-info__social">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-medium"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                                <a href="mailto:jenni@Unipixuni.edu" class="email-contact"><span><i
                                            class="fa-light fa-envelope"></i></span>jenni@Unipixuni.edu</a>
                                <a href="calltto:121" class="phone-contact"><span><i
                                            class="fa-light fa-phone"></i></span>+1 2245 1247 241</a>
                                <div class="staf-info__speciality">
                                    <p>Hospitality, Tourism, Event Management and Esports</p>
                                </div>
                                <a href="faculty-details.html" class="rts-theme-btn border-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single staff item -->
                <div class="col-lg-6 col-md-11">
                    <div class="single-staff">
                        <div class="single-staff__content">
                            <div class="staf-image">
                                <img src="{{ asset('frontend/assets/images/faculty/08.jpg') }}" alt="staff-image">
                            </div>
                            <div class="staf-info">
                                <h5 class="name">C. Hannah Ueno</h5>
                                <span class="designation">Professor of Art</span>
                                <div class="staf-info__social">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-medium"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                                <a href="mailto:jenni@Unipixuni.edu" class="email-contact"><span><i
                                            class="fa-light fa-envelope"></i></span>jenni@Unipixuni.edu</a>
                                <a href="calltto:121" class="phone-contact"><span><i
                                            class="fa-light fa-phone"></i></span>+1 2245 1247 241</a>
                                <div class="staf-info__speciality">
                                    <p>Hospitality, Tourism, Event Management and Esports</p>
                                </div>
                                <a href="faculty-details.html" class="rts-theme-btn border-btn">More Details</a>
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
