<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KBS - Admin</title>
    <link rel="apple-touch-icon" href="asset_admin/images/favicon/">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon.png" />

<head>
   @include('admin.layout.styles')
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    @include('admin.layout.header')
    <!-- END: Header-->
   
    <!-- BEGIN: SideNav-->
   @include('admin.layout.sidebar')
    <!-- END: SideNav-->

    @yield('content')

    <!-- Theme Customizer -->

>@include('admin.layout.scripts')
  </body>


</html>