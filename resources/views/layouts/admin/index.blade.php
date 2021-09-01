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

  <title>{{ @$seo['title'].' | '.config('app.name', 'Laravel') }}</title>
  <meta name="description" content="{{ @$seo['description'] }}">
  <meta name="author" content="Citrusbug Technolabs">
  <meta property="og:title" content="{{ @$seo['title'] }}" />
  <meta property="og:type" content="{{ @$seo['og_type'] }}" />
  <meta property="og:url" content="{{ @$seo['url'] }}" />
  <meta property="og:image" content="{{ @$seo['og_image'] }}" />
  <meta property="fb:admins" content="{{ @$seo['fb_admins'] }}" />
  <meta property="fb:app_id" content="{{ @$seo['fb_admins'] }}" />
  <meta property="og:site_name" content="{{ @$seo['site_name'] }}" />
  <meta property="og:description" content="{{ @$seo['description'] }}" />
  <!-- Twitter -->
  <meta name="twitter:card" content="{{ @$seo['twitter_card'] }}" />
  <meta name="twitter:site" content="{{ '@'.@$seo['site_name'] }}" />
  <meta name="twitter:title" content="{{ @$seo['title'] }}" />
  <meta name="twitter:description" content="{{ @$seo['description'] }}" />
  <meta name="twitter:image" content="{{ @$seo['og_image'] }}" />
  @show

  @section('css')
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <!-- font icons-->
  <!-- <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/fonts/feather/style.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/fonts/simple-line-icons/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/fonts/font-awesome/css/font-awesome.min.css')}}"> -->
  <!-- <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/vendors/css/perfect-scrollbar.min.css')}}"> -->
  <!-- <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/vendors/css/prism.min.css')}}"> -->

  <!-- <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/vendors/css/chartist.min.css')}}"> -->
  <!-- END VENDOR CSS-->
  <!-- BEGIN APEX CSS-->

  <!-- END APEX CSS-->
  <!-- BEGIN Page Level CSS-->
  <!-- END Page Level CSS-->
  <!-- <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/vendors/css/pickadate/pickadate.css')}}"> -->
  <!-- <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/vendors/css/sweetalert2.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/css/bootstrap-chosen.css')}}"> -->
  @show

  <!-- <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/css/app.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/css/custom.css')}}"> -->
  <!-- <link href="{{ getasset('/app-assets/lightbox/css/lightbox.css') }}" media="all" rel="stylesheet" type="text/css"/> -->

  <!-- <link rel="stylesheet" type="text/css" href="{{ getasset('/css/admin/fonts.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ getasset('/css/admin/vendor.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ getasset('/css/admin/all.css')}}"> -->

  <link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/css/admin.css')}}">

  @stack('css')

</head>
<!-- END : Head-->

<!-- BEGIN : Body-->

<body data-col="2-columns" class="2-columns    {{ (getSession('theme-layout') == 'transparent' )  ? ( ' layout-dark '.'layout-'.getSession('theme-layout').' '.getSession('theme-transparent-bg', 'bg-glass-1') )  : ( 'layout-'.getSession('theme-layout')) }} ">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="wrapper {{ getSession('compact-menu') == '1' ? 'nav-collapsed menu-collapsed' : '' }} {{ getSession('sidebar-width') }}">


    <!-- main menu-->
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    <div data-active-color="{{ getSession('theme-layout') == 'transparent' ? 'black' : getSession('bg-color') }}" data-background-color="{{ getSession('theme-layout') == 'transparent' ? 'black' : getSession('bg-color') }}" data-image="{{ getSession('theme-layout') == 'transparent' ? '' : getasset( getSession('sidebar-background') ) }}" class="app-sidebar">
      <!-- main menu header-->
      <!-- Sidebar Header starts-->
      @include('layouts.admin.shared.logo')



      <!-- Sidebar Header Ends-->
      <!-- / main menu header-->
      <!-- main menu content-->
      @include('layouts.admin.shared.sidebar')


      <!-- main menu content-->
      <div class="sidebar-background" style="background-image: url('{{  getSession('theme-layout') == 'transparent' ? '' : getasset( getSession('sidebar-background') ) }}')"></div>
      <!-- main menu footer-->
      <!-- include includes/menu-footer-->
      <!-- main menu footer-->
    </div>
    <!-- / main menu-->

    @include('layouts.admin.shared.nav')


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
  <!-- <script src="{{ getasset('/app-assets/vendors/js/core/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ getasset('/app-assets/vendors/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{ getasset('/app-assets/vendors/js/core/bootstrap.min.js')}}" type="text/javascript"></script> -->




  <!-- <script src="{{ getasset('/app-assets/vendors/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ getasset('/app-assets/vendors/js/prism.min.js')}}" type="text/javascript"></script>
    <script src="{{ getasset('/app-assets/vendors/js/jquery.matchHeight-min.js')}}" type="text/javascript"></script>
    <script src="{{ getasset('/app-assets/vendors/js/screenfull.min.js')}}" type="text/javascript"></script>
    <script src="{{ getasset('/app-assets/vendors/js/pace/pace.min.js')}}" type="text/javascript"></script> -->

  <!-- <script src="{{ getasset('/js/admin/all.js')}}" type="text/javascript"></script> -->

  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <!-- <script src="{{ getasset('/app-assets/vendors/js/chartist.min.js')}}" type="text/javascript"></script> -->
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN APEX JS-->
  <!-- <script src="{{ getasset('/app-assets/js/app-sidebar.js')}}" type="text/javascript"></script>
    <script src="{{ getasset('/app-assets/js/notification-sidebar.js')}}" type="text/javascript"></script>
    <script src="{{ getasset('/app-assets/js/customizer.js')}}" type="text/javascript"></script>
    <script src="{{ getasset('/app-assets/lightbox/js/lightbox.js') }}" type="text/javascript"></script> -->

  <script src="{{ getasset('/js/admin/admin.js')}}" type="text/javascript"></script>


  <!-- END APEX JS-->
  <!-- BEGIN PAGE LEVEL JS-->

  <!-- END PAGE LEVEL JS-->
  @show
  @stack('scripts')

  @stack('modal')

  <div class="modal fade text-left" id="media-manager" tabindex="-1" role="dialog" aria-labelledby="myModalLabel5" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <iframe src="/media-manager?type=Images" width="100%" height="700px" frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade text-left" id="file-manager" tabindex="-1" role="dialog" aria-labelledby="myModalLabel5" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <iframe src="/media-manager?type=Files" width="100%" height="700px" frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </div>


</body>
<!-- END : Body-->

</html>