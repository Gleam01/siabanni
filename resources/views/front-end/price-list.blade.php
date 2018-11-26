@extends('front-end.layout')
@section('content')
<!-- start hero -->
<section id="hero">
    <div class="inner-banner" style="background-image:url(http://via.placeholder.com/1660x300)">
        <div class="container">
            <h3 class="title">Our <br><big><strong>Pricing Table</strong></big></h3>
        </div>
    </div>
</section>

<!-- Content Area -->
<section class="main-section">

    <!-- Price List -->
    <div class="price_list">
        <div class="container">
            <div class="row justify-content-between">
                <div class="section-title left col-lg-4">
                    <h2><span>Pricing </span>Table</h2>
                    <p>Description text here...</p>
                </div>
                <div class="section-title right col-lg-8">
                    <p><span class="color-212121">Oreo University</span> The wise man therefore always holds in these
                        matters to this principle of selection: he rejects pleasures to secure.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="card text-center">
                        <h5>STANDARD</h5>
                        <p>Just need initial support</p>
                        <div class="price l-blue"><h3>$ 39 / <span>year</span></h3></div>

                        <div class="body">
                            <ul class="list-unstyled">
                                <li>Introduction to UI for beginners</li>
                                <li>Easy Zurb Foundation</li>
                                <li>Getting Started with LESS</li>
                                <li>HTML5/CSS3 Essentials in 4-Hours</li>
                            </ul>
                            <button class="btn btn-default btn-simple btn-round btn-lg">Get this plan</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card text-center">
                        <h5>ADVANCED</h5>
                        <p>Just need initial support</p>
                        <div class="price l-parpl"><h3>$ 59 / <span>year</span></h3></div>

                        <div class="body">
                            <ul class="list-unstyled">
                                <li>Introduction to UIUX for beginners</li>
                                <li>Easy Zurb Foundation</li>
                                <li>Getting Started with LESS</li>
                                <li>HTML5/CSS3 Essentials in 4-Hours</li>
                            </ul>
                            <button class="btn btn-default btn-simple btn-round btn-lg">Get this plan</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card text-center">
                        <h5>PROFESSIONAL</h5>
                        <p>Just need initial support</p>
                        <div class="price l-amber"><h3>$ 99 / <span>year</span></h3></div>

                        <div class="body">
                            <ul class="list-unstyled">
                                <li>Introduction to Angular for beginners</li>
                                <li>Easy Zurb Foundation</li>
                                <li>Getting Started with LESS</li>
                                <li>HTML5/CSS3 Essentials in 4-Hours</li>
                            </ul>
                            <button class="btn btn-default btn-simple btn-round btn-lg">Get this plan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Price List -->

</section>
@stop
