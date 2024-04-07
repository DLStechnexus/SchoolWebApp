@extends('frontend.layouts.master')
@section('title')
    New Admission
@endsection
@section('content')
    <div class="rts-page-content">
        <div class="container">
            <div class="row sticky-coloum-wrap g-5 mt--45">
                <div class="col-lg-12">
                    <div class="rts-ap-section">
                        <h3 class="rts-section-title mb--30">New Admission Application</h3>
                        @include('alert')
                        <div class="rts-application-form">
                            <form method="post" action="{{ route('admission.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="single-form-part">
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="prifile_image">Profile Image</label>
                                            <input type="file" id="prifile_image" name="prifile_image"
                                                placeholder="First name">
                                        </div>
                                    </div>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="first_name">First Name</label>
                                            <input type="text" id="first_name" name="first_name"
                                                placeholder="First name">
                                        </div>
                                        <div class="single-input-item">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" id="last_name" name="last_name" placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="email2">Enter your mail</label>
                                            <input type="email" id="email2" name="email"
                                                placeholder="Enter your mail">
                                        </div>
                                        <div class="single-input-item">
                                            <label for="phone">Enter Phone Number</label>
                                            <input type="text" id="phone" name="phone"
                                                placeholder="Enter Phone Number">
                                        </div>
                                    </div>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="fname">Father Name</label>
                                            <input type="text" id="father_name" placeholder="Father name">
                                        </div>
                                        <div class="single-input-item">
                                            <label for="lname">Mother Name</label>
                                            <input type="text" id="mother_name" placeholder="Mother name">
                                        </div>
                                    </div>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="dob">Date of Birth</label>
                                            <input type="text" id="date_of_birth" id="datepicker" placeholder="dd/mm/yy">
                                        </div>
                                        <div class="single-input-item">
                                            <label for="gender">Gender</label>
                                            <select name="gender" id="gender">
                                                <option value="*">Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="dob">Category</label>
                                            <select name="category" id="category">
                                                <option value="" selected="selected">--Select--</option>
                                                <option value="GEN">GEN</option>
                                                <option value="OBC">OBC</option>
                                                <option value="PH">PH</option>
                                                <option value="SC">SC</option>
                                                <option value="ST">ST</option>
                                            </select>
                                        </div>
                                        <div class="single-input-item">
                                            <label for="class_standard">Class</label>
                                            <select name="class_standard" id="class_standard">
                                                <option value="" selected="selected">--Select--</option>
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
                                                <option value="9th Class">9th Class</option>
                                                <option value="10th  Class">10th Class</option>
                                                <option value="11th  Class">11th Class</option>
                                                <option value="12th  Class">12th Class</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="address">Address</label>
                                            <input type="email" name="address" id="address"
                                                placeholder="Enter your address">
                                        </div>
                                        <div class="single-input-item">
                                            <label for="pincode">Pin Code</label>
                                            <input type="text" id="pincode" placeholder="Enter Pin code">
                                        </div>
                                    </div>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="district">District</label>
                                            <input type="text" name="district" id="district"
                                                placeholder="District name">
                                        </div>
                                        <div class="single-input-item">
                                            <label for="lname">Adhar No.</label>
                                            <input type="text" id="adhar_no" name="adhar_no"
                                                placeholder="Adhar Card No.">
                                        </div>
                                    </div>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="religion">Religion</label>
                                            <input type="text" name="religion" id="religion"
                                                placeholder="Religion name">
                                        </div>
                                        <div class="single-input-item">
                                            <label for="lname">Caste</label>
                                            <input type="text" id="caste" name="caste" placeholder="Caste">
                                        </div>
                                    </div>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="blood_group">Blood Group</label>
                                            <input type="text" name="blood_group" id="blood_group"
                                                placeholder="Blood Group name">
                                        </div>
                                        <div class="single-input-item">
                                            <label for="class_standard">Father's Occupation</label>
                                            <select name="father_occupation" id="father_occupation">
                                                <option value="" selected="selected">--Father's Occupation--
                                                </option>
                                                <option value="1">Accountant</option>
                                                <option value="15">Agriculture</option>
                                                <option value="2">Architect</option>
                                                <option value="3">Business Man</option>
                                                <option value="4">Clerk</option>
                                                <option value="5">Doctor</option>
                                                <option value="6">Farmer</option>
                                                <option value="7">Government Employee</option>
                                                <option value="8">Lawyer</option>
                                                <option value="9">Manager</option>
                                                <option value="10">Photographer</option>
                                                <option value="11">Secretary</option>
                                                <option value="12">Self Employed</option>
                                                <option value="13">Teacher</option>
                                                <option value="14">Worker</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <br>
                        <button type="submit" class="rts-theme-btn primary with-arrow">Submit Application<span><i
                                    class="fa-thin fa-arrow-right"></i></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br><br>
@endsection
@section('script')
@endsection
