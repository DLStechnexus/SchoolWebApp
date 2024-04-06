@extends('backend.layouts.master')
@section('title')
    Create Result
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
                                    <h5 class="modal-title">Create Result</h5>
                                </div>
                                @include('alert')
                                <div class="modal-body">
                                    <form action="{{ route('result.store') }}" method="post" id="student_form"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <select name="exam_type" id="exam_type" class="form-control"
                                                        style="height: 52px">
                                                        <option value="">Select Exam Type</option>
                                                        <option value="Quarterly ">Quarterly</option>
                                                        <option value="Half yearly">Half yearly</option>
                                                        <option value="Annually">Annually</option>
                                                        <option value="Class Test">Class Test</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <select name="yearly_session" id="yearly_session" class="form-control"
                                                        style="height: 52px">
                                                        <option value="">Select Session </option>
                                                        <option value="2023-24">2023-24</option>
                                                        <option value="2024-25">2024-25</option>
                                                        <option value="2025-26">2025-26</option>
                                                        <option value="2026-27">2026-27</option>
                                                        <option value="2027-28">2027-28</option>
                                                        <option value="2028-29">2028-29</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <select name="class_standard" id="class_standard" class="form-control"
                                                        style="height:52px">
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
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <input type="text" class="form-control" name="roll_number"
                                                        id="roll_number" placeholder="Roll Number"
                                                        oninput="digitInput(this)" required>
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="mb-3 form-group">
                                                    <input type="text" class="form-control" name="subject_name[]"
                                                        id="subject_name" placeholder="Subject Name"
                                                        oninput="textInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="mb-3 form-group">
                                                    <input type="text" class="form-control" name="out_of_marks[]"
                                                        id="out_of_marks" placeholder="Total Marks"
                                                        oninput="digitInput(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="mb-3 form-group">
                                                    <input type="text" class="form-control" name="obtain_mark[]"
                                                        id="obtain_mark" placeholder="Obtain Marks"
                                                        oninput="digitInput(this)" required>
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
                        <input type="text" class="form-control" name="subject_name[]"
                            placeholder="Subject Name" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="mb-3 form-group">
                        <input type="text" class="form-control" name="out_of_marks[]"
                            placeholder="Total Marks" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="mb-3 form-group">
                        <input type="text" class="form-control" name="obtain_mark[]"
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
