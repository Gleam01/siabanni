@extends('back-end.main-layout')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>App Widgets
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{route('back.home')}}"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item active">Widgets</li>
                    <li class="breadcrumb-item active">App</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card project_widget">
                        <div class="pw_img">
                        <img class="img-fluid"
                        ="{{asset('back-end/images/image2.jpg')}}" alt="About the image">
                    </div>
                    <div class="pw_content">
                        <div class="pw_header">
                            <h6>Magazine Design</h6>
                            <small class="text-muted">Oreo  |  Last Update: 12 Dec 2017</small>
                        </div>
                        <div class="pw_meta">
                            <span>4,870 USD</span>
                            <small class="text-muted">Budget / Salary</small>
                            <small class="text-danger">17 Days Remaining</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card project_widget">
                    <div class="pw_img">
                        <img class="img-fluid" src="{{asset('back-end/images/image4.jpg')}}" alt="About the image">
                    </div>
                    <div class="pw_content">
                        <div class="pw_header">
                            <h6>New Dashboard</h6>
                            <small class="text-muted">Oreo  |  Last Update: 17 Dec 2017</small>
                        </div>
                        <div class="pw_meta">
                            <span>921 USD</span>
                            <small class="text-muted">Budget / Salary</small>
                            <small class="text-success">Early Dec 2017</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card project_widget">
                        <div class="pw_img">
                        <img class="img-fluid" src="{{asset('back-end/images/image3.jpg')}}" alt="About the image">
                    </div>
                    <div class="pw_content">
                        <div class="pw_header">
                            <h6>Mobile App</h6>
                            <small class="text-muted">Oreo  |  Last Update: 21 Dec 2017</small>
                        </div>
                        <div class="pw_meta">
                            <span>1,870 USD</span>
                            <small class="text-muted">Budget / Salary</small>
                            <small class="text-danger">10 Days Remaining</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-lg-4">
                <div class="card weather">
                     <div class="header">
                        <h2><strong>Weather</strong></h2>
                    </div>
                    <div class="body">
                        <div class="city">
                            <span>sky is clear</span>
                            <h3>New York</h3>
                            <img src="{{asset('back-end/images/weather/summer.svg')}}" alt="">
                        </div>
                        <ul class="row days list-unstyled m-b-0">
                            <li>
                                <h5>SUN</h5>
                                <img src="{{asset('back-end/images/weather/sky.svg')}}" alt="">
                                <span class="degrees">77</span>
                            </li>
                            <li>
                                <h5>MON</h5>
                                <img src="{{asset('back-end/images/weather/rain.svg')}}" alt="">
                                <span class="degrees">81</span>
                            </li>
                            <li>
                                <h5>TUE</h5>
                                <img src="{{asset('back-end/images/weather/summer.svg')}}" alt="">
                                <span class="degrees">82</span>
                            </li>
                            <li>
                                <h5>WED</h5>
                                <img src="{{asset('back-end/images/weather/summer.svg')}}" alt="">
                                <span class="degrees">82</span>
                            </li>
                            <li>
                                <h5>THU</h5>
                                <img src="{{asset('back-end/images/weather/cloudy.svg')}}" alt="">
                                <span class="degrees">81</span>
                            </li>
                            <li>
                                <h5>FRI</h5>
                                <img src="{{asset('back-end/images/weather/summer.svg')}}" alt="">
                                <span class="degrees">67</span>
                            </li>
                            <li>
                                <h5>SAT</h5>
                                <img src="{{asset('back-end/images/weather/cloudy.svg')}}" alt="">
                                <span class="degrees">81</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card top-report">
                    <div class="body">
                        <h3 class="m-t-0 m-b-0">50.5 Gb</h3>
                        <p class="text-muted">Traffic this month</p>
                        <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope" value="68" type="success">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <small>4% higher than last month</small>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2><strong>New</strong> Friends <small>Add new friend in last month</small></h2>
                    </div>
                    <div class="body">
                        <ul class="new_friend_list list-unstyled row">
                            <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                <a href="">
                                    <img src="{{asset('back-end/images/sm/avatar1.jpg')}}" class="img-thumbnail" alt="User Image">
                                    <h6 class="users_name">Jackson</h6>
                                    <small class="join_date">Today</small>
                                </a>
                            </li>
                            <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                <a href="">
                                    <img src="{{asset('back-end/images/sm/avatar2.jpg')}}" class="img-thumbnail" alt="User Image">
                                    <h6 class="users_name">Aubrey</h6>
                                    <small class="join_date">Yesterday</small>
                                </a>
                            </li>
                            <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                <a href="">
                                    <img src="{{asset('back-end/images/sm/avatar3.jpg')}}" class="img-thumbnail" alt="User Image">
                                    <h6 class="users_name">Oliver</h6>
                                    <small class="join_date">08 Nov</small>
                                </a>
                            </li>
                            <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                <a href="">
                                    <img src="{{asset('back-end/images/sm/avatar4.jpg')}}" class="img-thumbnail" alt="User Image">
                                    <h6 class="users_name">Isabella</h6>
                                    <small class="join_date">12 Dec</small>
                                </a>
                            </li>
                            <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                <a href="">
                                    <img src="{{asset('back-end/images/sm/avatar1.jpg')}}" class="img-thumbnail" alt="User Image">
                                    <h6 class="users_name">Jacob</h6>
                                    <small class="join_date">12 Dec</small>
                                </a>
                            </li>
                            <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                <a href="">
                                    <img src="{{asset('back-end/images/sm/avatar5.jpg')}}" class="img-thumbnail" alt="User Image">
                                    <h6 class="users_name">Matthew</h6>
                                    <small class="join_date">17 Dec</small>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card activities">
                    <div class="header">
                        <h2><strong>Activities</strong></h2>
                    </div>
                    <div class="body">
                        <ul class="list-unstyled activity">
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="zmdi zmdi-cake bg-blue"></i>
                                    <div class="info">
                                        <h4>Admin Birthday</h4>
                                        <small>Will be Dec 21th</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="zmdi zmdi-file-text bg-red"></i>
                                    <div class="info">
                                        <h4>Code Change</h4>
                                        <small>Will be Dec 22th</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="zmdi zmdi-account-box-phone bg-green"></i>
                                    <div class="info">
                                        <h4>Add New Contact</h4>
                                        <small>Will be Dec 23th</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="zmdi zmdi-email bg-amber"></i>
                                    <div class="info">
                                        <h4>New Email</h4>
                                        <small>Will be July 28th</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="zmdi zmdi-account-box-phone bg-green"></i>
                                    <div class="info">
                                        <h4>Add New Contact</h4>
                                        <small>Will be Dec 23th</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="zmdi zmdi-account-box-phone bg-green"></i>
                                    <div class="info">
                                        <h4>Add New Contact</h4>
                                        <small>Will be Dec 23th</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card social_widget2">
                    <div class="body data text-center">
                        <ul class="list-unstyled m-b-0">
                            <li class="m-b-30">
                                <i class="zmdi zmdi-thumb-up col-blue"></i>
                                <h4 class="m-t-0 m-b-0">2,365</h4>
                                <span>Post View</span>
                            </li>
                            <li class="m-b-0">
                                <i class="zmdi zmdi-comment-text col-red"></i>
                                <h4 class="m-t-0 m-b-0">365</h4>
                                <span>Comments</span>
                            </li>
                        </ul>
                    </div>
                    <div class="name facebook">
                        <ul class="list-unstyled m-b-30">
                            <li class="m-b-25">
                                <div class="progress-container">
                                    <span class="progress-badge">AMERICA</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                            <span class="progress-value">50%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-25">
                                <div class="progress-container">
                                    <span class="progress-badge">CANADA</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;">
                                            <span class="progress-value">15%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-25">
                                <div class="progress-container">
                                    <span class="progress-badge">ASIA</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
                                            <span class="progress-value">35%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <h5><i class="zmdi zmdi-facebook-box m-r-10"></i> <span>Facebook</span></h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card social_widget2">
                    <div class="body data text-center">
                        <ul class="list-unstyled m-b-0">
                            <li class="m-b-30">
                                <i class="zmdi zmdi-eye col-amber"></i>
                                <h4 class="m-t-0 m-b-0">365</h4>
                                <span>Post View</span>
                            </li>
                            <li class="m-b-0">
                                <i class="zmdi zmdi-comment-text col-red"></i>
                                <h4 class="m-t-0 m-b-0">125</h4>
                                <span>Comments</span>
                            </li>
                        </ul>
                    </div>
                    <div class="name dribbble">
                        <ul class="list-unstyled m-b-30">
                            <li class="m-b-25">
                                <div class="progress-container">
                                    <span class="progress-badge">AMERICA</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                            <span class="progress-value">50%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-25">
                                <div class="progress-container">
                                    <span class="progress-badge">CANADA</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;">
                                            <span class="progress-value">15%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-25">
                                <div class="progress-container">
                                    <span class="progress-badge">ASIA</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
                                            <span class="progress-value">35%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <h5><i class="zmdi zmdi-dribbble m-r-10"></i> <span>Dribbble</span></h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card social_widget2">
                    <div class="body data text-center">
                        <ul class="list-unstyled m-b-0">
                            <li class="m-b-30">
                                <i class="zmdi zmdi-thumb-up col-blue"></i>
                                <h4 class="m-t-0 m-b-0">3,159</h4>
                                <span>Like</span>
                            </li>
                            <li class="m-b-0">
                                <i class="zmdi zmdi-comment-text col-red"></i>
                                <h4 class="m-t-0 m-b-0">462</h4>
                                <span>Twitt</span>
                            </li>
                        </ul>
                    </div>
                    <div class="name twitter">
                        <ul class="list-unstyled m-b-30">
                            <li class="m-b-25">
                                <div class="progress-container">
                                    <span class="progress-badge">AMERICA</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                            <span class="progress-value">50%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-25">
                                <div class="progress-container">
                                    <span class="progress-badge">CANADA</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;">
                                            <span class="progress-value">15%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-25">
                                <div class="progress-container">
                                    <span class="progress-badge">ASIA</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
                                            <span class="progress-value">35%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <h5><i class="zmdi zmdi-twitter-box m-r-10"></i> <span>Twitter</span></h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card social_widget2">
                    <div class="body data text-center">
                        <ul class="list-unstyled m-b-0">
                            <li class="m-b-30">
                                <i class="zmdi zmdi-eye col-amber"></i>
                                <h4 class="m-t-0 m-b-0">5,192,776</h4>
                                <span>Views</span>
                            </li>
                            <li class="m-b-0">
                                <i class="zmdi zmdi-youtube-play col-red"></i>
                                <h4 class="m-t-0 m-b-0">10K</h4>
                                <span>Subscribe</span>
                            </li>
                        </ul>
                    </div>
                    <div class="name youtube">
                        <ul class="list-unstyled m-b-30">
                            <li class="m-b-25">
                                <div class="progress-container">
                                    <span class="progress-badge">AMERICA</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                            <span class="progress-value">50%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-25">
                                <div class="progress-container">
                                    <span class="progress-badge">CANADA</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;">
                                            <span class="progress-value">15%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-25">
                                <div class="progress-container">
                                    <span class="progress-badge">ASIA</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
                                            <span class="progress-value">35%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <h5><i class="zmdi zmdi-youtube m-r-10"></i> <span>YouTube</span></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card current_progress">
                    <div class="header">
                        <h2><strong>Chat</strong> Box<small>Dr. Team</small></h2>
                    </div>
                    <div class="body">
                        <div class="chat-widget">
                            <ul class="chat-scroll-list clearfix">
                                <li class="left float-left">
                                    <img src="{{asset('back-end/images/xs/avatar3.jpg')}}" class="rounded-circle" alt="">
                                    <div class="chat-info">
                                        <a class="name" href="javascript:void(0);">Alexander</a>
                                        <span class="datetime">6:12</span>
                                        <span class="message">Hello, John </span>
                                    </div>
                                </li>
                                <li class="right">
                                    <div class="chat-info"><span class="datetime">6:15</span> <span class="message">Hi, Alexander<br> How are you!</span> </div>
                                </li>
                                <li class="right">
                                    <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There are many variations of passages of Lorem Ipsum available</span> </div>
                                </li>
                                <li class="left float-left"> <img src="{{asset('back-end/images/xs/avatar2.jpg')}}" class="rounded-circle" alt="">
                                    <div class="chat-info"> <a class="name" href="javascript:void(0);">Elizabeth</a> <span class="datetime">6:25</span> <span class="message">Hi, Alexander,<br> John <br> What are you doing?</span> </div>
                                </li>
                                <li class="left float-left"> <img src="{{asset('back-end/images/xs/avatar1.jpg')}}" class="rounded-circle" alt="">
                                    <div class="chat-info"> <a class="name" href="javascript:void(0);">Michael</a> <span class="datetime">6:28</span> <span class="message">I would love to join the team.</span> </div>
                                </li>
                                    <li class="right">
                                    <div class="chat-info"><span class="datetime">7:02</span> <span class="message">Hello, <br>Michael</span> </div>
                                </li>
                            </ul>
                        </div>
                        <div class="input-group p-t-15">
                            <input type="text" class="form-control" placeholder="Enter text here...">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-mail-send"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="card">
                    <div class="header">
                        <h2><strong>Social</strong> Media</h2>
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
                        <div class="table-responsive social_media_table">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Media</th>
                                        <th>Name</th>
                                        <th>Like</th>
                                        <th>Comments</th>
                                        <th>Share</th>
                                        <th>Members</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="social_icon linkedin"><i class="zmdi zmdi-linkedin"></i></span>
                                        </td>
                                        <td><span class="list-name">Linked In</span>
                                            <span class="text-muted">Florida, United States</span>
                                        </td>
                                        <td>19K</td>
                                        <td>14K</td>
                                        <td>10K</td>
                                        <td>
                                            <span class="badge badge-success">2341</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="social_icon twitter-table"><i class="zmdi zmdi-twitter"></i></span>
                                        </td>
                                        <td><span class="list-name">Twitter</span>
                                            <span class="text-muted">Arkansas, United States</span>
                                        </td>
                                        <td>7K</td>
                                        <td>11K</td>
                                        <td>21K</td>
                                        <td>
                                            <span class="badge badge-success">952</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="social_icon facebook"><i class="zmdi zmdi-facebook"></i></span>
                                        </td>
                                        <td><span class="list-name">Facebook</span>
                                            <span class="text-muted">Illunois, United States</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>8K</td>
                                        <td>
                                            <span class="badge badge-success">6127</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="social_icon google"><i class="zmdi zmdi-google-plus"></i></span>
                                        </td>
                                        <td><span class="list-name">Google Plus</span>
                                            <span class="text-muted">Arizona, United States</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>154</td>
                                        <td>
                                            <span class="badge badge-success">325</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="social_icon youtube"><i class="zmdi zmdi-youtube-play"></i></span>
                                        </td>
                                        <td><span class="list-name">YouTube</span>
                                            <span class="text-muted">Alaska, United States</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>200</td>
                                        <td>
                                            <span class="badge badge-success">160</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card-group text-center">
                    <div class="card">
                        <img class="img-fluid" src="{{asset('back-end/images/image2.jpg')}}" alt="Card image cap">
                        <div class="body">
                            <h4 class="title">Card title</h4>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos iure, esse beatae sapiente dolor aliquid ea
                            ipsam, ducimus facere. Ut culpa at asperiores voluptatibus ipsa vero natus, voluptates, quasi cum!</p>
                            <p class="text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="img-fluid" src="{{asset('back-end/images/image3.jpg')}}" alt="Card image cap">
                        <div class="body">
                            <h4 class="title">Card title</h4>
                            <p class="text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <p class="text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="img-fluid" src="{{asset('back-end/images/image1.jpg')}}" alt="Card image cap">
                        <div class="body">
                            <h4 class="title">Card title</h4>
                            <p class="text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has
                            even longer content than the first to show that equal height action.</p>
                            <a href="javascript:void(0);" class="btn btn-primary btn-round waves-effect">Button</a>
                            <p class="text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <ul class="row profile_state list-unstyled">
                        <li class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-eye col-amber"></i>
                                <h4>2,365</h4>
                                <span>Post View</span>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-thumb-up col-blue"></i>
                                <h4>365</h4>
                                <span>Likes</span>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-comment-text col-red"></i>
                                <h4>65</h4>
                                <span>Comments</span>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-account text-success"></i>
                                <h4>2,055</h4>
                                <span>Profile Views</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-7">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="carousel slide twitter-feed" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item text-center active">
                                        <div class="col-12">
                                            <i class="zmdi zmdi-twitter"></i>
                                        </div>
                                        <div class="col-12">
                                            <p><i class="zmdi zmdi-quote"></i>Lorem Ipsum is simply typesetting industry. Lorem Ipsum has been the industry's standard</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item text-center">
                                        <div class="col-12">
                                            <i class="zmdi zmdi-twitter"></i>
                                        </div>
                                        <div class="col-12">
                                            <p><i class="zmdi zmdi-quote"></i>It is a long established fact that a reader will ontent of a page when looking at its layout.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="carousel slide facebook-feed" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item text-center active">
                                        <div class="col-12">
                                            <i class="zmdi zmdi-facebook"></i>
                                        </div>
                                        <div class="col-12">
                                            <p><i class="zmdi zmdi-quote"></i>Lorem Ipsum is simply typesetting industry. Lorem Ipsum has been the industry's standard</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item text-center">
                                        <div class="col-12"><i class="zmdi zmdi-facebook"></i></div>
                                        <div class="col-12">
                                            <p><i class="zmdi zmdi-quote"></i>It is a long established fact that a reader will ontent of a page when looking at its layout.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix social-widget">
                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="card info-box-2 hover-zoom-effect facebook-widget">
                            <div class="icon"><i class="zmdi zmdi-facebook"></i></div>
                            <div class="content">
                                <div class="text">Like</div>
                                <div class="number">123</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="card info-box-2 hover-zoom-effect instagram-widget">
                            <div class="icon"><i class="zmdi zmdi-instagram"></i></div>
                            <div class="content">
                                <div class="text">Followers</div>
                                <div class="number">231</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="card info-box-2 hover-zoom-effect twitter-widget">
                            <div class="icon"><i class="zmdi zmdi-twitter"></i></div>
                            <div class="content">
                                <div class="text">Followers</div>
                                <div class="number">31</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="card info-box-2 hover-zoom-effect google-widget">
                            <div class="icon"><i class="zmdi zmdi-google"></i></div>
                            <div class="content">
                                <div class="text">Like</div>
                                <div class="number">254</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="card info-box-2 hover-zoom-effect linkedin-widget">
                            <div class="icon"><i class="zmdi zmdi-linkedin"></i></div>
                            <div class="content">
                                <div class="text">Followers</div>
                                <div class="number">2510</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="card info-box-2 hover-zoom-effect behance-widget">
                            <div class="icon"><i class="zmdi zmdi-behance"></i></div>
                            <div class="content">
                                <div class="text">Project</div>
                                <div class="number">121</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-5">
                <div class="card">
                    <div class="header">
                        <h2><strong>Inbox</strong></h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="inbox-widget list-unstyled clearfix">
                            <li class="inbox-inner"> <a href="javascript:void(0)">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="{{asset('back-end/images/xs/avatar1.jpg')}}" class="rounded" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">Aaron	Enlightened</p>
                                        <p class="inbox-message">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">13:34 PM</p>
                                        <div class="hover_action">
                                            <button class="btn btn-neutral"><i class="zmdi zmdi-edit"></i></button>
                                            <button class="btn btn-neutral"><i class="zmdi zmdi-delete"></i></button>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="inbox-inner"> <a href="javascript:void(0)">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="{{asset('back-end/images/xs/avatar2.jpg')}}" class="rounded" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">Alvin Doe</p>
                                        <p class="inbox-message">Lorem Ipsum is simply dummy text oftting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">18:34 PM</p>
                                        <div class="hover_action">
                                            <button class="btn btn-neutral"><i class="zmdi zmdi-edit"></i></button>
                                            <button class="btn btn-neutral"><i class="zmdi zmdi-delete"></i></button>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="inbox-inner"> <a href="javascript:void(0)">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="{{asset('back-end/images/xs/avatar3.jpg')}}" class="rounded" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">Austin</p>
                                        <p class="inbox-message">text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">1Day ago</p>
                                        <div class="hover_action">
                                            <button class="btn btn-neutral"><i class="zmdi zmdi-edit"></i></button>
                                            <button class="btn btn-neutral"><i class="zmdi zmdi-delete"></i></button>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="inbox-inner"> <a href="javascript:void(0)">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="{{asset('back-end/images/xs/avatar4.jpg')}}" class="rounded" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">John Benjamin</p>
                                        <p class="inbox-message">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">1Day ago</p>
                                        <div class="hover_action">
                                            <button class="btn btn-neutral"><i class="zmdi zmdi-edit"></i></button>
                                            <button class="btn btn-neutral"><i class="zmdi zmdi-delete"></i></button>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="inbox-inner"> <a href="javascript:void(0)">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="{{asset('back-end/images/xs/avatar5.jpg')}}" class="rounded" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">Broderick</p>
                                        <p class="inbox-message">text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">Week ago</p>
                                        <div class="hover_action">
                                            <button class="btn btn-neutral"><i class="zmdi zmdi-edit"></i></button>
                                            <button class="btn btn-neutral"><i class="zmdi zmdi-delete"></i></button>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card w_calender">
                    <div class="date l-slategray">
                        <span>Sunday, December 28</span>
                        <span>2017</span>
                    </div>
                    <div class="body days">
                        <ul class="m-t-10">
                            <li>MON</li>
                            <li>TUE</li>
                            <li>WED</li>
                            <li>THU</li>
                            <li>FRI</li>
                            <li>SAT</li>
                            <li>SUN</li>
                        </ul>
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                        </ul>
                        <ul>
                            <li>8</li>
                            <li>9</li>
                            <li>10</li>
                            <li>11</li>
                            <li>12</li>
                            <li>13</li>
                            <li>14</li>
                        </ul>
                        <ul>
                            <li>15</li>
                            <li>16</li>
                            <li>17</li>
                            <li>18</li>
                            <li>19</li>
                            <li>20</li>
                            <li>21</li>
                        </ul>
                        <ul>
                            <li>22</li>
                            <li>23</li>
                            <li>24</li>
                            <li>25</li>
                            <li>26</li>
                            <li>27</li>
                            <li><em>28</em></li>
                        </ul>
                        <ul>
                            <li>29</li>
                            <li>30</li>
                            <li>31</li>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card member-card">
                    <div class="header l-pink">
                        <h4 class="m-t-10">Eliana Smith</h4>
                    </div>
                    <div class="member-img">
                        <a href="{{route('back.profile')}}" class="">
                        <img src="{{asset('back-end/images/lg/avatar2.jpg')}}" class="rounded-circle" alt="profile-image">
                        </a>
                    </div>
                    <div class="body">
                        <div class="col-12">
                            <ul class="social-links list-unstyled">
                                <li>
                                <a title="facebook" href="javascript:void(0);">
                                    <i class="zmdi zmdi-facebook"></i>
                                </a>
                                </li>
                                <li>
                                <a title="twitter" href="javascript:void(0);">
                                    <i class="zmdi zmdi-twitter"></i>
                                </a>
                                </li>
                                <li>
                                <a title="instagram" href="javascript:void(0);">
                                    <i class="zmdi zmdi-instagram"></i>
                                </a>
                                </li>
                            </ul>
                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <h5>18</h5>
                                <small>Files</small>
                            </div>
                            <div class="col-4">
                                <h5>2GB</h5>
                                <small>Used</small>
                            </div>
                            <div class="col-4">
                                <h5>65,6$</h5>
                                <small>Spent</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card member-card">
                    <div class="header l-cyan">
                        <h4 class="m-t-10">Michael Dorsey</h4>
                    </div>
                    <div class="member-img">
                        <a href="{{route('back.profile')}}" class="">
                        <img src="{{asset('back-end/images/lg/avatar1.jpg')}}" class="rounded-circle" alt="profile-image">
                        </a>
                    </div>
                    <div class="body">
                        <div class="col-12">
                            <ul class="social-links list-unstyled">
                                <li>
                                <a title="facebook" href="javascript:void(0);">
                                    <i class="zmdi zmdi-facebook"></i>
                                </a>
                                </li>
                                <li>
                                <a title="twitter" href="javascript:void(0);">
                                    <i class="zmdi zmdi-twitter"></i>
                                </a>
                                </li>
                                <li>
                                <a title="instagram" href="javascript:void(0);">
                                    <i class="zmdi zmdi-instagram"></i>
                                </a>
                                </li>
                            </ul>
                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <h5>57</h5>
                                <small>Files</small>
                            </div>
                            <div class="col-4">
                                <h5>12GB</h5>
                                <small>Used</small>
                            </div>
                            <div class="col-4">
                                <h5>1,256$</h5>
                                <small>Spent</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="body">
                    <div id="demo2" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                        <li data-target="#demo2" data-slide-to="0" class="active"></li>
                        <li data-target="#demo2" data-slide-to="1" class=""></li>
                        <li data-target="#demo2" data-slide-to="2" class=""></li>
                        </ul>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('back-end/images/image-gallery/5.jpg')}}" class="img-fluid" alt="">
                            <div class="carousel-caption">
                            <h3>Chicago</h3>
                            <p>Thank you, Chicago!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('back-end/images/image-gallery/6.jpg')}}" class="img-fluid" alt="">
                            <div class="carousel-caption">
                            <h3>New York</h3>
                            <p>We love the Big Apple!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('back-end/images/image-gallery/12.jpg')}}" class="img-fluid" alt="">
                            <div class="carousel-caption">
                            <h3>Los Angeles</h3>
                            <p>We had such a great time in LA!</p>
                            </div>
                        </div>
                        </div>

                        <!-- Controls -->
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo2" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo2" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="header">
                        <h2><strong>Reports</strong></h2>
                        <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu float-right">
                            <li>
                                <a href="javascript:void(0);">Action</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Another action</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Something else here</a>
                            </li>
                            </ul>
                        </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover m-b-0">
                            <thead>
                                <tr>
                                <th>First Name</th>
                                <th>Charts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Dean Otto</td>
                                <td>
                                    <span class="sparkbar">5,8,6,3,5,9,2</span>
                                </td>
                                </tr>
                                <tr>
                                <td>K. Thornton</td>
                                <td>
                                    <span class="sparkbar">10,8,9,3,5,8,5</span>
                                </td>
                                </tr>
                                <tr>
                                <td>Kane D.</td>
                                <td>
                                    <span class="sparkbar">7,5,9,3,5,2,5</span>
                                </td>
                                </tr>
                                <tr>
                                <td>Jack Bird</td>
                                <td>
                                    <span class="sparkbar">10,8,1,3,3,8,7</span>
                                </td>
                                </tr>
                                <tr>
                                <td>Hughe L.</td>
                                <td>
                                    <span class="sparkbar">2,8,9,8,5,1,5</span>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="header">
                        <h2><strong>Visits</strong> from countries</h2>
                    </div>
                    <div class="body">
                        <ul class="country-state list-unstyled">
                            <li class="m-b-20">
                                <h6>6350</h6>
                                <small>From India</small>
                                <div class="float-right">58%
                                <i class="fa fa-level-up text-success"></i>
                                </div>
                                <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:58%;">
                                    <span class="sr-only">58% Complete</span>
                                </div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <h6>3250</h6>
                                <small>From UAE</small>
                                <div class="float-right">90%
                                <i class="fa fa-level-up text-success"></i>
                                </div>
                                <div class="progress">
                                <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:90%;">
                                    <span class="sr-only">90% Complete</span>
                                </div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <h6>1250</h6>
                                <small>From Australia</small>
                                <div class="float-right">70%
                                <i class="fa fa-level-down text-danger"></i>
                                </div>
                                <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%;">
                                    <span class="sr-only">70% Complete</span>
                                </div>
                                </div>
                            </li>
                            <li class="m-b-10">
                                <h6>1350</h6>
                                <small>From USA</small>
                                <div class="float-right">70%
                                <i class="fa fa-level-up text-success"></i>
                                </div>
                                <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%;">
                                    <span class="sr-only">70% Complete</span>
                                </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('scripts')
  <script src="{{asset('back-end/js/pages/charts/sparkline.js')}}"></script>
@stop
