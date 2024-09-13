<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('app/img/favicon.png" rel="icon')}}">
  <link href="{{asset('app/img/apple-touch-icon.png" rel="apple-touch-icon')}}">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('app/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('app/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('app/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('app/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('app/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('app/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('app/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('app/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    @auth
    <div class="navbar-bg"></div>
    @include('layouts.navbar')
    @include('layouts.sidebar')
    @endauth
      @yield('content')
    @auth
    @include('layouts.footer')
    @endauth

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('app/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('app/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('app/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('app/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('app/vendor/quill/quill.js')}}"></script>
  <script src="{{asset('app/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('app/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('app/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('app/js/main.js')}}"></script>

</body>

</html>