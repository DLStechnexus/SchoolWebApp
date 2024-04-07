@extends('backend.layouts.master')
@section('title')
    Edit Student
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
                                    <form action="{{ route('student.update') }}" method="post" id="student_form"
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
                                                        placeholder="First name"
                                                        value="{{ $student->user_details->first_name ?? '' }}"
                                                        oninput="textInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="last_name">Last Name</label>
                                                    <input type="text" id="last_name" name="last_name"
                                                        placeholder="Last name" oninput="textInput(this)"
                                                        value="{{ $student->user_details->last_name ?? '' }}" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="email2">Enter your mail</label>
                                                    <input type="email" id="email2" name="email"
                                                        placeholder="Enter your mail" value="{{ $student->email ?? '' }}"
                                                        readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="phone">Enter Phone Number</label>
                                                    <input type="text" id="phone" name="phone"
                                                        placeholder="Enter Phone Number"
                                                        value="{{ $student->user_details->mobile_number ?? '' }}"
                                                        oninput="digitInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="fname">Father Name</label>
                                                    <input type="text" id="father_name" name="father_name"
                                                        placeholder="Father name"
                                                        value="{{ $student->user_details->father_name ?? '' }}"
                                                        oninput="textInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="lname">Mother Name</label>
                                                    <input type="text" id="mother_name" name="mother_name"
                                                        placeholder="Mother name"
                                                        value="{{ $student->user_details->mother_name ?? '' }}"
                                                        oninput="textInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="dob">Date of Birth</label>
                                                    <input type="text" id="date_of_birth" name="date_of_birth"
                                                        id="datepicker" placeholder="dd/mm/yy"
                                                        value="{{ $student->user_details->date_of_birth ?? '' }}" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="gender">Gender</label>
                                                    <select name="gender" class="form-control" id="gender"
                                                        style="height: 52px;" required>
                                                        <option value="*">Gender</option>
                                                        <option value="Male"
                                                            {{ $student->user_details->gender == 'Male' ? 'selected' : '' }}>
                                                            Male</option>
                                                        <option value="Female"
                                                            {{ $student->user_details->gender == 'Female' ? 'selected' : '' }}>
                                                            Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="dob">Category</label>
                                                    <select name="category" class="form-control" id="category"
                                                        style="height: 52px;" required>
                                                        <option value="" selected="selected">--Select--</option>
                                                        <option value="GEN"
                                                            {{ $student->user_details->category == 'GEN' ? 'selected' : '' }}>
                                                            GEN</option>
                                                        <option value="OBC"
                                                            {{ $student->user_details->category == 'OBC' ? 'selected' : '' }}>
                                                            OBC</option>
                                                        <option value="PH"
                                                            {{ $student->user_details->category == 'PH' ? 'selected' : '' }}>
                                                            PH</option>
                                                        <option value="SC"
                                                            {{ $student->user_details->category == 'SC' ? 'selected' : '' }}>
                                                            SC</option>
                                                        <option value="ST"
                                                            {{ $student->user_details->category == 'ST' ? 'selected' : '' }}>
                                                            ST</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="class_standard">Class</label>
                                                    <select name="class_standard" class="form-control"
                                                        id="class_standard" style="height: 52px;" required>
                                                        <option value="" selected="selected">--Select--</option>
                                                        <option
                                                            value="Nursery  {{ $student->user_details->class_standard == 'Nursery' ? 'selected' : '' }}">
                                                            Nursery</option>
                                                        <option value="LKG"
                                                            {{ $student->user_details->class_standard == 'LKG' ? 'selected' : '' }}>
                                                            LKG</option>
                                                        <option value="UKG"
                                                            {{ $student->user_details->class_standard == 'UKG' ? 'selected' : '' }}>
                                                            UKG</option>
                                                        <option value="1st Class"
                                                            {{ $student->user_details->class_standard == '1st Class' ? 'selected' : '' }}>
                                                            1st Class</option>
                                                        <option value="2nd Class"
                                                            {{ $student->user_details->class_standard == '2nd Class' ? 'selected' : '' }}>
                                                            2nd Class</option>
                                                        <option value="3rd Class"
                                                            {{ $student->user_details->class_standard == '3rd Class' ? 'selected' : '' }}>
                                                            3rd Class</option>
                                                        <option value="4th Class"
                                                            {{ $student->user_details->class_standard == '4th Class' ? 'selected' : '' }}>
                                                            4th Class</option>
                                                        <option value="5th Class"
                                                            {{ $student->user_details->class_standard == '5th Class' ? 'selected' : '' }}>
                                                            5th Class</option>
                                                        <option value="6th Class"
                                                            {{ $student->user_details->class_standard == '6th Class' ? 'selected' : '' }}>
                                                            6th Class</option>
                                                        <option value="7th Class"
                                                            {{ $student->user_details->class_standard == '7th Class' ? 'selected' : '' }}>
                                                            7th Class</option>
                                                        <option value="8th Class"
                                                            {{ $student->user_details->class_standard == '8th Class' ? 'selected' : '' }}>
                                                            8th Class</option>
                                                        <option value="9th Class"
                                                            {{ $student->user_details->class_standard == '9th Class' ? 'selected' : '' }}>
                                                            9th Class</option>
                                                        <option value="10th Class"
                                                            {{ $student->user_details->class_standard == '10th Class' ? 'selected' : '' }}>
                                                            10th Class</option>
                                                        <option value="11th Class"
                                                            {{ $student->user_details->class_standard == '11th Class' ? 'selected' : '' }}>
                                                            11th Class</option>
                                                        <option value="12th Class"
                                                            {{ $student->user_details->class_standard == '12th Class' ? 'selected' : '' }}>
                                                            12th Class</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="address">Address</label>
                                                    <input type="email" name="address" id="address"
                                                        placeholder="Enter your address"
                                                        value="{{ $student->user_details->address ?? '' }}" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="pincode">Pin Code</label>
                                                    <input type="text" id="pincode" name="pincode"
                                                        placeholder="Enter Pin code"
                                                        value="{{ $student->user_details->pincode ?? '' }}"
                                                        oninput="digitInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="district">District</label>
                                                    <input type="text" name="district" id="district"
                                                        placeholder="District name"
                                                        value="{{ $student->user_details->district ?? '' }}"
                                                        oninput="textInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="lname">Adhar No.</label>
                                                    <input type="text" id="adhar_no" name="adhar_no"
                                                        placeholder="Adhar Card No."
                                                        value="{{ $student->user_details->aadhar_number ?? '' }}"
                                                        oninput="digitInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="religion">Religion</label>
                                                    <input type="text" name="religion" id="religion"
                                                        placeholder="Religion name"
                                                        value="{{ $student->user_details->religion ?? '' }}"
                                                        oninput="textInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="lname">Caste</label>
                                                    <input type="text" id="caste" name="caste"
                                                        placeholder="Caste"
                                                        value="{{ $student->user_details->caste ?? '' }}"
                                                        oninput="textInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="blood_group">Blood Group</label>
                                                    <input type="text" name="blood_group" id="blood_group"
                                                        placeholder="Blood Group name"
                                                        value="{{ $student->user_details->blood_group ?? '' }}"
                                                        oninput="textInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="class_standard">Father's Occupation</label>
                                                    <select name="father_occupation" class="form-control"
                                                        id="father_occupation" style="height: 52px;" required>
                                                        <option value="" selected="selected">--Father's Occupation--
                                                        </option>
                                                        <option value="Accountant"
                                                            {{ $student->user_details->father_occupation == 'Accountant' ? 'selected' : '' }}>
                                                            Accountant</option>
                                                        <option value="Agriculture"
                                                            {{ $student->user_details->father_occupation == 'Agriculture' ? 'selected' : '' }}>
                                                            Agriculture</option>
                                                        <option value="Architect"
                                                            {{ $student->user_details->father_occupation == 'Architect' ? 'selected' : '' }}>
                                                            Architect</option>
                                                        <option value="Business Man"
                                                            {{ $student->user_details->father_occupation == 'Business Man' ? 'selected' : '' }}>
                                                            Business Man</option>
                                                        <option value="Clerk"
                                                            {{ $student->user_details->father_occupation == 'Clerk' ? 'selected' : '' }}>
                                                            Clerk</option>
                                                        <option value="Doctor"
                                                            {{ $student->user_details->father_occupation == 'Doctor' ? 'selected' : '' }}>
                                                            Doctor</option>
                                                        <option value="Farmer"
                                                            {{ $student->user_details->father_occupation == 'Farmer' ? 'selected' : '' }}>
                                                            Farmer</option>
                                                        <option value="Government Employee"
                                                            {{ $student->user_details->father_occupation == 'Government Employee' ? 'selected' : '' }}>
                                                            Government Employee</option>
                                                        <option value="Lawyer"
                                                            {{ $student->user_details->father_occupation == 'Lawyer' ? 'selected' : '' }}>
                                                            Lawyer</option>
                                                        <option
                                                            value="Manager"{{ $student->user_details->father_occupation == 'Manager' ? 'selected' : '' }}>
                                                            Manager</option>
                                                        <option
                                                            value="Photographer"{{ $student->user_details->father_occupation == 'Photographer' ? 'selected' : '' }}>
                                                            Photographer</option>
                                                        <option
                                                            value="Secretary"{{ $student->user_details->father_occupation == 'Secretary' ? 'selected' : '' }}>
                                                            Secretary</option>
                                                        <option
                                                            value="Self Employed"{{ $student->user_details->father_occupation == '12th Class' ? 'selected' : '' }}>
                                                            Self Employed</option>
                                                        <option
                                                            value="Teacher"{{ $student->user_details->father_occupation == 'Self Employed' ? 'selected' : '' }}>
                                                            Teacher</option>
                                                        <option
                                                            value="Worker"{{ $student->user_details->father_occupation == 'Worker' ? 'selected' : '' }}>
                                                            Worker</option>
                                                        <option
                                                            value="Other"{{ $student->user_details->father_occupation == 'Other' ? 'selected' : '' }}>
                                                            Other</option>
                                                    </select>


                                                </div>


                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="">Status</label>
                                                    <select name="status" id="status" class="form-control"
                                                        style="height: 52px;">

                                                        <option value="0"
                                                            {{ $student->status == 0 ? 'selected' : '' }}>
                                                            In active</option>
                                                        <option value="1"
                                                            {{ $student->status == 1 ? 'selected' : '' }}>
                                                            Active</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="user_id" value="{{ $student->id }}" />
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
