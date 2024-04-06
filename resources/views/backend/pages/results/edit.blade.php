@extends('backend.layouts.master')
@section('title')
    Edit Result
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
                                    <h5 class="modal-title">Edit Result</h5>
                                </div>
                                @include('alert')
                                <div class="modal-body">
                                    <form action="{{ route('result.update') }}" method="post" id="student_form"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <select name="exam_type" id="exam_type" class="form-control"
                                                        style="height: 52px">
                                                        <option value="">Select Exam Type</option>
                                                        <option value="Quarterly"
                                                            {{ $results->exam_type == 'Quarterly' ? 'selected' : '' }}>
                                                            Quarterly</option>
                                                        <option value="Half yearly"
                                                            {{ $results->exam_type == 'Half yearly' ? 'selected' : '' }}>
                                                            Half
                                                            yearly</option>
                                                        <option value="Annually"
                                                            {{ $results->exam_type == 'Annually' ? 'selected' : '' }}>
                                                            Annually
                                                        </option>
                                                        <option value="Class Test"
                                                            {{ $results->exam_type == 'Class Test' ? 'selected' : '' }}>
                                                            Class
                                                            Test</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <select name="yearly_session" id="yearly_session" class="form-control"
                                                        style="height: 52px">
                                                        <option value="">Select Session </option>
                                                        <option value="2023-24"
                                                            {{ $results->year_session == '2023-24' ? 'selected' : '' }}>
                                                            2023-24</option>
                                                        <option value="2024-25"
                                                            {{ $results->year_session == '2024-25' ? 'selected' : '' }}>
                                                            2024-25</option>
                                                        <option value="2025-26"
                                                            {{ $results->year_session == '2025-26' ? 'selected' : '' }}>
                                                            2025-26</option>
                                                        <option value="2026-27"
                                                            {{ $results->year_session == '2026-27' ? 'selected' : '' }}>
                                                            2026-27</option>
                                                        <option
                                                            value="2027-28"{{ $results->year_session == '2027-28' ? 'selected' : '' }}>
                                                            2027-28</option>
                                                        <option
                                                            value="2028-29"{{ $results->year_session == '2028-29' ? 'selected' : '' }}>
                                                            2028-29</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <select name="class_standard" id="class_standard" class="form-control"
                                                        style="height:52px">
                                                        <option value="Nursery"
                                                            {{ $results->class_standard == 'Nursery' ? 'selected' : '' }}>
                                                            Nursery</option>
                                                        <option value="LKG"
                                                            {{ $results->class_standard == 'LKG' ? 'selected' : '' }}>
                                                            LKG</option>
                                                        <option value="UKG"
                                                            {{ $results->class_standard == 'UKG' ? 'selected' : '' }}>
                                                            UKG</option>
                                                        <option value="1st Class"
                                                            {{ $results->class_standard == '1st Class' ? 'selected' : '' }}>
                                                            1st Class</option>
                                                        <option value="2nd Class"
                                                            {{ $results->class_standard == '2nd Class' ? 'selected' : '' }}>
                                                            2nd Class</option>
                                                        <option value="3rd Class"
                                                            {{ $results->class_standard == '3rd Class' ? 'selected' : '' }}>
                                                            3rd Class</option>
                                                        <option value="4th Class"
                                                            {{ $results->class_standard == '4th Class' ? 'selected' : '' }}>
                                                            4th Class</option>
                                                        <option value="5th Class"
                                                            {{ $results->class_standard == '' ? 'selected' : '' }}>
                                                            5th Class</option>
                                                        <option value="6th Class"
                                                            {{ $results->users->user_details->class_standard == '6th Class' ? 'selected' : '' }}>
                                                            6th Class</option>
                                                        <option
                                                            value="7th Class"{{ $results->users->user_details->class_standard == '' ? 'selected' : '' }}>
                                                            7th Class</option>
                                                        <option value="8th Class"
                                                            {{ $results->users->user_details->class_standard == '8th Class' ? 'selected' : '' }}>
                                                            8th Class</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <input type="text" class="form-control" name="roll_number"
                                                        id="roll_number" placeholder="Roll Number"
                                                        oninput="digitInput(this)"
                                                        value="{{ $results->users->user_unique_id }}" required>
                                                </div>
                                            </div>
                                            <input type="hidden" name="result_id" value="{{ $results->id }}">
                                            @if (!empty($results->marks))
                                                @foreach ($results->marks as $marks)
                                                    <div class="col-sm-4">
                                                        <div class="mb-3 form-group">
                                                            <input type="text" class="form-control" name="subject_name[]"
                                                                id="subject_name" placeholder="Subject Name"
                                                                oninput="textInput(this)"
                                                                value="{{ $marks->subject_name }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="mb-3 form-group">
                                                            <input type="text" class="form-control" name="out_of_marks[]"
                                                                id="out_of_marks" placeholder="Total Marks"
                                                                oninput="digitInput(this)"
                                                                value="{{ $marks->out_of_marks }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="mb-3 form-group">
                                                            <input type="text" class="form-control" name="obtain_mark[]"
                                                                id="obtain_mark" value="{{ $marks->obtain_marks }}"
                                                                placeholder="Obtain Marks" oninput="digitInput(this)"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="marks_id[]" value="{{ $marks->id }}" />
                                                @endforeach
                                            @endif
                                            <h3>Add New Subject Marks</h3>
                                            <div class="col-sm-3">
                                                <div class="mb-3 form-group">
                                                    <input type="text" class="form-control" name="subject_name1[]"
                                                        id="subject_name" placeholder="Subject Name"
                                                        oninput="textInput(this)">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="mb-3 form-group">
                                                    <input type="text" class="form-control" name="out_of_marks1[]"
                                                        id="out_of_marks" placeholder="Total Marks"
                                                        oninput="digitInput(this)">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="mb-3 form-group">
                                                    <input type="text" class="form-control" name="obtain_mark1[]"
                                                        id="obtain_mark" placeholder="Obtain Marks"
                                                        oninput="digitInput(this)">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="mb-3 form-group">
                                                    <button type="button" class="btn btn-success add_more_box">Add
                                                        More</button>
                                                </div>
                                            </div>
                                            <div class="new_boxes"></div>
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
    <script>
        $(document).ready(function() {
            $('.add_more_box').on('click', function() {
                var htmlView = '';
                htmlView += `
            <div class="row">
                <div class="col-sm-3">
                    <div class="mb-3 form-group">
                        <input type="text" class="form-control" name="subject_name1[]"
                            placeholder="Subject Name" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="mb-3 form-group">
                        <input type="text" class="form-control" name="out_of_marks1[]"
                            placeholder="Total Marks" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="mb-3 form-group">
                        <input type="text" class="form-control" name="obtain_mark1[]"
                            placeholder="Obtain Marks" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <button type="button" class="btn btn-danger remove_box">Remove</button>
                </div>
            </div>
            `;
                $('.new_boxes').append(htmlView);
            });
            $(document).on('click', '.remove_box', function() {
                $(this).closest('.row').remove();
            });
        });
    </script>
@endsection
