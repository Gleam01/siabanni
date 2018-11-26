@extends('back-end.main-layout')

@section('styles')
  <link rel="stylesheet" href="{{asset('back-end/plugins/morrisjs/morris.css')}}" />
@stop

@section('content')
<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Student Profile
                <small class="text-muted">Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{route('back.home')}}"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Student</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card member-card bg-dark">
                    <div class="header">
                        <h4 class="m-t-10 col-white">Eliana Smith</h4>
                    </div>
                    <div class="member-img">
                        <a href="javascript:void(0);">
                        <img src="{{asset('back-end/images/sm/avatar4.jpg')}}" class="rounded-circle" alt="profile-image">
                        </a>
                    </div>
                    <div class="body">
                        <div class="col-12">
                            <ul class="social-links list-unstyled">
                                <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                        </div>
                        <hr>
                        <strong class="text-muted">Class</strong>
                        <p class="col-white">BCA Sem1</p>
                        <strong class="text-muted">Email ID</strong>
                        <p class="col-white">will.smith@info.com</p>
                        <strong class="text-muted">Phone</strong>
                        <p class="col-white">+123 456 789</p>
                        <hr>
                        <strong class="text-muted">Address</strong>
                        <address class="col-white">85 Bay Drive, New Port Richey, FL 34653</address>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>General</strong> Report</h2>
                    </div>
                    <div class="body">
                        <ul class="list-unstyled">
                            <li>
                                <div>Computer</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Sport</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>English</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Design</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Progress</strong> Report</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                    <li><a href="javascript:void(0);">Report</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="m_area_chart"></div>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</p>
                    </div>
                </div>
                <div class="card" id="timeline">
                    <div class="body">
                        <div class="timeline-body">
                            <div class="timeline m-border">
                                <div class="timeline-item">
                                    <div class="item-content">
                                        <div class="text-small">Just now</div>
                                        <p>Discharge.</p>
                                    </div>
                                </div>
                                <div class="timeline-item border-info">
                                    <div class="item-content">
                                        <div class="text-small">11:30</div>
                                        <p>Routine Checkup</p>
                                    </div>
                                </div>
                                <div class="timeline-item border-warning border-l">
                                    <div class="item-content">
                                        <div class="text-small">10:30</div>
                                        <p>Operation </p>
                                    </div>
                                </div>
                                <div class="timeline-item border-warning">
                                    <div class="item-content">
                                        <div class="text-small">3 days ago</div>
                                        <p>Routine Checkup</p>
                                    </div>
                                </div>
                                <div class="timeline-item border-danger">
                                    <div class="item-content">
                                        <div class="text--muted">Thu, 10 Mar</div>
                                        <p>Routine Checkup</p>
                                    </div>
                                </div>
                                <div class="timeline-item border-info">
                                    <div class="item-content">
                                        <div class="text-small">Sat, 5 Mar</div>
                                        <p>Routine Checkup</p>
                                    </div>
                                </div>
                                <div class="timeline-item border-danger">
                                    <div class="item-content">
                                        <div class="text-small">Sun, 11 Feb</div>
                                        <p>Blood checkup test</p>
                                    </div>
                                </div>
                                <div class="timeline-item border-info">
                                    <div class="item-content">
                                        <div class="text-small">Thu, 17 Jan</div>
                                        <p>Add Student ward no. 21</p>
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
  <script src="{{asset('back-end/bundles/morrisscripts.bundle.js')}}"></script> <!-- Morris Plugin Js -->
  <script src="{{asset('back-end/js/pages/student-profile.js')}}"></script>
@stop
