@extends('backend.layouts.master')
@section('title')
    List Staff Member
@endsection
@section('content')
    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>Staff Member List</h4>
                            <div class="box_right d-flex lms_block">
                                @include('alert')
                                <div class="add_button ms-2">
                                    <a href="{{ route('staff.create') }}" class="btn_1">Add New</a>
                                </div>
                            </div>
                        </div>
                        <div>

                            <table class="table " id="custom_table">
                                <thead>
                                    <tr>
                                        <th scope="col">SR No.</th>
                                        <th scope="col">Staff Member Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Adhar No.</th>
                                        <th scope="col">Father Name</th>

                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($staff_member))
                                        @foreach ($staff_member as $key => $staff)
                                            <tr>
                                                <th>{{ $key + 1 }}</th>
                                                <th scope="row">{{ $staff->user_unique_id }}
                                                </th>
                                                <td>{{ $staff->name }}</td>
                                                <td>{{ $staff->email }}</td>
                                                <td>{{ $staff->user_details->mobile_number }}</td>
                                                <td>{{ $staff->user_details->aadhar_number }}</td>
                                                <td>{{ $staff->user_details->father_name }}</td>

                                                <td>
                                                    @if ($staff->status == 1)
                                                        <a href="javascript:void(0)" class="status_btn">Active</a>
                                                    @else
                                                        <a href="javascript:void(0)" class="status_btn">In-Active</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:;"
                                                            class="dropdown-toggle-nocaret options dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <span class="material-icons-outlined fs-5">more_vert</span>
                                                        </a>
                                                        <ul class="dropdown-menu" style="">

                                                            <li><a class="dropdown-item"
                                                                    href="{{ route('staff.edit', $staff->id) }}">{{ __('Edit') }}</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="{{ route('staff.details', $staff->id) }}">{{ __('Details') }}</a>
                                                            </li>

                                                            <li><a class="dropdown-item" data-bs-toggle="modal"
                                                                    data-bs-target="#deleteModal_{{ $staff->id }}"
                                                                    href="javascript:;">{{ __('Delete') }}</a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteModal_{{ $staff->id }}" tabindex="-1"
                                                aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalLabel">
                                                                Confirmation </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <form method="post" action={{ route('staff.destroy') }}>
                                                            @csrf
                                                            <div class="modal-body">
                                                                <input type="hidden" name="staff_id"
                                                                    value="{{ $staff->id }}">
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
        </div>
    </div>
@endsection

@section('script')
@endsection
