<div class="container-fluid g-0">
    <div class="row">
        <div class="p-0 col-lg-12">
            <div class="header_iner d-flex justify-content-between align-items-center">
                <div class="sidebar_icon d-lg-none">
                    <i class="ti-menu"></i>
                </div>
                <div class="serach_field-area">
                    <div class="search_inner">
                        <h4>WelCome to the Admin Dashboard!!</h4>
                    </div>
                </div>
                <div class="header_right d-flex justify-content-between align-items-center">
                    <div class="header_notification_warp d-flex align-items-center">
                        {{-- <li>
                            <a href="#"> <img src="{{ asset('backend/img/icon/bell.svg') }}" alt> </a>
                        </li>
                        <li>
                            <a href="#"> <img src="{{ asset('backend/img/icon/msg.svg') }}" alt> </a>
                        </li> --}}
                    </div>
                    <div class="profile_info">
                      
                        @if (auth()->user()->user_details->profile_image)
                            <img src="{{ asset('upload/students') }}/{{ auth()->user()->user_details->profile_image }}"
                                height="120px" width="120px" class="rounded-circle">
                        @else
                            <img src="{{ asset('backend/img/messages/1.png') }}" height="120px" width="120px"
                                class="rounded-circle">
                        @endif
                        <div class="profile_info_iner">
                            <p>Welcome Admin!</p>
                            <h5>{{ auth()->user()->name }}</h5>
                            <div class="profile_info_details">
                                <a href="#">My Profile <i class="ti-user"></i></a>

                                <a href="{{ route('logout') }}">Log Out <i class="ti-shift-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
