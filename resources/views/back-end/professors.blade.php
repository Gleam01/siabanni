@extends('back-end.main-layout')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>All Professors
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-right">
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{route('back.home')}}"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Professors</a></li>
                    <li class="breadcrumb-item active">All</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <ul class="nav nav-tabs padding-0">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Permanent">Permanent</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Consultant">Consultant</a></li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content m-t-10">
                    <div class="tab-pane active" id="Permanent">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card member-card">
                                    <div class="body">
                                        <div class="member-thumb">
                                            <img src="{{asset('back-end/images/lg/avatar1.jpg')}}" class="img-fluid rounded" alt="profile-image">
                                        </div>
                                        <div class="detail">
                                            <h4 class="m-b-0">Pro. John</h4>
                                            <p class="text-muted">Mathematics</p>
                                            <ul class="social-links list-inline m-t-20">
                                                <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                                <li><a title="twitter" href="javascript:void(0);" ><i class="zmdi zmdi-twitter"></i></a></li>
                                                <li><a title="instagram" href="javascript:void(0);" ><i class="zmdi zmdi-instagram"></i></a></li>
                                            </ul>
                                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                            <a href="{{route('back.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card member-card">
                                    <div class="body">
                                        <div class="member-thumb">
                                            <img src="{{asset('back-end/images/lg/avatar2.jpg')}}" class="img-fluid rounded" alt="profile-image">
                                        </div>
                                        <div class="detail">
                                            <h4 class="m-b-0">Pro. Amelia</h4>
                                            <p class="text-muted">Architecture</p>
                                            <ul class="social-links list-inline m-t-20">
                                                <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                                <li><a title="twitter" href="javascript:void(0);" ><i class="zmdi zmdi-twitter"></i></a></li>
                                                <li><a title="instagram" href="javascript:void(0);" ><i class="zmdi zmdi-instagram"></i></a></li>
                                            </ul>
                                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                            <a href="{{route('back.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card member-card">
                                    <div class="body">
                                        <div class="member-thumb">
                                            <img src="{{asset('back-end/images/lg/avatar3.jpg')}}" class="img-fluid rounded" alt="profile-image">
                                        </div>
                                        <div class="detail">
                                            <h4 class="m-b-0">Pro. Jack </h4>
                                            <p class="text-muted">Civil Engineering</p>
                                            <ul class="social-links list-inline m-t-20">
                                                <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                                <li><a title="twitter" href="javascript:void(0);" ><i class="zmdi zmdi-twitter"></i></a></li>
                                                <li><a title="instagram" href="javascript:void(0);" ><i class="zmdi zmdi-instagram"></i></a></li>
                                            </ul>
                                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                            <a href="{{route('back.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card member-card">
                                    <div class="body">
                                        <div class="member-thumb">
                                            <img src="{{asset('back-end/images/lg/avatar4.jpg')}}" class="img-fluid rounded" alt="profile-image">
                                        </div>
                                        <div class="detail">
                                            <h4 class="m-b-0">Pro. Jessica </h4>
                                            <p class="text-muted">Chemistry</p>
                                            <ul class="social-links list-inline m-t-20">
                                                <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                                <li><a title="twitter" href="javascript:void(0);" ><i class="zmdi zmdi-twitter"></i></a></li>
                                                <li><a title="instagram" href="javascript:void(0);" ><i class="zmdi zmdi-instagram"></i></a></li>
                                            </ul>
                                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                            <a href="{{route('back.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card member-card">
                                    <div class="body">
                                        <div class="member-thumb">
                                            <img src="{{asset('back-end/images/lg/avatar5.jpg')}}" class="img-fluid rounded" alt="profile-image">
                                        </div>
                                        <div class="detail">
                                            <h4 class="m-b-0">Pro. Joseph </h4>
                                            <p class="text-muted">Biology</p>
                                            <ul class="social-links list-inline m-t-20">
                                                <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                                <li><a title="twitter" href="javascript:void(0);" ><i class="zmdi zmdi-twitter"></i></a></li>
                                                <li><a title="instagram" href="javascript:void(0);" ><i class="zmdi zmdi-instagram"></i></a></li>
                                            </ul>
                                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                            <a href="{{route('back.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card member-card">
                                    <div class="body">
                                        <div class="member-thumb">
                                            <img src="{{asset('back-end/images/lg/avatar6.jpg')}}" class="img-fluid rounded" alt="profile-image">
                                        </div>
                                        <div class="detail">
                                            <h4 class="m-b-0">Pro. Charlie </h4>
                                            <p class="text-muted">Manegment</p>
                                            <ul class="social-links list-inline m-t-20">
                                                <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                                <li><a title="twitter" href="javascript:void(0);" ><i class="zmdi zmdi-twitter"></i></a></li>
                                                <li><a title="instagram" href="javascript:void(0);" ><i class="zmdi zmdi-instagram"></i></a></li>
                                            </ul>
                                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                            <a href="{{route('back.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card member-card">
                                    <div class="body">
                                        <div class="member-thumb">
                                            <img src="{{asset('back-end/images/lg/avatar1.jpg')}}" class="img-fluid rounded" alt="profile-image">
                                        </div>
                                        <div class="detail">
                                            <h4 class="m-b-0">Pro. William </h4>
                                            <p class="text-muted">Computer Engineering</p>
                                            <ul class="social-links list-inline m-t-20">
                                                <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                                <li><a title="twitter" href="javascript:void(0);" ><i class="zmdi zmdi-twitter"></i></a></li>
                                                <li><a title="instagram" href="javascript:void(0);" ><i class="zmdi zmdi-instagram"></i></a></li>
                                            </ul>
                                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                            <a href="{{route('back.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card member-card">
                                    <div class="body">
                                        <div class="member-thumb">
                                            <img src="{{asset('back-end/images/lg/avatar4.jpg')}}" class="img-fluid rounded" alt="profile-image">
                                        </div>
                                        <div class="detail">
                                            <h4 class="m-b-0">Pro. Sophie </h4>
                                            <p class="text-muted">Mathematics</p>
                                            <ul class="social-links list-inline m-t-20">
                                                <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                                <li><a title="twitter" href="javascript:void(0);" ><i class="zmdi zmdi-twitter"></i></a></li>
                                                <li><a title="instagram" href="javascript:void(0);" ><i class="zmdi zmdi-instagram"></i></a></li>
                                            </ul>
                                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                            <a href="{{route('back.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Consultant">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card member-card">
                                    <div class="body">
                                        <div class="member-thumb">
                                            <img src="{{asset('back-end/images/lg/avatar2.jpg')}}" class="img-fluid rounded" alt="profile-image">
                                        </div>
                                        <div class="detail">
                                            <h4 class="m-b-0">Pro. Amelia</h4>
                                            <p class="text-muted">Mathematics</p>
                                            <ul class="social-links list-inline m-t-20">
                                                <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                                <li><a title="twitter" href="javascript:void(0);" ><i class="zmdi zmdi-twitter"></i></a></li>
                                                <li><a title="instagram" href="javascript:void(0);" ><i class="zmdi zmdi-instagram"></i></a></li>
                                            </ul>
                                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                            <a href="{{route('back.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card member-card">
                                    <div class="body">
                                        <div class="member-thumb">
                                            <img src="{{asset('back-end/images/lg/avatar4.jpg')}}" class="img-fluid rounded" alt="profile-image">
                                        </div>
                                        <div class="detail">
                                            <h4 class="m-b-0">Pro. Jack </h4>
                                            <p class="text-muted">Architecture</p>
                                            <ul class="social-links list-inline m-t-20">
                                                <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                                <li><a title="twitter" href="javascript:void(0);" ><i class="zmdi zmdi-twitter"></i></a></li>
                                                <li><a title="instagram" href="javascript:void(0);" ><i class="zmdi zmdi-instagram"></i></a></li>
                                            </ul>
                                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                            <a href="{{route('back.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card member-card">
                                    <div class="body">
                                        <div class="member-thumb">
                                            <img src="{{asset('back-end/images/lg/avatar1.jpg')}}" class="img-fluid rounded" alt="profile-image">
                                        </div>
                                        <div class="detail">
                                            <h4 class="m-b-0">Pro. Joseph </h4>
                                            <p class="text-muted">Chemistry</p>
                                            <ul class="social-links list-inline m-t-20">
                                                <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                                <li><a title="twitter" href="javascript:void(0);" ><i class="zmdi zmdi-twitter"></i></a></li>
                                                <li><a title="instagram" href="javascript:void(0);" ><i class="zmdi zmdi-instagram"></i></a></li>
                                            </ul>
                                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                            <a href="{{route('back.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card member-card">
                                    <div class="body">
                                        <div class="member-thumb">
                                            <img src="{{asset('back-end/images/lg/avatar6.jpg')}}" class="img-fluid rounded" alt="profile-image">
                                        </div>
                                        <div class="detail">
                                            <h4 class="m-b-0">Pro. Charlie </h4>
                                            <p class="text-muted">Chemistry</p>
                                            <ul class="social-links list-inline m-t-20">
                                                <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                                <li><a title="twitter" href="javascript:void(0);" ><i class="zmdi zmdi-twitter"></i></a></li>
                                                <li><a title="instagram" href="javascript:void(0);" ><i class="zmdi zmdi-instagram"></i></a></li>
                                            </ul>
                                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                            <a href="{{route('back.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
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
