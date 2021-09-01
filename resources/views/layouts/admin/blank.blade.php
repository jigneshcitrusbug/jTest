<!DOCTYPE html>
<html lang="en" class="loading">
  <!-- BEGIN : Head-->
<head>
@section('head')
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="csrf-token" content="{{ csrf_token() }}">        
  <link rel="apple-touch-icon" sizes="60x60" href="{{ getasset('/app-assets/img/ico/apple-icon-60.png') }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ getasset('/app-assets/img/ico/apple-icon-76.png')}}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ getasset('/app-assets/img/ico/apple-icon-120.png')}}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ getasset('/app-assets/img/ico/apple-icon-152.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ getasset('/app-assets/img/ico/favicon.ico')}}">
  <link rel="shortcut icon" type="image/png" href="{{ getasset('/app-assets/img/ico/favicon-32.png')}}">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
@show

@section('seo')
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="NakshInfotech">
@show

@section('css')
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <!-- font icons-->
  <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/fonts/feather/style.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/fonts/simple-line-icons/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/vendors/css/perfect-scrollbar.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/vendors/css/prism.min.css')}}">

  <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/vendors/css/chartist.min.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN APEX CSS-->
  
  <!-- END APEX CSS-->
  <!-- BEGIN Page Level CSS-->
  <!-- END Page Level CSS-->
  <!-- <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/vendors/css/pickadate/pickadate.css')}}"> -->
  <!-- <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/vendors/css/sweetalert2.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/css/bootstrap-chosen.css')}}"> -->
@show

  <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/css/app.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/css/custom.css')}}">
    
</head>
  <!-- END : Head-->
 
  <!-- BEGIN : Body-->

  
  <body data-col="1-column" class=" 1-column  {{ (getSession('theme-layout') == 'transparent' )  ? ( ' layout-dark '.'layout-'.getSession('theme-layout').' '.getSession('theme-transparent-bg', 'bg-glass-1') )  : ( 'layout-'.getSession('theme-layout')) }}  blank-page ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper {{ getSession('compact-menu') == '1' ? 'nav-collapsed menu-collapsed' : '' }} {{ getSession('sidebar-width') }}">


     

      
      

      <div class="main-panel">
        <!-- BEGIN : Main Content-->
        @yield('content')
       

      

      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    @include('layouts.admin.shared.aside')
    @include('layouts.admin.shared.customizer')

    @section('js')
    <!-- BEGIN VENDOR JS-->
    <script src="{{ getasset('/app-assets/vendors/js/core/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ getasset('/app-assets/vendors/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{ getasset('/app-assets/vendors/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ getasset('/app-assets/vendors/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ getasset('/app-assets/vendors/js/prism.min.js')}}" type="text/javascript"></script>
    <script src="{{ getasset('/app-assets/vendors/js/jquery.matchHeight-min.js')}}" type="text/javascript"></script>
    <script src="{{ getasset('/app-assets/vendors/js/screenfull.min.js')}}" type="text/javascript"></script>
    <script src="{{ getasset('/app-assets/vendors/js/pace/pace.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ getasset('/app-assets/vendors/js/chartist.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="{{ getasset('/app-assets/js/app-sidebar.js')}}" type="text/javascript"></script>
    <script src="{{ getasset('/app-assets/js/notification-sidebar.js')}}" type="text/javascript"></script>
    <script src="{{ getasset('/app-assets/js/customizer.js')}}" type="text/javascript"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    
    <!-- END PAGE LEVEL JS-->
    @show
    @stack('scripts')
  </body>
  <!-- END : Body-->
</html>