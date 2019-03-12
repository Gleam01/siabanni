@extends('back-end.main-layout')

@section('styles')
  <!-- Light Gallery Plugin Css -->
  <link rel="stylesheet" href="{{asset('back-end/plugins/light-gallery/css/lightgallery.css')}}">
@stop

@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Image Gallery
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{route('back.home')}}"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                    <li class="breadcrumb-item active">Image Gallery</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Gallery</strong> <small>All pictures taken from <a href="https://pexels.com/" target="_blank">pexels.com</a></small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('back-end/images/image-gallery/1.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('back-end/images/image-gallery/1.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('back-end/images/image-gallery/2.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('back-end/images/image-gallery/2.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('back-end/images/image-gallery/3.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('back-end/images/image-gallery/3.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('back-end/images/image-gallery/4.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('back-end/images/image-gallery/4.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('back-end/images/image-gallery/5.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('back-end/images/image-gallery/5.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('back-end/images/image-gallery/6.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('back-end/images/image-gallery/6.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('back-end/images/image-gallery/7.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('back-end/images/image-gallery/7.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('back-end/images/image-gallery/8.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('back-end/images/image-gallery/8.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('back-end/images/image-gallery/9.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('back-end/images/image-gallery/9.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('back-end/images/image-gallery/10.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('back-end/images/image-gallery/10.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('back-end/images/image-gallery/11.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('back-end/images/image-gallery/11.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('back-end/images/image-gallery/12.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('back-end/images/image-gallery/12.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('back-end/images/image-gallery/13.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('back-end/images/image-gallery/13.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('back-end/images/image-gallery/14.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('back-end/images/image-gallery/14.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('back-end/images/image-gallery/15.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('back-end/images/image-gallery/15.jpg')}}" alt=""> </a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('styles')
  <script src="{{asset('back-end/plugins/light-gallery/js/lightgallery-all.min.js')}}"></script> <!-- Light Gallery Plugin Js -->
  <script src="{{asset('back-end/js/pages/medias/image-gallery.js')}}"></script>
@stop
