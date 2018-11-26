<!doctype html>
<html class="no-js " lang="en">
  @include('front-end.includes.head')
  <body>
    <div id="loading" class="page-loader-wrapper">
      <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{asset('front-end/images/loader.svg')}}" width="48" height="48" alt="Oreo"></div>
        <p>Please wait...</p>
      </div>
    </div>
    <div class="wrapper">
      <!-- start loading -->
      <div class="main_header">
        @include('front-end.includes.header')
        @include('front-end.includes.menu')
      </div>
      @yield('content')
      @include('front-end.includes.footer')
    </div>
    <!-- start screpting -->
    <script src="{{asset('front-end/bundles/libscripts.bundle.js')}}"></script>
    <script src="{{asset('front-end/js/app.js')}}"></script><!-- my js -->
    <script src="{{asset('front-end/js/countTo.js')}}"></script>
    @yield('scripts')
  </body>
</html>
