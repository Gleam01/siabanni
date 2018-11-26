@extends('front-end.layout')
@section('content')
<!-- start hero -->
<section id="hero">
    <div class="slider" style="background-image:url(http://via.placeholder.com/1680x550)">
        <div class="container">
            <div class="slider_text">
                <h3 class="title"><span>Welcome to</span> <br>
                    Oreo <strong>University</strong></h3>
                <p class="sub-title">Contrary to popular belief, Lorem Ipsum is not simply random text.</p><br>
                <button class="btn btn-primary btn-round">View More</button>
            </div>
            <div class="slider_form row">
                <p class="col-12">Choose Your Course</p>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <input type="text" value="" placeholder="Enter Name" class="form-control m-b-15">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-6">
                    <div class="form-group">
                        <input type="text" value="" placeholder="Enter Email" class="form-control m-b-15">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-6">
                    <div class="form-group">
                        <input type="text" value="" placeholder="Enter Phone" class="form-control m-b-15">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-6">
                    <select class="form-control m-b-15">
                        <option selected="selected">Choose Faculty</option>
                        <option>Marc Parcival</option>
                        <option>Alen Bailey</option>
                        <option>Basil Andrew</option>
                        <option>Giles Franklin</option>
                        <option>Edgar Denzil</option>
                        <option>Garfield Feris</option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-6 col-6">
                    <div class="form-group">
                        <input type="text" value="" placeholder="Date Of Birth" class="form-control m-b-15">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <button class="btn btn-primary btn-round btn-block m-t-0 m-b-0">Submit</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Content Area -->
