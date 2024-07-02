<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from welly.dexignzone.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jun 2024 04:35:25 GMT -->

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
    <title>Register</title>
    <!-- Favicon icon -->
    <link rel="icon" type="{{ asset('') }}assets/image/png" sizes="16x16"
        href="{{ asset('') }}assets/images/favicon.png">
    <link href="{{ asset('') }}assets/css/style.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
        rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">

                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.html"><img src="{{ asset('') }}assets/logo.jpg"
                                                width="100" class="rounded-circle" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4 text-white">Sign up your account</h4>
                                    <form action="/register/create" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Nama</strong></label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Sign me
                                                up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="text-white">Already have an account? <a class="text-white"
                                                href="/login">Sign in</a></p>
                                    </div>
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
    <script src="{{ asset('') }}assets/vendor/global/global.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('') }}assets/js/custom.min.js"></script>
    <script src="{{ asset('') }}assets/js/deznav-init.js"></script>

</body>

<!-- Mirrored from welly.dexignzone.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jun 2024 04:35:25 GMT -->

</html>
