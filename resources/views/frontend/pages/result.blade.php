@extends('frontend.layouts.master')
@section('title')
    Student Results
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
                            <li class="breadcrumb-item active" aria-current="page">results</li>
                        </ul>
                        <h2 class="section-title">Results</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="rts-page-content rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="row sticky-coloum-wrap g-5">
                    <div class="col-lg-12">
                        <div class="rts-ap-section">
                            <h3 class="rts-section-title mb--30">Search Results</h3>
                            <div class="rts-application-form">
                                <form action="#">
                                    <div class="single-form-part">

                                        <div class="single-input">
                                            <div class="single-input-item">
                                                <label for="fname">Select Your Class</label>
                                                <select name="class_name" id="class_name">
                                                    <option value="">Select Class</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select>
                                            </div>
                                            <div class="single-input-item">
                                                <label for="roll_no">Roll No.</label>
                                                <input type="text" id="roll_no" placeholder="Roll Number">
                                            </div>
                                        </div>

                                    </div>

                                    <button type="submit" class="rts-theme-btn primary with-arrow">Search Result<span><i
                                                class="fa-thin fa-arrow-right"></i></span></button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 d-none">
                    <div class="admission-content-top">


                        <div class="application-deadline">
                            <h3 class="rts-section-title">Application Deadlines</h3>
                            <div class="application-deadline__content">
                                <div class="application-deadline__content--table">
                                    <table class="table">
                                        <thead class="table-theme">
                                            <tr>
                                                <td>Event</td>
                                                <td>Restrictive Early Action</td>
                                                <td>Regular Decision</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Standard Application Deadline</td>
                                                <td>November 1</td>
                                                <td>January 10</td>
                                            </tr>
                                            <tr>
                                                <td>Notification of Missing Documents</td>
                                                <td>Mid-November</td>
                                                <td>Mid-February</td>
                                            </tr>
                                            <tr>
                                                <td>Decision Released By</td>
                                                <td>Mid-December</td>
                                                <td>Early April</td>
                                            </tr>
                                            <tr>
                                                <td>Student Reply Date</td>
                                                <td>May 1</td>
                                                <td>May 1</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
