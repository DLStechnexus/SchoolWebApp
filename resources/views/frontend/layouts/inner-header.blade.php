<header class="header v__5 @@class header__sticky">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="header__wrapper">
                    <div class="header__logo">
                        <a href="{{ route('home') }}" class="header__logo--link">
                            @php
                                $logoSection = \App\Models\LogoSetting::first();
                            @endphp
                            @if ($logoSection)
                                <img src="{{ asset('upload/logo') }}/{{ $logoSection->logo_image }}" height="100px" width="100px" alt="unipix">
                            @else
                                <img src="{{ asset('frontend/assets/images/logo/logo__five.svg') }}" alt="unipix">
                            @endif
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
                                        <a href="{{ route('results') }}"
                                            class="navigation__menu--item__link">Results</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header__right">
                        <div class="header__right--item">
                            <div id="menu-btn" class="menu__trigger">
                                <img src="{{ asset('frontend/assets/images/icon/menu__bar-2.svg') }}" alt="bar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
