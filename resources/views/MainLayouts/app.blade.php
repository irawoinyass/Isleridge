<!doctype html>
<html lang="zxx">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/animate.min.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/flaticon.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/nice-select.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/slick.min.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/meanmenu.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/odometer.min.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/responsive.css') }}">
<title>{{ config('app.name', 'ISLERIDGE') }}</title>
<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

<div class="preloader">
<div class="loader">
<div class="shadow"></div>
<div class="box"></div>
</div>
</div>


@include('MainInc.header')
  @yield('content')
@include('MainInc.footer')


<div class="go-top"><i class="fas fa-arrow-up"></i></div>

<!-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/meanmenu.js') }}"></script>
<script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/appear.min.js') }}"></script>
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/parallax.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
