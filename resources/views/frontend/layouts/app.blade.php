<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Start Head Area -->
    @include('frontend.body.head')
    <!-- End Head Area -->
</head>

<body class="home page">
    <div class="container-page">

        <!-- Preloader -->
        <div class="preloader">
            <div class="centrize full-width">
                <div class="vertical-center">
                    <div class="spinner-logo">
                        <img src="{{ asset('uploads/settings/' . $setting->image) }}" alt="">
                        <div class="spinner-dot"></div>
                        <div class="spinner spinner-line"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Preloader -->


        <!-- Header -->
        <header class="header">
            @include('frontend.body.header')
        </header>
        <!--// Header -->


        <!-- Wrapper -->
        <div class="wrapper">


            <!--  Start Main Area -->
            @yield('content')
            <!--  End Main Area -->

        </div>

        <!-- Footer -->
        <footer class="footer">
            @include('frontend.body.footer')
        </footer>
        <!--// Footer -->


        <!-- cursor -->
        <div class="cursor"></div>

    </div>

    <!-- Start js -->
    @include('frontend.body.js')
    <!--// End js -->

</body>

</html>
