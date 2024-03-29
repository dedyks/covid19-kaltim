@extends('layouts.master-without-nav')

@section('body')

<body class="authentication-bg authentication-bg-pattern">
    @endsection

    @section('content')

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-pattern">

                        <div class="card-body p-4">

                            <div class="text-center mb-4">
                                <a href="index">
                                    <span><img src="assets/images/logo-dark.png" alt="" height="22"></span>
                                </a>
                            </div>

                            <div class="text-center w-75 m-auto">
                                <p>Click the button to get your coordinates.</p>

                                <button onclick="getLocation()">Try It</button>

                                <p id="demo"></p>


                                <img src="assets/images/users/user-1.jpg" height="88" alt="user-image"
                                    class="rounded-circle shadow">
                                <h4 class="text-dark-50 text-center mt-3">Hi ! Geneva </h4>
                                <p class="text-muted mb-4">Enter your password to access the admin.</p>
                            </div>



                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                            </div>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-white-50">Not you? return <a href="pages-login"
                                    class="text-white ml-1"><b>Sign In</b></a></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt">
        2015 - {{date('Y')}} &copy; UBold theme by <a href="" class="text-white-50">Coderthemes</a>
    </footer>

    <script>
        var x = document.getElementById("demo");

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            x.innerHTML = "Latitude: " + position.coords.latitude +
                "<br>Longitude: " + position.coords.longitude;
        }

    </script>
    @endsection
