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
                {{-- <div class="row sticky-coloum-wrap g-5">
                    <div class="col-lg-12">
                        <div class="rts-ap-section">
                            <h3 class="rts-section-title mb--30">Search Results</h3>
                            <div class="rts-application-form">
                                <form action="#">
                                    <div class="single-form-part">
                                        <div class="single-input">
                                            <div class="single-input-item">
                                                <label for="fname">Select Your Class</label>
                                                <select name="class_standard" id="class_standard" style="height:52px">
                                                    <option value="">Select Class Standard</option>
                                                    <option value="Nursery">Nursery</option>
                                                    <option value="LKG">LKG</option>
                                                    <option value="UKG">UKG</option>
                                                    <option value="1st Class">1st Class</option>
                                                    <option value="2nd Class">2nd Class</option>
                                                    <option value="3rd Class">3rd Class</option>
                                                    <option value="4th Class">4th Class</option>
                                                    <option value="5th Class">5th Class</option>
                                                    <option value="6th Class">6th Class</option>
                                                    <option value="7th Class">7th Class</option>
                                                    <option value="8th Class">8th Class</option>
                                                </select>
                                            </div>
                                            <div class="single-input-item">
                                                <label for="fname">Select Session</label>
                                                <select name="yearly_session" id="yearly_session" style="height:52px">
                                                    <option value="">Select Session </option>
                                                    <option value="2023-24">2023-24</option>
                                                    <option value="2024-25">2024-25</option>
                                                    <option value="2025-26">2025-26</option>
                                                    <option value="2026-27">2026-27</option>
                                                    <option value="2027-28">2027-28</option>
                                                    <option value="2028-29">2028-29</option>
                                                </select>
                                            </div>
                                            <div class="single-input-item">
                                                <label for="fname">Select Exam Type</label>
                                                <select name="exam_type" id="exam_type"style="height:52px">
                                                    <option value="">Select Exam Type</option>
                                                    <option value="Quarterly ">Quarterly</option>
                                                    <option value="Half yearly">Half yearly</option>
                                                    <option value="Annually">Annually</option>
                                                    <option value="Class Test">Class Test</option>
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
                </div> --}}
                <a href="{{ route('results') }}">Go Back</a>
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Name -:{{ $results->users->name }}</h4>
                        <h4>Roll No. -:{{ $results->users->user_unique_id }}</h4>
                    </div>
                    <div class="col-sm-6 text-end">
                        <h4>Class Standard -:{{ $results->class_standard }}</h4>
                        <h4>Session -:{{ $results->year_session }}</h4>
                        <h4>Exam Type -:{{ $results->exam_type }}</h4>
                    </div>
                </div>

                <div class="col-12 ">
                    <div class="admission-content-top">
                        <div class="application-deadline">
                            <h3 class="rts-section-title">Your Result</h3>
                            <div class="application-deadline__content">
                                <div class="application-deadline__content--table">
                                    <table class="table">
                                        <thead class="table-theme">
                                            <tr>
                                                <td>Subject</td>
                                                <td>Out of Marks</td>
                                                <td>Obtain Marks</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($results->marks))
                                                @foreach ($results->marks as $result)
                                                    <tr>
                                                        <td>{{ $result->subject_name }}</td>
                                                        <td>{{ $result->out_of_marks }}</td>
                                                        <td>{{ $result->obtain_marks }}</td>
                                                    </tr>
                                                @endforeach
                                            @endif

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
