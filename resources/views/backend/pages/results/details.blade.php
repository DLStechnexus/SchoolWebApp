@extends('backend.layouts.master')
@section('title')
    Detail of Result
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
                                    <h5 class="modal-title">Detail of Result</h5>
                                </div>
                                @include('alert')
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="mb-3 text-center col-sm-12">
                                            @if ($results->users->user_details->profile_image)
                                                <img src="{{ asset('upload/students') }}/{{ $results->users->user_details->profile_image }}"
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
                                                <label for="">Name</label>
                                                <input type="text" class="form-control" name="roll_number"
                                                    id="roll_number" placeholder="Roll Number"
                                                    value="{{ $results->users->name }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3 form-group">
                                                <label for="">Exam Type</label>
                                                <input type="text" class="form-control" name="roll_number"
                                                    id="roll_number" placeholder="Roll Number"
                                                    value="{{ $results->exam_type }}" readonly>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3 form-group">
                                                <label for="">Class Standard</label>
                                                <input type="text" class="form-control" name="roll_number"
                                                    id="roll_number" placeholder="Roll Number"
                                                    value="{{ $results->class_standard }}" readonly>

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3 form-group">
                                                <label for="">Roll No.</label>
                                                <input type="text" class="form-control" name="roll_number"
                                                    id="roll_number" placeholder="Roll Number" oninput="digitInput(this)"
                                                    value="{{ $results->users->user_unique_id }}" readonly>
                                            </div>
                                        </div>
                                        <input type="hidden" name="result_id" value="{{ $results->id }}">
                                        @if (!empty($results->marks))
                                            @foreach ($results->marks as $marks)
                                                <div class="col-sm-4">
                                                    <div class="mb-3 form-group">
                                                        <label for="">Subject Name</label>
                                                        <input type="text" class="form-control" name="subject_name[]"
                                                            id="subject_name" placeholder="Subject Name"
                                                            oninput="textInput(this)" value="{{ $marks->subject_name }}"
                                                            readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="mb-3 form-group">
                                                        <label for="">Out of Marks</label>
                                                        <input type="text" class="form-control" name="out_of_marks[]"
                                                            id="out_of_marks" placeholder="Total Marks"
                                                            oninput="digitInput(this)" value="{{ $marks->out_of_marks }}"
                                                            readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="mb-3 form-group">
                                                        <label for="">Obtain Marks</label>
                                                        <input type="text" class="form-control" name="obtain_mark[]"
                                                            id="obtain_mark" value="{{ $marks->obtain_marks }}"
                                                            placeholder="Obtain Marks" oninput="digitInput(this)" readonly>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="marks_id[]" value="{{ $marks->id }}" />
                                            @endforeach
                                        @endif
                                    </div>
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
