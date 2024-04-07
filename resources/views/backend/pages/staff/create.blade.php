@extends('backend.layouts.master')
@section('title')
    Create Staff Member
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
                                    <h5 class="modal-title">Add Staff Member</h5>
                                </div>
                                @include('alert')
                                <div class="modal-body">
                                    <form action="{{ route('staff.store') }}" method="post" id="student_form"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <input type="text" class="form-control" name="first_name"
                                                        id="first_name" placeholder="First Name" oninput="textInput(this)"
                                                        required>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <input type="text" class="form-control" name="last_name"
                                                        id="last_name" placeholder="Last Name" oninput="textInput(this)"
                                                        required>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Email" required>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <input type="password" class="form-control" name="password"
                                                        id="password" placeholder="Password" required>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <input type="text" class="form-control" name="adhar_number"
                                                        id="adhar_number" placeholder="Adhar Number" min="12"
                                                        maxlength="12" oninput="digitInput(this)" required>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <input type="text" class="form-control" name="mobile_number"
                                                        id="mobile_number" placeholder="Mobile Number"
                                                        oninput="digitInput(this)" min="10" maxlength="10" required>
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
                                                    <input type="text" class="form-control" name="father_name"
                                                        id="father_name" placeholder="Father Name" oninput="textInput(this)"
                                                        required>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <input type="text" class="form-control" name="father_contact_no"
                                                        id="father_contact_no" placeholder="Father Mobile number"
                                                        oninput="digitInput(this)" min="10" maxlength="10" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <input type="text" class="form-control" name="mother_name"
                                                        id="mother_name" placeholder="Mother Name" oninput="textInput(this)"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <select name="qualification" id="qualification" class="form-control"
                                                        style="height: 52px">
                                                        <option value="">Select Hightest Qualification</option>
                                                        <option value="Post Graduation">Post Graduation</option>
                                                        <option value="Graduation">Graduation</option>
                                                        <option value="Intermediate">Intermediate</option>
                                                        <option value="High School">High School</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <select name="role_id" id="role_id" class="form-control"
                                                        style="height: 52px">
                                                        <option value="">Select Staff Type</option>
                                                        <option value="5">Principal</option>
                                                        <option value="6">Manager</option>
                                                        <option value="2">Teacher</option>
                                                        <option value="3">Peon</option>
                                                        <option value="4">Other</option>

                                                    </select>
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