<section class="main-section">

    <!-- Home About Us Section -->
    <div class="about-us-section">
        <div class="container">
            <div class="row">
                <div class="section-title col-12">
                    <h2><span>About </span>Us</h2>
                    <p>Description text here...</p>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-5 col-sm-12">
                    <div class="box-img box-shadow m-b-20">
                        <img src="http://via.placeholder.com/445x285" alt="">
                        <span class="section-line"></span>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="common-cnt">
                        <div class="section-top">
                            <p><strong>Oreo University </strong> isIt is a long established fact that a reader will
                                be distracted by the readable content.</p>
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                            piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-graduation-cap"></i>Over 14 Million Students</li>
                            <li><i class="zmdi zmdi-thumb-up"></i>More Than 30,000 Courses</li>
                            <li><i class="zmdi zmdi-globe"></i>Learn Anything Online</li>
                        </ul>
                        <p>
                            <a href="about.blade.php" class="btn btn-primary btn-simple btn-round margin-0">View More</a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 section-bottom">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form, by injected humour, or randomised words which don't look
                        even slightly believable.</p>
                    <ul class="row list-unstyled">
                        <li class="col-sm-6 col-md-4 col-lg-2">
                            <div class="about-box text-center">
                                <i class="zmdi zmdi-lamp"></i>
                                <span>Science Lab</span>
                            </div>
                        </li>
                        <li class="col-sm-6 col-md-4 col-lg-2">
                            <div class="about-box text-center">
                                <i class="zmdi zmdi-puzzle-piece"></i>
                                <span>Games library</span>
                            </div>
                        </li>
                        <li class="col-sm-6 col-md-4 col-lg-2">
                            <div class="about-box text-center">
                                <i class="zmdi zmdi-collection-music"></i>
                                <span>Music library</span>
                            </div>
                        </li>
                        <li class="col-sm-6 col-md-4 col-lg-2">
                            <div class="about-box text-center">
                                <i class="zmdi zmdi-desktop-mac"></i>
                                <span>Computer Lab</span>
                            </div>
                        </li>
                        <li class="col-sm-6 col-md-4 col-lg-2">
                            <div class="about-box text-center">
                                <i class="zmdi zmdi-desktop-mac"></i>
                                <span>Book library</span>
                            </div>
                        </li>
                        <li class="col-sm-6 col-md-4 col-lg-2">
                            <div class="about-box text-center">
                                <i class="zmdi zmdi-ticket-star"></i>
                                <span>cantin</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Home About Us Section -->

    <!-- Our Best Courses -->
    <div class="our-best-courses xl-darkblack section-65-100">
        <div class="container">
            <div class="row">
                <div class="section-title left col-lg-10">
                    <h2><span>Our </span>Best Courses</h2>
                    <p>Description text here...</p>
                </div>
                <div class="section-title right col-lg-2">
                    <a href="courses.blade.php" class="btn btn-primary btn-round btn-simple float-md-right">View All</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="courses-box">
                        <div class="courses-img"><img src="http://via.placeholder.com/280x190"alt="Magento Programmer"></div>
                        <div class="courses-cnt">
                            <div class="courses-name">Magento Programmer</div>
                            <ul class="list-unstyled">
                                <li>
                                    <label>Fees:</label>
                                    <span>$349.00</span>
                                </li>
                                <li>
                                    <label>Prof.:</label>
                                    <span>Chris Fox</span>
                                </li>
                                <li>
                                    <label>Time:</label>
                                    <span>6months</span>
                                </li>
                                <li>
                                    <label>Students:</label>
                                    <span>65</span>
                                </li>
                            </ul>
                            <a class="btn btn-simple btn-round displayblock" href="javascript:void(0);">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="courses-box">
                        <div class="courses-img"><img src="http://via.placeholder.com/280x190"
                                                      alt="Magento Programmer"></div>
                        <div class="courses-cnt">
                            <div class="courses-name">PHP Course</div>
                            <ul class="list-unstyled">
                                <li>
                                    <label>Fees:</label>
                                    <span>$300.00</span>
                                </li>
                                <li>
                                    <label>Prof.:</label>
                                    <span>Joge Lucky</span>
                                </li>
                                <li>
                                    <label>Time:</label>
                                    <span>3months</span>
                                </li>
                                <li>
                                    <label>Students:</label>
                                    <span>78</span>
                                </li>
                            </ul>
                            <a class="btn btn-simple btn-round displayblock" href="javascript:void(0);">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="courses-box">
                        <div class="courses-img"><img src="http://via.placeholder.com/280x190"
                                                      alt="Magento Programmer"></div>
                        <div class="courses-cnt">
                            <div class="courses-name">Web Design Course</div>
                            <ul class="list-unstyled">
                                <li>
                                    <label>Fees:</label>
                                    <span>$249.00</span>
                                </li>
                                <li>
                                    <label>Prof.:</label>
                                    <span>Will Smith</span>
                                </li>
                                <li>
                                    <label>Time:</label>
                                    <span>3months</span>
                                </li>
                                <li>
                                    <label>Students:</label>
                                    <span>115</span>
                                </li>
                            </ul>
                            <a class="btn btn-simple btn-round displayblock" href="javascript:void(0);">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="courses-box">
                        <div class="courses-img"><img src="http://via.placeholder.com/280x190"
                                                      alt="Magento Programmer"></div>
                        <div class="courses-cnt">
                            <div class="courses-name">Angular Developer</div>
                            <ul class="list-unstyled">
                                <li>
                                    <label>Fees:</label>
                                    <span>$505.00</span>
                                </li>
                                <li>
                                    <label>Prof.:</label>
                                    <span>Alexander</span>
                                </li>
                                <li>
                                    <label>Time:</label>
                                    <span>9months</span>
                                </li>
                                <li>
                                    <label>Students:</label>
                                    <span>45</span>
                                </li>
                            </ul>
                            <a class="btn btn-simple btn-round displayblock" href="javascript:void(0);">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Home About Us Section -->

    <!-- Home Fun Fact -->
    <div class="fun-fact">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="fun-fact-box text-center">
                        <i class="zmdi zmdi-account"></i>
                        <span class="counter timer" data-from="0" data-to="652" data-speed="2500"
                              data-fresh-interval="700">652</span>
                        <p>CERTIFIED TEACHERS</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="fun-fact-box text-center">
                        <i class="zmdi zmdi-favorite"></i>
                        <span class="counter timer" data-from="0" data-to="7652" data-speed="2500"
                              data-fresh-interval="700">7652</span>
                        <p>FOREIGN FOLLOWERS</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="fun-fact-box text-center">
                        <i class="zmdi zmdi-thumb-up"></i>
                        <span class="counter timer" data-from="0" data-to="52" data-speed="2500"
                              data-fresh-interval="700">52</span>
                        <p>Years Of Experience</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="fun-fact-box text-center">
                        <i class="zmdi zmdi-mood"></i>
                        <span class="counter timer" data-from="0" data-to="7652" data-speed="2500"
                              data-fresh-interval="700">7652</span>
                        <p>Well Smiley Faces</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Home Fun Fact -->

    <!-- Upcoming Event -->
    <div class="upcoming-event">
        <div class="container">
            <div class="row">
                <div class="section-title col-12">
                    <h2><span>Upcoming </span>Event</h2>
                    <p>Description text here...</p>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-6 col-md-12">
                    <div class="common-cnt">
                        <div class="section-top">
                            <p>
                                ANNUAL MEET UP AND<br>
                                SCHOLARSHIP<br>
                                PRESENTATIONS
                            </p>
                        </div>
                        <p class="date">29-APRIL-2018</p>
                        <p class="address">Sayidan Street, Gondomanan, 8993,<br>
                            San Francisco, CA</p>
                        <p>
                            <a class="btn btn-primary btn-lg btn-round">Join Now</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="box-img box-shadow">
                        <img src="http://via.placeholder.com/595x390" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Home Why choose us -->

    <!-- Home Our Team -->
    <div class="our-team">
        <div class="container">
            <div class="row justify-content-between">
                <div class="section-title left col-lg-5">
                    <h2><span>Meet </span>Our Team</h2>
                    <p>Description text here...</p>
                </div>
                <div class="section-title right col-lg-7">
                    <p><span class="color-212121">Oreo University </span> The wise man therefore always holds in
                        these matters to this
                        principle of selection: he rejects pleasures to secure.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-box text-center">
                        <div class="doctor-pic"><img src="http://via.placeholder.com/285x260" alt="Pro. John"></div>
                        <div class="team-info">
                            <h4>Pro. John <span>Dentist</span></h4>
                            <ul class="clearfix">
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                            <a class="btn btn-simple btn-primary btn-round" href="teacher-detail.blade.php">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-box text-center">
                        <div class="doctor-pic"><img src="http://via.placeholder.com/285x260" alt="Pro. Amelia"></div>
                        <div class="team-info">
                            <h4>Pro. Amelia <span>Gynecologist</span></h4>
                            <ul class="clearfix">
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                            <a class="btn btn-simple btn-primary btn-round" href="javascript:void(0);">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-box text-center">
                        <div class="doctor-pic"><img src="http://via.placeholder.com/285x260" alt="Pro. Jack"></div>
                        <div class="team-info">
                            <h4>Pro. Jack <span>Audiology</span></h4>
                            <ul class="clearfix">
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-google-plus"></i></a></li>
                            </ul>
                            <a class="btn btn-simple btn-primary btn-round" href="javascript:void(0);">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-box text-center">
                        <div class="doctor-pic"><img src="http://via.placeholder.com/285x260" alt="Pro. Charlie"></div>
                        <div class="team-info">
                            <h4>Pro. Charlie<span>Dentist</span></h4>
                            <ul class="clearfix">
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                            <a class="btn btn-simple btn-primary btn-round" href="javascript:void(0);">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Home Our Team -->

    <!-- Home Support -->
    <div class="support-home text-center xl-darkblack">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Become a Teacher</h4>
                    <p>Please feel free to contact us at (01) 234 5678</p>
                    <a class="btn btn-primary btn-round" href="javascript:void(0);">Start Teaching</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Home Support -->

    <!-- Home Blog -->
    <div class="home-blog">
        <div class="container">
            <div class="row">
                <div class="section-title col-12">
                    <h2><span>Latest </span>From Blog</h2>
                    <p>Description text here...</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="http://via.placeholder.com/365x245" alt="">
                        </div>
                        <div class="blog-cnt">
                            <h5><a href="javascript:void(0);">How to handle your kids’ from Lorem ipsum dolor sit amet</a></h5>
                            <p>The great explorer of the truth, master builder of human happiness one rejects,
                                dislikes[...]</p>
                        </div>
                        <div class="blog-info">
                            <span class="blog-date"><i class="zmdi zmdi-calendar"></i> 02 Feb 2018</span>
                            <span class="blog-comment"><i class="zmdi zmdi-comments"></i> Comment ( 25 )</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="http://via.placeholder.com/365x245" alt="">
                        </div>
                        <div class="blog-cnt">
                            <h5><a href="javascript:void(0);">How to handle your kids’ from Lorem ipsum dolor sit amet</a></h5>
                            <p>The great explorer of the truth, master builder of human happiness one rejects,
                                dislikes[...]</p>
                        </div>
                        <div class="blog-info">
                            <span class="blog-date"><i class="zmdi zmdi-calendar"></i> 02 Feb 2018</span>
                            <span class="blog-comment"><i class="zmdi zmdi-comments"></i> Comment ( 25 )</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 hidden-md-down">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="http://via.placeholder.com/365x245" alt="">
                        </div>
                        <div class="blog-cnt">
                            <h5><a href="javascript:void(0);">How to handle your kids’ from Lorem ipsum dolor sit amet</a></h5>
                            <p>The great explorer of the truth, master builder of human happiness one rejects,
                                dislikes[...]</p>
                        </div>
                        <div class="blog-info">
                            <span class="blog-date"><i class="zmdi zmdi-calendar"></i> 02 Feb 2018</span>
                            <span class="blog-comment"><i class="zmdi zmdi-comments"></i> Comment ( 25 )</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Home Blog -->

</section>

@stop
