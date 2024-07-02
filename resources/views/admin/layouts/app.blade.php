<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from welly.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jun 2024 04:32:23 GMT -->

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords"
        content="admin dashboard, admin template, administration, analytics, bootstrap, disease, doctor, elegant, health, hospital admin, medical dashboard, modern, responsive admin dashboard">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="">
    <meta name="description"
        content="Welly is a clean-code, responsive HTML Admin template that can be easily customized to fit the needs of various hospital, medical dashboard, health, doctor, and other businesses.">
    <meta property="og:title" content="Welly - Hospital Admin Dashboard Bootstrap HTML Template">
    <meta property="og:description"
        content="Welly is a clean-code, responsive HTML Admin template that can be easily customized to fit the needs of various hospital, medical dashboard, health, doctor, and other businesses.">
    <meta property="og:image" content="social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Admin</title>
    <!-- Favicon icon -->
    <link href="{{ asset('') }}assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <link href="{{ asset('assets/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
        rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    <!--**********************************
                    Main wrapper start
                ***********************************-->
    <div id="main-wrapper">
        @include('admin.layouts.header')
        <div class="content-body">
            <div class="container-fluid">

                @yield('content')

                
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/global/global.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('') }}assets/js/custom.min.js"></script>
    <script src="{{ asset('') }}assets/js/deznav-init.js"></script>

    <!-- Datatable -->
    <script src="{{ asset('') }}assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}assets/js/plugins-init/datatables.init.js"></script>

    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>



    <script src="{{ asset('assets/vendor/chart-js/chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
    <!-- Chart piety plugin files -->
    <script src="{{ asset('assets/vendor/peity/jquery.peity.min.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('assets/vendor/apexchart/apexchart.js') }}"></script>

    <!-- Dashboard 1 -->
    <script src="{{ asset('assets/js/dashboard/dashboard-1.js') }}"></script>
    <script>
        $(function() {
            $('#datetimepicker1').datetimepicker({
                inline: true,
            });
        });
    </script>

</body>


</html>
