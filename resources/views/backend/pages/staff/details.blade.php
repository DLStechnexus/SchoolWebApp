@extends('backend.layouts.master')
@section('title')
    Details Staff Member
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
                                    <h5 class="modal-title">Details Staff Member</h5>
                                </div>
                                @include('alert')
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="mb-3 text-center col-sm-12">
                                            @if ($staff_member->user_details->profile_image)
                                                <img src="{{ asset('upload/staff') }}/{{ $staff_member->user_details->profile_image }}"
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
                                                    value="{{ $staff_member->user_details->first_name ?? '' }}" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3 form-group">
                                                <label for="">Last Name</label>
                                                <input type="text" class="form-control" name="last_name" id="last_name"
                                                    placeholder="Last Name" oninput="textInput(this)"
                                                    value="{{ $staff_member->user_details->last_name ?? '' }}"required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3 form-group">
                                                <label for="">Email</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    value="{{ $staff_member->email ?? '' }}" placeholder="Email" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3 form-group">
                                                <label for="">Adhar Number</label>
                                                <input type="text" class="form-control" name="adhar_number"
                                                    id="adhar_number" placeholder="Adhar Number" min="12"
                                                    value="{{ $staff_member->user_details->aadhar_number ?? '' }}"
                                                    maxlength="12" oninput="digitInput(this)" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3 form-group">
                                                <label for="">Mobile Number</label>
                                                <input type="text" class="form-control" name="mobile_number"
                                                    id="mobile_number" placeholder="Mobile Number"
                                                    value="{{ $staff_member->user_details->mobile_number ?? '' }}"
                                                    oninput="digitInput(this)" min="10" maxlength="10" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3 form-group">
                                                <label for="">Father Name</label>
                                                <input type="text" class="form-control" name="father_name"
                                                    id="father_name" placeholder="Father Name" oninput="textInput(this)"
                                                    value="{{ $staff_member->user_details->father_name ?? '' }}" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3 form-group">
                                                <label for="">Mother name</label>
                                                <input type="text" class="form-control" name="mother_name"
                                                    id="mother_name" placeholder="Mother Name" oninput="textInput(this)"
                                                    value="{{ $staff_member->user_details->mother_name ?? '' }}" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3 form-group">
                                                <label for="">Qualification</label>
                                                <select name="qualification" id="qualification" class="form-control"
                                                    style="height: 52px">
                                                    <option value="">Select Hightest Qualification</option>
                                                    <option
                                                        value="Post Graduation"{{ $staff_member->user_details->qualification == 'Post Graduation' ? 'selected' : '' }}>
                                                        Post Graduation</option>
                                                    <option
                                                        value="Graduation"{{ $staff_member->user_details->qualification == 'Graduation' ? 'selected' : '' }}>
                                                        Graduation</option>
                                                    <option
                                                        value="Intermediate"{{ $staff_member->user_details->qualification == 'Intermediate' ? 'selected' : '' }}>
                                                        Intermediate</option>
                                                    <option
                                                        value="High School"{{ $staff_member->user_details->qualification == 'High School' ? 'selected' : '' }}>
                                                        High School</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3 form-group">
                                                <label for="">Staff Type</label>
                                                <select name="role_id" id="role_id" class="form-control"
                                                    style="height: 52px">
                                                    <option value="">Select Staff Type</option>
                                                    <option value="5"
                                                        {{ $staff_member->role_id == 5 ? 'selected' : '' }}>Principal
                                                    </option>
                                                    <option value="6"
                                                        {{ $staff_member->role_id == 6 ? 'selected' : '' }}>Manager
                                                    </option>
                                                    <option value="2"
                                                        {{ $staff_member->role_id == 2 ? 'selected' : '' }}>
                                                        Teacher</option>
                                                    <option value="3"
                                                        {{ $staff_member->role_id == 3 ? 'selected' : '' }}>
                                                        Peon</option>
                                                    <option value="4"
                                                        {{ $staff_member->role_id == 4 ? 'selected' : '' }}>
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
                                                        {{ $staff_member->status == 0 ? 'selected' : '' }}>
                                                        In active</option>
                                                    <option value="1"
                                                        {{ $staff_member->status == 1 ? 'selected' : '' }}>
                                                        Active</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="staff_id" value="{{ $staff_member->id }}" />

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
