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
                                    <h5 class="modal-title">Student Details</h5>
                                </div>
                                @include('alert')
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="mb-3 text-center col-sm-12">
                                            @if ($student->user_details->profile_image)
                                                <img src="{{ asset('upload/students') }}/{{ $student->user_details->profile_image }}"
                                                    height="120px" width="120px" class="rounded-circle">
                                            @else
                                                <img src="{{ asset('backend/img/messages/1.png') }}" height="120px"
                                                    width="120px" class="rounded-circle">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3 form-group">
                                                <label for="">First Name</label>
                                                <input type="text" class="form-control" name="first_name" id="first_name"
                                                    placeholder="First Name" oninput="textInput(this)"
                                                    value="{{ $student->user_details->first_name ?? '' }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3 form-group">
                                                <label for="">Last Name</label>
                                                <input type="text" class="form-control" name="last_name" id="last_name"
                                                    placeholder="Last Name" oninput="textInput(this)"
                                                    value="{{ $student->user_details->last_name ?? '' }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3 form-group">
                                                <label for="">Class Standard</label>
                                                <input type="text" class="form-control" name="last_name" id="last_name"
                                                    placeholder="Last Name" oninput="textInput(this)"
                                                    value="{{ $student->user_details->class_standard ?? '' }}" readonly>
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
                                                    value="{{ $student->user_details->aadhar_number ?? '' }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3 form-group">
                                                <label for="">Mobile Number</label>
                                                <input type="text" class="form-control" name="mobile_number"
                                                    id="mobile_number" placeholder="Mobile Number"
                                                    oninput="digitInput(this)" min="10" maxlength="10"
                                                    value="{{ $student->user_details->mobile_number ?? '' }}" readonly>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3 form-group">
                                                <label for="">Father Name</label>
                                                <input type="text" class="form-control" name="father_name"
                                                    id="father_name" placeholder="Father Name"
                                                    value="{{ $student->user_details->father_mobile_number ?? '' }}"
                                                    oninput="textInput(this)" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3 form-group">
                                                <label for="">Father Mobile Number</label>
                                                <input type="text" class="form-control" name="father_contact_no"
                                                    id="father_contact_no" placeholder="Father Mobile number"
                                                    oninput="digitInput(this)" min="10" maxlength="10"
                                                    value="{{ $student->user_details->father_mobile_number ?? '' }}"
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3 form-group">
                                                <label for="">Mother Name</label>
                                                <input type="text" class="form-control" name="mother_name"
                                                    id="mother_name" placeholder="Mother Name"
                                                    value="{{ $student->user_details->mother_name ?? '' }}"
                                                    oninput="textInput(this)" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3 form-group">
                                                <label for="">Mother Mobile number</label>
                                                <input type="text" class="form-control" name="mother_contact_no"
                                                    id="mother_contact_no" placeholder="Mother Mobile number"
                                                    oninput="digitInput(this)" min="10"
                                                    value="{{ $student->user_details->mother_mobile_number ?? '' }}"
                                                    maxlength="10" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3 form-group">
                                                <label for="">Status</label>
                                                <input type="text" class="form-control" name="mother_contact_no"
                                                    id="mother_contact_no"
                                                    value="{{ $student->status == 1 ? 'Active' : 'In-active' }}"
                                                    maxlength="10" readonly>
                                            </div>
                                        </div>
                                        <input type="hidden" name="user_id" value="{{ $student->id }}">
                                        <div class="col-sm-12">
                                            <div class="mb-3 form-group">
                                                <label for="">Address</label>
                                                <textarea name="address" id="address" cols="30" rows="10" class="form-control"
                                                    placeholder="Write Student Address..." readonly>{{ $student->user_details->address ?? '' }}</textarea>
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
    </div>
@endsection
@section('script')
@endsection
