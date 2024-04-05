@if (Session::has('success'))
    <div class="alert alert-success alert_message">
        {{ session('success') }}
    </div>
@endif
@if (Session::has('info'))
    <div class="alert alert-info alert_message">
        {{ session('info') }}
    </div>
@endif
@if (Session::has('warning'))
    <div class="alert alert-warning alert_message">
        {{ session('warning') }}
    </div>
@endif
@if (Session::has('error'))
    <div class="alert alert-danger alert_message">
        {{ session('error') }}
    </div>
@endif
