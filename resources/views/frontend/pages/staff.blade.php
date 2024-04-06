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
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
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
                @if (!empty($staffs))
                    @foreach ($staffs as $key => $staff)
                        <div class="col-lg-6 col-md-11">
                            <div class="single-staff">
                                <div class="single-staff__content">

                                    <div class="staf-image">
                                        @if ($staff->user_details->profile_image)
                                            <img src="{{ asset('upload/staff') }}/{{ $staff->user_details->profile_image }}"
                                                alt="unipix">
                                        @else
                                            <img src="{{ asset('frontend/assets/images/faculty/01.jpg') }}"
                                                alt="staff-image">
                                        @endif

                                    </div>
                                    <div class="staf-info">
                                        <h5 class="name">{{ $staff->name ?? '' }}</h5>
                                        <span class="designation">
                                            @if ($staff->role_id == 2)
                                                Teacher
                                            @elseif ($staff->role_id == 3)
                                                Peon
                                            @else
                                                Other
                                            @endif
                                        </span>

                                        <a href="mailto:{{ $staff->email }}" class="email-contact"><span><i
                                                    class="fa-light fa-envelope"></i></span>{{ $staff->email }}</a>
                                        <a href="calltto:121" class="phone-contact"><span><i
                                                    class="fa-light fa-phone"></i></span>{{ $staff->user_details->mobile_number }}</a>
                                        <div class="staf-info__speciality">
                                            <p>{{ $staff->user_details->qualification }}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif


            </div>

        </div>
    </section>
@endsection
@section('script')
@endsection
