<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from html.themewant.com/unipix/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2024 12:09:53 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Website | @yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/fav.png') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/animate.min.css') }}">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/fontawesome.min.css') }}">
    <!-- bootstrap min css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css') }}">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/swiper.min.css') }}">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/magnific-popup.css') }}">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/metismenu.css') }}">
    <!-- nice select js -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/jquery-ui.css') }}">
    <!-- custom style css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
</head>

<body class="page">
    @include('frontend.layouts.navigation')
    @include('frontend.layouts.inner-header');
    @yield('content')
    @include('frontend.layouts.footer')
    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="inner-main-wrapper-desk">
            <div class="thumbnail">
                <img src="assets/images/logo/logo__five.svg" alt="Unipix-university">
            </div>
            <div class="inner-content">
                <p class="disc">
                    A modern HTML template for education, offering intuitive design & essential features for seamless
                    learning experiences.
                </p>
                <!-- offcanvase banner -->
                <div class="offcanvase__banner mt--50">
                    <div class="offcanvase__banner--content">
                        <img src="assets/images/offcanvase.jpg" alt="offcanvase">
                        {{-- <a href="javscript:void(0)" class="rts-theme-btn">Apply Now</a> --}}
                    </div>
                </div>
                <div class="offcanvase__info">
                    <div class="offcanvase__info--content">
                        <a href="callto:+61485826710"><span><i class="fa-sharp fa-light fa-phone"></i></span>+(61)
                            485-826-710</a>
                        <a href="#"><span><i class="fa-sharp fa-light fa-location-dot"></i></span>Yarra Park,
                            Melbourne, Australia</a>
                        <div class="offcanvase__info--content--social">
                            <p class="title">Follow Us:</p>
                            <div class="social__links">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu-main">
            <nav class="navigation__menu">
                <ul>
                    <li class="navigation__menu--item">
                        <a href="{{ route('home') }}" class="navigation__menu--item__link">Home</a>
                    </li>
                    <li class="navigation__menu--item">
                        <a href="{{ route('aboutus') }}" class="navigation__menu--item__link">About
                            Us</a>
                    </li>
                    <li class="navigation__menu--item">
                        <a href="{{ route('contactus') }}" class="navigation__menu--item__link">Contact
                            Us</a>
                    </li>
                    <li class="navigation__menu--item">
                        <a href="{{ route('gallery') }}" class="navigation__menu--item__link">Photo
                            Gallery</a>
                    </li>
                    <li class="navigation__menu--item">
                        <a href="{{ route('staff') }}" class="navigation__menu--item__link">Staff</a>
                    </li>
                    <li class="navigation__menu--item">
                        <a href="{{ route('results') }}" class="navigation__menu--item__link">Results</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- mobile menu area end -->
    </div>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!-- rts back to top end -->
    <div id="anywhere-home" class="">
    </div>
    <!-- scripts -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery.min.js') }}"></script>
    <!-- bootstrap 5.0.2 -->
    <script src="{{ asset('frontend/assets/js/plugins/bootstrap.min.js') }}"></script>
    <!-- jquery ui js -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-ui.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('frontend/assets/js/vendor/waw.js') }}"></script>
    <!-- mobile menu -->
    <script src="{{ asset('frontend/assets/js/vendor/metismenu.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('frontend/assets/js/vendor/magnifying-popup.js') }}"></script>
    <!-- swiper JS 10.2.0 -->
    <script src="{{ asset('frontend/assets/js/plugins/swiper.js') }}"></script>
    <!-- counterup -->
    <script src="{{ asset('frontend/assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/waypoint.js') }}"></script>
    <!-- isotop mesonary -->
    <script src="{{ asset('frontend/assets/js/plugins/isotop.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/sticky-sidebar.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/resize-sensor.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/twinmax.js') }}"></script>
    <!-- dymanic Contact Form -->
    <script src="{{ asset('frontend/assets/js/plugins/contact.form.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/nice-select.min.js') }}"></script>
    <!-- main Js -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    @yield('script');
</body>
<!-- Mirrored from html.themewant.com/unipix/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2024 12:10:04 GMT -->

</html>
