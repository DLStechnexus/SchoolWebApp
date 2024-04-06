<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a href="{{ route('dashboard') }}"><img src="{{ asset('backend/img/logo.png') }}" alt></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active"><a href="{{ route('dashboard') }}">
                <img src="{{ asset('backend/img/menu-icon/1.svg') }}" alt> <span>Dashboard</span>
            </a></li>

        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="{{ asset('backend/img/menu-icon/2.svg') }}" alt>
                <span>Students</span>
            </a>
            <ul>

                <li><a href="{{ route('student.create') }}">Add Student</a></li>
                <li><a href="{{ route('student.list') }}">Student List</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="{{ asset('backend/img/menu-icon/3.svg') }}" alt>
                <span>Staff Member</span>
            </a>
            <ul>
                <li><a href="{{ route('staff.create') }}">Add Staff</a></li>
                <li><a href="{{ route('staff.list') }}">List Staff</a></li>

            </ul>
        </li>

        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="{{ asset('backend/img/menu-icon/5.svg') }}" alt>
                <span>Results</span>
            </a>
            <ul>
                <li><a href="{{ route('result.create') }}">Add Results</a></li>
                <li><a href="{{ route('result.list') }}">List Result</a></li>

            </ul>
        </li>

        <li>
            <a href="{{ route('setting.create') }}">
                <img src="{{ asset('backend/img/menu-icon/4.svg') }}" alt> <span>Setting</span>
            </a>
        </li>


    </ul>
</nav>
