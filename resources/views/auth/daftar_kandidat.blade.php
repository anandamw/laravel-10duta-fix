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
    <title>Daftar Kandidat</title>
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

    <div id="main-wrapper">
        <!--**********************************
                        Nav header start
                    ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr rounded-circle" src="{{ asset('') }}assets/logo.jpg" width="80" alt="">
                <img class="logo-compact" src="{{ asset('') }}assets/images/logo-text.png" alt="">
                <img class="brand-title" src="{{ asset('') }}assets/images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                <div class="input-group search-area d-lg-inline-flex d-none">
                                    <input type="text" class="form-control" placeholder="Search here...">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><a href="javascript:void(0)"><i
                                                    class="flaticon-381-search-2"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </div>


        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class=" ai-icon" href="/dashboard" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Daftar Kandidat</span>
                        </a>
                    </li>
                    <li><a class=" ai-icon" href="/" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Kembali</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        


        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form Pendaftaran Kandidat</h4>
                            </div>

                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="needs-validation" method="POST" action="/kandidat/daftar"
                                        enctype="multipart/form-data" novalidate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label"
                                                        for="validationCustom01">Name
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input placeholder="............................."
                                                            type="text" class="form-control"
                                                            id="validationCustom01" name="nama" required>
                                                        <div class="invalid-feedback">
                                                            Please enter a Name.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label"
                                                        for="validationCustom02">Fakultas
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input placeholder="............................."
                                                            type="text" class="form-control"
                                                            id="validationCustom02" name="fakultas" required>
                                                        <div class="invalid-feedback">
                                                            Please enter a Fakultas.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label"
                                                        for="validationCustom03">Prodi
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input placeholder="............................."
                                                            type="Prodi" class="form-control"
                                                            id="validationCustom03" name="prodi" required>
                                                        <div class="invalid-feedback">
                                                            Please enter a Prodi.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label"
                                                        for="validationCustom03">Domisili
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input placeholder="............................."
                                                            type="Domisili" class="form-control"
                                                            id="validationCustom03" name="domisili" required>
                                                        <div class="invalid-feedback">
                                                            Please enter a Domisili.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label"
                                                        for="validationCustom03">Umur
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input placeholder="............................."
                                                            type="Umur" class="form-control" name="umur"
                                                            id="validationCustom03" required>
                                                        <div class="invalid-feedback">
                                                            Please enter a Umur.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label"
                                                        for="validationCustom05">Jenis
                                                        Kelamin
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select name="jenis_kelamin"
                                                            class="default-select wide form-control"
                                                            id="validationCustom05">
                                                            <option selected>Please select</option>
                                                            <option value="0">Perempuan</option>
                                                            <option value="1">Laki-Laki</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please select a one.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label"
                                                        for="validationCustom05">Angkatan
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select name="angkatan"
                                                            class="default-select wide form-control"
                                                            id="validationCustom05">
                                                            <option selected>Please select</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please select a one.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label"
                                                        for="validationCustom03">Berkas
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input placeholder="............................."
                                                            type="file" class="form-control" name="berkas"
                                                            id="validationCustom03" required>
                                                        <div class="invalid-feedback">
                                                            Please enter a Berkas.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label"
                                                        for="validationCustom03">Gambar
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input placeholder="............................."
                                                            type="file" name="gambar" class="form-control"
                                                            id="validationCustom03" required>
                                                        <div class="invalid-feedback">
                                                            Please enter a Gambar.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom06">No
                                                        Whatsapp
                                                        <span class="text-danger">*</span>
                                                    </label>

                                                    <div class="col-lg-6">
                                                        <input placeholder="............................."
                                                            type="text" name="no_whatsapp" class="form-control"
                                                            required>
                                                        <div class="invalid-feedback">
                                                            Please enter a No Whatsapp.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label"
                                                        for="validationCustom06">Email
                                                        <span class="text-danger">*</span>
                                                    </label>

                                                    <div class="col-lg-6">
                                                        <input placeholder="............................."
                                                            type="email" name="email" class="form-control"
                                                            id="validationCustom06" required>
                                                        <div class="invalid-feedback">
                                                            Please enter a Email.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label"
                                                        for="validationCustom04">Visi <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <textarea class="form-control" placeholder="............................." name="visi" id="validationCustom04"
                                                            rows="5" required></textarea>
                                                        <div class="invalid-feedback">
                                                            Please enter a Visi.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label"
                                                        for="validationCustom04">Misi <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <textarea class="form-control" placeholder="............................." name="misi" id="validationCustom04"
                                                            rows="5" required></textarea>
                                                        <div class="invalid-feedback">
                                                            Please enter a Misi.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label"
                                                        for="validationCustom10">Tinggi
                                                        Badan <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input placeholder="............................."
                                                            type="text" name="tinggi_badan" class="form-control"
                                                            id="validationCustom10" required>
                                                        <div class="invalid-feedback">
                                                            Please enter a tinggi badan.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label"
                                                        for="validationCustom10">Berat
                                                        Badan <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input placeholder="............................."
                                                            type="text" class="form-control" name="berat_badan"
                                                            id="validationCustom10" required>
                                                        <div class="invalid-feedback">
                                                            Please enter a Berat badan.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <div class="col-lg-8 ms-auto">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
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
