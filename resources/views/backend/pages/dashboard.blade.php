@extends('backend.layouts.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="single_element">
                        <div class="quick_activity">
                            <div class="row">
                                <div class="col-12">
                                    <div class="quick_activity_wrap">
                                        <div class="single_quick_activity">
                                            <h4>Total Student</h4>
                                            <h3> <span class="counter">{{ $student ?? 0 }}</span> </h3>

                                        </div>
                                        <div class="single_quick_activity">
                                            <h4>Total Teacher</h4>
                                            <h3> <span class="counter">{{ $teacher ?? 0 }}</span> </h3>

                                        </div>
                                        <div class="single_quick_activity">
                                            <h4>Total Staff</h4>
                                            <h3><span class="counter">{{ $staff ?? 0 }}</span> </h3>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
