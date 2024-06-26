<!-- footer -->
<footer class="footer v__1">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__widget">
                    @php
                        $logoSection = \App\Models\LogoSetting::first();
                    @endphp
                    <div class="footer__widget--logo">
                        @if ($logoSection)
                            <a href="{{ route('home') }}"><img
                                    src="{{ asset('upload/logo') }}/{{ $logoSection->logo_image }}" height="100px"
                                    width="100px" alt="unipix"></a>
                        @else
                            <a href="{{ route('home') }}"><img
                                    src="{{ asset('frontend/assets/images/logo/logo__five.svg') }}" alt="unipix"></a>
                        @endif

                    </div>
                    <p class="footer__widget--description">
                        We are passionate education dedicated to providing high-quality resources learners
                        all backgrounds.
                    </p>
                    <div class="footer__widget--social">
                        {{-- <ul class="social">
                            <li class="social__link"><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li class="social__link"><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li class="social__link"><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                            <li class="social__link"><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h6 class="footer__widget--title">Our Campus</h6>
                    <div class="footer__widget--menu">
                        <ul>
                            <li><a href="{{ route('staff') }}">Staff Member</a></li>
                            <li><a href="{{ route('results') }}">Results</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h6 class="footer__widget--title">Quick Links</h6>
                    <div class="footer__widget--menu">
                        <ul>
                            <li><a href="{{ route('aboutus') }}">About Us</a></li>
                            <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                            <li><a href="{{ route('gallery') }}">Gallery</a></li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<!-- footer end -->

<!-- footer copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="copyright__wrapper">
                    <p>Copyright &copy; 2024 All Rights Reserved by Design & Developed By
                        R-Tech</p>
                </div>
            </div>
        </div>
    </div>
</div>
