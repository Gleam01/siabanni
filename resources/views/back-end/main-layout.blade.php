<!doctype html>
<html class="no-js " lang="en">
  <head>
    @include('back-end.includes.head')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('styles')
  </head>

  <body class="theme-blush">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="{{asset('back-end/images/logo.svg')}}" width="48" height="48" alt="Oreo"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <!-- Top Bar -->
    @include('back-end.includes.menu')

    <!-- Left Sidebar -->
    @include('back-end.includes.left-sidebar')

    <!-- Right Sidebar -->
    @include('back-end.includes.right-sidebar')

    <!-- Chat-launcher -->
    @include('back-end.includes.chat-launcher')

    <!-- Main Content -->
    @yield('content')

    <!-- Jquery Core Js -->
    <script src="{{asset('back-end/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
    <script src="{{asset('back-end/bundles/vendorscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->
    <script src="{{asset('back-end/bundles/mainscripts.bundle.js')}}"></script>
    <!--<script src="{{asset('back-end/plugins/jquery/jquery-v3.2.1.min.js')}}"></script>-->
    <script src="{{asset('back-end/plugins/bootstrap/js/bootstrap.js')}}"></script>

    @yield('scripts')
  </body>
</html>
