<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="e-sertif, sertifikat vokasi unair">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - E-Sertifikat Fakultas Vokasi</title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/LogoUnair.png') }}">
    <!-- Start css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <style>
        .card{
            box-shadow: 10px 10px 15px;
        }
    </style>
    <!-- End css -->
</head>
<body class="vertical-layout">
    <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar">
        <!-- Start Container -->
        <div class="container">
            <div class="auth-box login-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                        <div class="form-head">
                                            <h1>E-Sertifikat Fakultas Vokasi</h1>
                                        </div>                                        
                                        <h4 class="text-primary my-4">Log in !</h4>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nim" id="nim" placeholder="Enter Username here" required>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password here" required>
                                        </div>
                                                             
                                      <button type="submit" class="btn btn-success btn-lg btn-block font-18">Log in</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Auth Box -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Container -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->        
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/detect.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <!-- End js -->
</body>
</html>