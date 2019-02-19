@extends('front-end.layout')
@section('content')
<!-- start hero -->
<section id="hero">
    <div class="inner-banner" style="background-image:url(http://via.placeholder.com/1660x300)">
        <div class="container">
            <h3 class="title">Oreo <br><big><strong>404</strong></big></h3>
        </div>
    </div>
</section>

<!-- Content Area -->
<section class="main-section">

    <!-- About Us Section -->
    <div class="page-not-found">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="top-big">404</h2>
                    <h6>SORRY PAGE NOT FOUND</h6>
                    <p>The page you are looking for is not available or has been removed.<br>
                        Try going to <strong>HOME PAGE </strong>by using the button below.</p>
                    <p>
                        <a class="btn btn-primary btn-round text-uppercase" href="{{route('front.home')}}">Go To Home</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section -->

</section>
@stop
