@extends('backend.layouts.master')
@section('title')
    Create Student
@endsection
@section('content')
    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="row justify-content-center">
                            <div class="modal-content cs_modal">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Student</h5>
                                </div>
                                @include('alert')
                                <div class="modal-body">
                                    <form action="{{ route('student.store') }}" method="post" id="student_form"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="profile_image">Profile Image</label>
                                                    <input type="file" id="profile_image" name="profile_image"
                                                        placeholder="First name" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="first_name">First Name</label>
                                                    <input type="text" id="first_name" name="first_name"
                                                        placeholder="First name" oninput="textInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="last_name">Last Name</label>
                                                    <input type="text" id="last_name" name="last_name"
                                                        placeholder="Last name" oninput="textInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="email2">Enter your mail</label>
                                                    <input type="email" id="email2" name="email"
                                                        placeholder="Enter your mail" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="phone">Enter Phone Number</label>
                                                    <input type="text" id="phone" name="phone"
                                                        placeholder="Enter Phone Number" oninput="digitInput(this)"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="fname">Father Name</label>
                                                    <input type="text" id="father_name" name="father_name"
                                                        placeholder="Father name" oninput="textInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="lname">Mother Name</label>
                                                    <input type="text" id="mother_name" name="mother_name"
                                                        placeholder="Mother name" oninput="textInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="dob">Date of Birth</label>
                                                    <input type="text" id="date_of_birth" name="date_of_birth"
                                                        id="datepicker" placeholder="dd/mm/yy" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="gender">Gender</label>
                                                    <select name="gender" class="form-control" id="gender"
                                                        style="height: 52px;" required>
                                                        <option value="*">Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="dob">Category</label>
                                                    <select name="category" class="form-control" id="category"
                                                        style="height: 52px;" required>
                                                        <option value="" selected="selected">--Select--</option>
                                                        <option value="GEN">GEN</option>
                                                        <option value="OBC">OBC</option>
                                                        <option value="PH">PH</option>
                                                        <option value="SC">SC</option>
                                                        <option value="ST">ST</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="class_standard">Class</label>
                                                    <select name="class_standard" class="form-control"
                                                        id="class_standard" style="height: 52px;" required>
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
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="address">Address</label>
                                                    <input type="email" name="address" id="address"
                                                        placeholder="Enter your address" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="pincode">Pin Code</label>
                                                    <input type="text" id="pincode" name="pincode"
                                                        placeholder="Enter Pin code" oninput="digitInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="district">District</label>
                                                    <input type="text" name="district" id="district"
                                                        placeholder="District name" oninput="textInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="lname">Adhar No.</label>
                                                    <input type="text" id="adhar_no" name="adhar_no"
                                                        placeholder="Adhar Card No." oninput="digitInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="religion">Religion</label>
                                                    <input type="text" name="religion" id="religion"
                                                        placeholder="Religion name" oninput="textInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="lname">Caste</label>
                                                    <input type="text" id="caste" name="caste"
                                                        placeholder="Caste" oninput="textInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="blood_group">Blood Group</label>
                                                    <input type="text" name="blood_group" id="blood_group"
                                                        placeholder="Blood Group name" oninput="textInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="class_standard">Father's Occupation</label>
                                                    <select name="father_occupation" class="form-control"
                                                        id="father_occupation" style="height: 52px;" required>
                                                        <option value="" selected="selected">--Father's Occupation--
                                                        </option>
                                                        <option value="Accountant">Accountant</option>
                                                        <option value="Agriculture">Agriculture</option>
                                                        <option value="Architect">Architect</option>
                                                        <option value="Business Man">Business Man</option>
                                                        <option value="Clerk">Clerk</option>
                                                        <option value="Doctor">Doctor</option>
                                                        <option value="Farmer">Farmer</option>
                                                        <option value="Government Employee">Government Employee</option>
                                                        <option value="Lawyer">Lawyer</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Photographer">Photographer</option>
                                                        <option value="Secretary">Secretary</option>
                                                        <option value="Self Employed">Self Employed</option>
                                                        <option value="Teacher">Teacher</option>
                                                        <option value="Worker">Worker</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <button type="submit" class="text-center btn_1 full_width">Save</button>
                            </div>
                            </form>
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
