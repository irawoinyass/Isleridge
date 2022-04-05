<!DOCTYPE html>
<html lang="en">

<head>
        
        <meta charset="utf-8" />
        <title>{{ config('app.name', 'ISLERIDGE') }} | {{$title}}</title>
                  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="{{ config('app.name', 'ISLERIDGE') }} | {{$title}}" name="{{$title}}" />
        <meta content="I-Tech" name="irawo_inyass" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">

  
         <link href="{{ asset('admin/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

          
      

      <link rel="stylesheet" type="text/css" href="{{asset('css/progress.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/overlay.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.min.css') }}">
      <link href="{{ asset('admin/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

      <!-- Bootstrap Css -->
        <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('admin/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        <style type="text/css">
          body{
            font-family: Arial !important;

          }
        </style>
    </head>

    <body data-sidebar="dark">

 <!-- Begin page -->
<div id="layout-wrapper">

@include('SuperAdminInc.header')
@include('SuperAdminInc.sider')
<div class="overlays"><div class="loaders"></div></div>
     @yield('content')

@include('SuperAdminInc.footer')
</div>





      <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('admin/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script>

        <!-- apexcharts -->
    <!--     <script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script> -->

         <script src="{{asset('admin/assets/libs/select2/js/select2.min.js')}}"></script>
        <script src="{{asset('js/moment.js')}}"></script>
       

       <!--  <script src="{{ asset('admin/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script> -->
        
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       <script src="{{ asset('DataTables/datatables.js') }}" defer ></script>
        <!-- App js -->
          <script src="{{ asset('admin/assets/js/pages/form-advanced.init.js') }}"></script>
         <!--     <script src="{{ asset('admin/assets/js/pages/sweet-alerts.init.js') }}"></script> -->
<!--         <script src="{{ asset('admin/assets/js/pages/dashboard.init.js') }}"></script> -->
        <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    </body>



</html>
