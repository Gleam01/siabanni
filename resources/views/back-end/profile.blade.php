@extends('back-end.main-layout')

@section('styles')
  <link rel="stylesheet" href="{{asset('back-end/css/timeline.css')}}">
@stop

@section('content')
<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Profile
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-edit"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{route('back.home')}}"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card profile-header">
                    <div class="body text-center">
                        <div class="profile-image"> <img src="{{asset('back-end/images/profile_av.jpg')}}" alt=""> </div>
                        <div>
                            <h4 class="m-b-0"><strong>Pro. Charlotte</strong> Deo</h4>
                            <span class="job_post">UI UX Designer</span>
                            <p>795 Folsom Ave, Suite 600<br> San Francisco, CADGE 94107</p>
                        </div>
                        <div>
                            <button class="btn btn-primary btn-round">Follow</button>
                            <button class="btn btn-primary btn-round btn-simple">Message</button>
                        </div>
                        <p class="social-icon m-t-5 m-b-0">
                            <a title="Twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                            <a title="Facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a>
                            <a title="Google-plus" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                            <a title="Behance" href="javascript:void(0);"><i class="zmdi zmdi-behance"></i></a>
                            <a title="Instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram "></i></a>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <div class="workingtime">
                            <h6>Working Time</h6>
                            <small class="text-muted">Monday to Friday</small>
                            <p>09:00 AM - 4:00 PM</p>
                            <hr>
                            <small class="text-muted">Saturday</small>
                            <p>09:00 AM - 12:30 PM</p>
                            <hr>
                        </div>
                        <div class="reviews">
                            <h6>Reviews</h6>
                            <small class="text-muted">Staff</small>
                            <p>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                            </p>
                            <hr>
                            <small class="text-muted">Helpfulness</small>
                            <p>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                            </p>
                            <hr>
                            <small class="text-muted">Knowledge</small>
                            <p>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                            </p>
                            <hr>
                            <small class="text-muted">Cost</small>
                            <p>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Account">Account</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane body active" id="about">
                            <ul class="list-unstyled">
                                <li><p><i class="zmdi zmdi-graduation-cap m-r-5"></i><strong>Degree:</strong> PHD in Mathmatics</p></li>
                                <li><p><i class="zmdi zmdi-star m-r-5"></i><strong>Experience:</strong> 20 Years in university Math</p></li>
                                <li><p><i class="zmdi zmdi-favorite m-r-5"></i><strong>Hobbies:</strong> Music, Dancing and Family</p></li>
                                <li><p><i class="zmdi zmdi-label m-r-5"></i><strong>My Courses:</strong> Higher Math, Math Puzzle</p></li>
                                <li><p><i class="zmdi zmdi-label m-r-5"></i><strong>Projects:</strong> Map Creation</p></li>
                            </ul>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in finibus neque. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Vestibulum interdum diam non mi cursus venenatis. Morbi lacinia libero et elementum vulputate. Vivamus et facilisis mauris. Maecenas nec massa auctor, ultricies massa eu, tristique erat. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Eu pellentesque, accumsan tellus leo, ultrices mi dui lectus sem nulla eu.Eu pellentesque, accumsan tellus leo, ultrices mi dui</p>
                            <p>lectus sem nulla eu. Maecenas arcu, nec ridiculus quisque orci, vulputate mattis risus erat. lectus sem nulla eu.Eu pellentesque, accumsan tellus leo, ultrices mi dui lectus sem nulla eu. Maecenas arcu, nec ridiculus quisque orci, vulputate mattis risus erat.</p>
                        </div>
                        <div class="tab-pane body" id="Account">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Current Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="New Password">
                            </div>
                            <button class="btn btn-info btn-round">Save Changes</button>
                            <hr>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Country">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group m-b-10">
                                        <textarea rows="4" class="form-control no-resize" placeholder="Address Line 1"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <input id="procheck2" type="checkbox">
                                        <label for="procheck2">New task notifications</label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="procheck3" type="checkbox">
                                        <label for="procheck3">New friend request notifications</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary btn-round">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Followers">Followers</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#friends">Friends</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane body active" id="Followers">
                                    <ul class="right_chat list-unstyled">
                                        <li class="online">
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="{{asset('back-end/images/xs/avatar4.jpg')}}" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Chris Fox</span>
                                                        <span class="message">Designer, Blogger</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="{{asset('back-end/images/xs/avatar5.jpg')}}" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Joge Lucky</span>
                                                        <span class="message">Java Developer</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="{{asset('back-end/images/xs/avatar2.jpg')}}" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Isabella</span>
                                                        <span class="message">CEO, Thememakker</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="{{asset('back-end/images/xs/avatar1.jpg')}}" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Folisise Chosielie</span>
                                                        <span class="message">Art director, Movie Cut</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="{{asset('back-end/images/xs/avatar3.jpg')}}" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Alexander</span>
                                                        <span class="message">Writter, Mag Editor</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane body" id="friends">
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
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Recent</strong> Activity</h2>
                                <ul class="header-dropdown">
                                    <li class="remove">
                                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body user_activity">
                                <div class="streamline b-accent">
                                    <div class="sl-item">
                                        <img class="user rounded-circle" src="{{asset('back-end/images/xs/avatar4.jpg')}}" alt="">
                                        <div class="sl-content">
                                            <h5 class="m-b-0">Admin Birthday</h5>
                                            <small>Jan 21 <a href="javascript:void(0);" class="text-info">Sophia</a>.</small>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <img class="user rounded-circle" src="{{asset('back-end/images/xs/avatar5.jpg')}}" alt="">
                                        <div class="sl-content">
                                            <h5 class="m-b-0">Add New Contact</h5>
                                            <small>30min ago <a href="javascript:void(0);">Alexander</a>.</small>
                                            <small><strong>P:</strong> +264-625-2323</small>
                                            <small><strong>E:</strong> maryamamiri@gmail.com</small>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <img class="user rounded-circle" src="{{asset('back-end/images/xs/avatar6.jpg')}}" alt="">
                                        <div class="sl-content">
                                            <h5 class="m-b-0">General Surgery</h5>
                                            <small>Today <a href="javascript:void(0);">Grayson</a>.</small>
                                            <small>The standard chunk of Lorem Ipsum used since the 1500s is reproduced</small>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <img class="user rounded-circle" src="{{asset('back-end/images/xs/avatar7.jpg')}}" alt="">
                                        <div class="sl-content">
                                            <h5 class="m-b-0">General Surgery</h5>
                                            <small>45min ago <a href="javascript:void(0);" class="text-info">Fidel Tonn</a>.</small>
                                            <small><strong>P:</strong> +264-625-2323</small>
                                            <small>The standard chunk of Lorem Ipsum used since the 1500s is reproduced</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('scripts')
  <script src="{{asset('back-end/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob Plugin Js -->
  <script src="{{asset('back-end/js/pages/charts/jquery-knob.js')}}"></script>
@stop
