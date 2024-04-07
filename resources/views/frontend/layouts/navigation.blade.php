<header class="header header__sticky v__1  d-none">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="header__wrapper">
                    <div class="header__logo">
                        <a href="{{ route('home') }}" class="header__logo--link">
                            <img src="{{ asset('frontend/assets/images/logo/logo__white.svg') }}" alt="unipix">
                        </a>
                    </div>
                    <div class="header__menu">
                        <div class="navigation">
                            <nav class="navigation__menu">
                                <ul>
                                    <li class="navigation__menu--item">
                                        <a href="{{ route('home') }}" class="navigation__menu--item__link">Home</a>
                                    </li>
                                    <li class="navigation__menu--item">
                                        <a href="{{ route('aboutus') }}" class="navigation__menu--item__link">About
                                            School</a>
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
                                        <a href="{{ route('results') }}"
                                            class="navigation__menu--item__link">Results</a>
                                    </li>
                                    <li class="navigation__menu--item">
                                        <a href="https://upmsp.edu.in/" target="_blank"
                                            class="navigation__menu--item__link">UPMSP</a>
                                    </li>
                                    <li class="navigation__menu--item">
                                        <a href="http://www.scholarship.up.gov.in/" target="_blank"
                                            class="navigation__menu--item__link">Scholarship</a>
                                    </li>
                                    <li class="navigation__menu--item">
                                        <a href="{{ route('admission.create') }}"
                                            class="navigation__menu--item__link">New Admission</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header__right">
                        <div class="header__right--item">
                            <div id="menu-btn" class="menu__trigger">
                                <img src="{{ asset('frontend/assets/images/icon/bar__line.svg') }}" alt="bar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
