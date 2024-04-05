<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/finance-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2024 16:22:37 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>School | @yield('title')</title>
    <link rel="icon" href="{{asset('backend/img/logo.png') }}" type="image/png">

    <link rel="stylesheet" href="{{asset('backend/css/bootstrap1.min.css') }}" />

    <link rel="stylesheet" href="{{asset('backend/vendors/themefy_icon/themify-icons.css') }}" />

    <link rel="stylesheet" href="{{asset('backend/vendors/swiper_slider/css/swiper.min.css') }}" />

    <link rel="stylesheet" href="{{asset('backend/vendors/select2/css/select2.min.css') }}" />

    <link rel="stylesheet" href="{{asset('backend/vendors/niceselect/css/nice-select.css') }}" />

    <link rel="stylesheet" href="{{asset('backend/vendors/owl_carousel/css/owl.carousel.css') }}" />

    <link rel="stylesheet" href="{{asset('backend/vendors/gijgo/gijgo.min.css') }}" />

    <link rel="stylesheet" href="{{asset('backend/vendors/font_awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{asset('backend/vendors/tagsinput/tagsinput.css') }}" />

    <link rel="stylesheet" href="{{asset('backend/vendors/datatable/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{asset('backend/vendors/datatable/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{asset('backend/vendors/datatable/css/buttons.dataTables.min.css') }}" />

    <link rel="stylesheet" href="{{asset('backend/vendors/text_editor/summernote-bs4.css') }}" />

    <link rel="stylesheet" href="{{asset('backend/vendors/morris/morris.css') }}">

    <link rel="stylesheet" href="{{asset('backend/vendors/material_icon/material-icons.css') }}" />

    <link rel="stylesheet" href="{{asset('backend/css/metisMenu.css') }}">

    <link rel="stylesheet" href="{{asset('backend/css/style1.css') }}" />
    <link rel="stylesheet" href="{{asset('backend/css/colors/default.css') }}" id="colorSkinCSS">
</head>

<body class="crm_body_bg">



    @include('backend.layouts.sidebar')


    <section class="main_content dashboard_part">

        @include('backend.layouts.header')

        @yield('content')

        @include('backend.layouts.footer')
    </section>



    <script src="{{asset('backend/js/jquery1-3.4.1.min.js') }}"></script>

    <script src="{{asset('backend/js/popper1.min.js') }}"></script>

    <script src="{{asset('backend/js/bootstrap1.min.js') }}"></script>

    <script src="{{asset('backend/js/metisMenu.js') }}"></script>

    <script src="{{asset('backend/vendors/count_up/jquery.waypoints.min.js') }}"></script>

    <script src="{{asset('backend/vendors/chartlist/Chart.min.js') }}"></script>

    <script src="{{asset('backend/vendors/count_up/jquery.counterup.min.js') }}"></script>

    <script src="{{asset('backend/vendors/swiper_slider/js/swiper.min.js') }}"></script>

    <script src="{{asset('backend/vendors/niceselect/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{asset('backend/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>

    <script src="{{asset('backend/vendors/gijgo/gijgo.min.js') }}"></script>

    <script src="{{asset('backend/vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset('backend/vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{asset('backend/vendors/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{asset('backend/vendors/datatable/js/buttons.flash.min.js') }}"></script>
    <script src="{{asset('backend/vendors/datatable/js/jszip.min.js') }}"></script>
    <script src="{{asset('backend/vendors/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{asset('backend/vendors/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{asset('backend/vendors/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{asset('backend/vendors/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{asset('backend/js/chart.min.js') }}"></script>

    <script src="{{asset('backend/vendors/progressbar/jquery.barfiller.js') }}"></script>

    <script src="{{asset('backend/vendors/tagsinput/tagsinput.js') }}"></script>

    <script src="{{asset('backend/vendors/text_editor/summernote-bs4.js') }}"></script>
    <script src="{{asset('backend/vendors/apex_chart/apexcharts.js') }}"></script>

    <script src="{{asset('backend/js/custom.js') }}"></script>

    <script src="{{asset('backend/js/active_chart.js') }}"></script>
    <script src="{{asset('backend/vendors/apex_chart/radial_active.js') }}"></script>
    <script src="{{asset('backend/vendors/apex_chart/stackbar.js') }}"></script>
    <script src="{{asset('backend/vendors/apex_chart/area_chart.js') }}"></script>

    <script src="{{asset('backend/vendors/apex_chart/bar_active_1.js') }}"></script>
    <script src="{{asset('backend/vendors/chartjs/chartjs_active.js') }}"></script>
    @yield('script')
</body>

<!-- Mirrored from demo.dashboardpack.com/finance-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2024 16:23:01 GMT -->

</html>
