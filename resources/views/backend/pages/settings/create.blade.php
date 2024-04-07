@extends('backend.layouts.master')
@section('title')
    Setting
@endsection
@section('content')
    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h5 class="modal-title">Setting</h5>
                    @include('alert')
                    <div class="white_box mb_30">
                        <div class="row justify-content-center">
                            <div class="modal-content cs_modal">
                                <div class="modal-body">
                                    <form method="post" action="{{ route('logo.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="">Website Logo</label>
                                                    <input type="file" name="logo_image" class="form-control">
                                                    @if ($logo_setting)
                                                        <a href="{{ asset('upload/logo') }}/{{ $logo_setting->logo_image }}"
                                                            target="_blank">View
                                                            Logo</a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3 form-group">
                                                    <label for="">School Name</label>
                                                    <input type="text" name="school_name" class="form-control"
                                                        placeholder="School Name"
                                                        value="{{ $logo_setting->school_name ?? '' }}">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="text-center btn_1 full_width">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="modal-title">About Us</h5>
                    <div class="white_box mb_30">
                        <div class="row justify-content-center">
                            <div class="modal-content cs_modal">
                                <div class="modal-header">
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{ route('about.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="mb-3 form-group">
                                                    <label for="">About Us</label>
                                                    <textarea name="about_us" id="about_us" cols="30" rows="10" placeholder="Write about Us text here..">
                                                        {{ $aboutUs->about_us ?? '' }}
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="text-center btn_1 full_width">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="modal-title">Contact Us</h5>
                    <div class="white_box mb_30">
                        <div class="row justify-content-center">
                            <div class="modal-content cs_modal">
                                <div class="modal-header">
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{ route('contact.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="mb-3 form-group">
                                                    <label for="">Address</label>
                                                    <input type="text" name="address" class="form-control"
                                                        placeholder="School Address"
                                                        value="{{ $contactUs->address ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="mb-3 form-group">
                                                    <label for="">Contact number</label>
                                                    <input type="text" name="contact_no" class="form-control"
                                                        placeholder="School Contact Number"
                                                        value="{{ $contactUs->contact_no ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="mb-3 form-group">
                                                    <label for="">Timings</label>
                                                    <input type="text" name="timing" class="form-control"
                                                        placeholder="School Timings" value="{{ $contactUs->timing ?? '' }}">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="text-center btn_1 full_width">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="modal-title">Slider Image and Photo Gallery Images</h5>
                    <div class="white_box mb_30">
                        <div class="row justify-content-center">
                            <div class="modal-content cs_modal">
                                <div class="modal-body">
                                    <form method="post" action="{{ route('slider.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="mb-3 form-group">
                                                    <label for="">Upload Image</label>
                                                    <input type="file" name="slider_image" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="text-center btn_1 full_width">Save</button>
                                    </form>
                                    <br><br>
                                    <table class="table " id="custom_table" border=1>
                                        <thead>
                                            <tr>
                                                <th scope="col">SR No.</th>

                                                <th scope="col">Images</th>
                                                <th scope="col">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($sliders))
                                                @foreach ($sliders as $key => $slider)
                                                    <tr>
                                                        <th>{{ $key + 1 }}</th>

                                                        <td><img src="{{ asset('upload/slider') }}/{{ $slider->slider_image }}"
                                                                height="40px" width="40px"></td>


                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="javascript:;"
                                                                    class="dropdown-toggle-nocaret options dropdown-toggle"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <span
                                                                        class="material-icons-outlined fs-5">more_vert</span>
                                                                </a>
                                                                <ul class="dropdown-menu" style="">




                                                                    <li><a class="dropdown-item" data-bs-toggle="modal"
                                                                            data-bs-target="#deleteModal_{{ $slider->id }}"
                                                                            href="javascript:;">{{ __('Delete') }}</a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="deleteModal_{{ $slider->id }}"
                                                        tabindex="-1" aria-labelledby="deleteModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteModalLabel">
                                                                        Confirmation </h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <form method="post" action={{ route('slider.destroy') }}>
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <input type="hidden" name="slider_id"
                                                                            value="{{ $slider->id }}">
                                                                        <h5>Are you sure. You want to delete this data!
                                                                        </h5>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">No</button>
                                                                        <button type="submit"
                                                                            class="btn btn-outline-danger loader_btn">Yes,
                                                                            Delete!
                                                                            <span
                                                                                class="spinner-border spinner-border-sm save_spinner d-none"
                                                                                role="status" aria-hidden="true"></span>
                                                                            <span class="sr-only"></span>
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </tr>
                                                @endforeach
                                            @endif


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5 class="modal-title">Notice</h5>
                    <div class="white_box mb_30">
                        <div class="row justify-content-center">
                            <div class="modal-content cs_modal">
                                <div class="modal-header">
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{ route('notice.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="mb-3 form-group">
                                                    <label for="">Notice </label>
                                                    <textarea name="notice" id="notice" cols="30" rows="10" placeholder="Write notice here..">
                                                        {{ $noticeSection->notice ?? '' }}
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="text-center btn_1 full_width">Save</button>
                                    </form>
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
