<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title') - DMG®</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('backend/css/app.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/bundles/bootstrap-social/bootstrap-social.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/css/components.css') }}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}">
  <link rel='shortcut icon' type='image/x-icon' href='{{ asset('backend/img/favicon.ico') }}'/>
  <link rel="stylesheet" href="//cdn.web-fonts.ge/fonts/bpg-mrgvlovani/css/bpg-mrgvlovani.min.css">
  <style>
    h1,h2,h3,h4,h5,h6 ,p,a ,button,label{
     font-family: "BPG Mrgvlovani", sans-serif !important;
    }
  </style>
</head>

<body>
        <div class="loader"></div>
        <div id="app">
        <section class="section">

            <div class="container">
                <div class="row">
                  <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="text-center">
                        <img  src="{{ asset('images/logo/logo.png') }}" width="50%" alt="logo">
                    </div>

                    @yield('content')

                    <div class="mt-5 text-muted text-center">
                        Copyright &copy; {{ date('Y') }} <a href="https://diem.ge" target="_blank">DMG</a> <sup>®</sup>
                    </div>
                  </div>
                </div>
            </div>

        </section>
        </div>
    <!-- General JS Scripts -->
    <script src="{{ asset('backend/js/app.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="{{ asset('backend/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('backend/js/custom.js') }}"></script>
</body>

</html>

