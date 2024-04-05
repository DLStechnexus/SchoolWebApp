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
                                                    <label for="">First Name</label>
                                                    <input type="text" class="form-control" name="first_name"
                                                        id="first_name" placeholder="First Name" oninput="textInput(this)"
                                                        value="{{ $student->user_details->first_name ?? '' }}" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="">Last Name</label>
                                                    <input type="text" class="form-control" name="last_name"
                                                        id="last_name" placeholder="Last Name" oninput="textInput(this)"
                                                        value="{{ $student->user_details->last_name ?? '' }}" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="">Class Standard</label>
                                                    <select name="class_standard" id="class_standard" class="form-control"
                                                        style="height:52px">
                                                        <option value="">Select Class Standard</option>
                                                        <option value="Nursery"
                                                            {{ $student->user_details->class_standard == 'Nursery' ? 'selected' : '' }}>
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
                                                            {{ $student->user_details->class_standard == '' ? 'selected' : '' }}>
                                                            5th Class</option>
                                                        <option value="6th Class"
                                                            {{ $student->user_details->class_standard == '6th Class' ? 'selected' : '' }}>
                                                            6th Class</option>
                                                        <option
                                                            value="7th Class"{{ $student->user_details->class_standard == '' ? 'selected' : '' }}>
                                                            7th Class</option>
                                                        <option value="8th Class"
                                                            {{ $student->user_details->class_standard == '8th Class' ? 'selected' : '' }}>
                                                            8th Class</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="">Email</label>
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        value="{{ $student->email ?? '' }}" placeholder="Email" readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="">Adhar Number</label>
                                                    <input type="text" class="form-control" name="adhar_number"
                                                        id="adhar_number" placeholder="Adhar Number" min="12"
                                                        maxlength="12" oninput="digitInput(this)"
                                                        value="{{ $student->user_details->aadhar_number ?? '' }}" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="">Mobile Number</label>
                                                    <input type="text" class="form-control" name="mobile_number"
                                                        id="mobile_number" placeholder="Mobile Number"
                                                        oninput="digitInput(this)" min="10" maxlength="10"
                                                        value="{{ $student->user_details->mobile_number ?? '' }}" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <input type="file" name="profile_image" id="profile_image"
                                                        class="form-control" placeholder="Profile Image" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="">Father Name</label>
                                                    <input type="text" class="form-control" name="father_name"
                                                        id="father_name" placeholder="Father Name"
                                                        value="{{ $student->user_details->father_mobile_number ?? '' }}"
                                                        oninput="textInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="">Father Mobile Number</label>
                                                    <input type="text" class="form-control" name="father_contact_no"
                                                        id="father_contact_no" placeholder="Father Mobile number"
                                                        oninput="digitInput(this)" min="10" maxlength="10"
                                                        value="{{ $student->user_details->father_mobile_number ?? '' }}"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="">Mother Name</label>
                                                    <input type="text" class="form-control" name="mother_name"
                                                        id="mother_name" placeholder="Mother Name"
                                                        value="{{ $student->user_details->mother_name ?? '' }}"
                                                        oninput="textInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="">Mother Mobile number</label>
                                                    <input type="text" class="form-control" name="mother_contact_no"
                                                        id="mother_contact_no" placeholder="Mother Mobile number"
                                                        oninput="digitInput(this)" min="10"
                                                        value="{{ $student->user_details->mother_mobile_number ?? '' }}"
                                                        maxlength="10" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="">Status</label>
                                                    <select name="status" id="status" class="form-control">

                                                        <option value="0"
                                                            {{ $student->status == 0 ? 'selected' : '' }}>
                                                            In active</option>
                                                        <option value="1"
                                                            {{ $student->status == 1 ? 'selected' : '' }}>
                                                            Active</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <input type="hidden" name="user_id" value="{{ $student->id }}">
                                            <div class="col-sm-12">
                                                <div class="mb-3 form-group">
                                                    <label for="">Address</label>
                                                    <textarea name="address" id="address" cols="30" rows="10" class="form-control"
                                                        placeholder="Write Student Address..." required>{{ $student->user_details->address ?? '' }}</textarea>
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
