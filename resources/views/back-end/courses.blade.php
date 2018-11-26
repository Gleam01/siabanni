@extends('back-end.main-layout')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>All Courses
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{route('back.home')}}"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Courses</a></li>
                    <li class="breadcrumb-item active">All</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="body">
                        <img src="{{asset('back-end/images/image1.jpg')}}" alt=""  class="img-fluid rounded m-b-20">
                        <h6>Magento Programmer Course</h6>
                        <div class="table-responsive">
                            <table class="table table-hover m-t-20">
                                <tbody>
                                    <tr>
                                        <td>Year</td>
                                        <td>MCA Sem2</td>
                                    </tr>
                                    <tr>
                                        <td>Fees</td>
                                        <td><strong class="col-blush">$315.60</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Prof NAME</td>
                                        <td><strong>Will Smith</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Students</td>
                                        <td><strong class="col-green">115</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="{{route('back.courses-info')}}" class="btn btn-block btn-raised btn-default btn-simple btn-round waves-effect" role="button">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="body">
                        <img src="{{asset('back-end/images/image2.jpg')}}" alt=""  class="img-fluid rounded m-b-20">
                        <h6>Angular Programmer Course</h6>
                        <div class="table-responsive">
                            <table class="table table-hover m-t-20">
                                <tbody>
                                    <tr>
                                        <td>Year</td>
                                        <td>MCA Sem5</td>
                                    </tr>
                                    <tr>
                                        <td>Fees</td>
                                        <td><strong class="col-blush">$458.60</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Prof NAME</td>
                                        <td><strong>Gary Camara</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Students</td>
                                        <td><strong class="col-green">49</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="{{route('back.courses-info')}}" class="btn btn-block btn-raised btn-default btn-simple btn-round waves-effect" role="button">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="body">
                        <img src="{{asset('back-end/images/image3.jpg')}}" alt=""  class="img-fluid rounded m-b-20">
                        <h6>Account Management Course</h6>
                        <div class="table-responsive">
                            <table class="table table-hover m-t-20">
                                <tbody>
                                    <tr>
                                        <td>Year</td>
                                        <td>MBA Sem2</td>
                                    </tr>
                                    <tr>
                                        <td>Fees</td>
                                        <td><strong class="col-blush">$278.60</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Prof NAME</td>
                                        <td><strong>Frank Camly</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Students</td>
                                        <td><strong class="col-green">80</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="{{route('back.courses-info')}}" class="btn btn-block btn-raised btn-default btn-simple btn-round waves-effect" role="button">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="body">
                        <img src="{{asset('back-end/images/image4.jpg')}}" alt=""  class="img-fluid rounded m-b-20">
                        <h6>UI UX Design Course</h6>
                        <div class="table-responsive">
                            <table class="table table-hover m-t-20">
                                <tbody>
                                    <tr>
                                        <td>Year</td>
                                        <td>BCA Sem2</td>
                                    </tr>
                                    <tr>
                                        <td>Fees</td>
                                        <td><strong class="col-blush">$105.60</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Prof NAME</td>
                                        <td><strong>Hossein Shams</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Students</td>
                                        <td><strong class="col-green">60</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="{{route('back.courses-info')}}" class="btn btn-block btn-raised btn-default btn-simple btn-round waves-effect" role="button">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="body">
                        <img src="{{asset('back-end/images/image5.jpg')}}" alt=""  class="img-fluid rounded m-b-20">
                        <h6>Angular Programmer Course</h6>
                        <div class="table-responsive">
                            <table class="table table-hover m-t-20">
                                <tbody>
                                    <tr>
                                        <td>Year</td>
                                        <td>MCA Sem5</td>
                                    </tr>
                                    <tr>
                                        <td>Fees</td>
                                        <td><strong class="col-blush">$458.60</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Prof NAME</td>
                                        <td><strong>Maryam Amiri</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Students</td>
                                        <td><strong class="col-green">71</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="{{route('back.courses-info')}}" class="btn btn-block btn-raised btn-default btn-simple btn-round waves-effect" role="button">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="body">
                        <img src="{{asset('back-end/images/image6.jpg')}}" alt=""  class="img-fluid rounded m-b-20">
                        <h6>Account Management Course</h6>
                        <div class="table-responsive">
                            <table class="table table-hover m-t-20">
                                <tbody>
                                    <tr>
                                        <td>Year</td>
                                        <td>MBA Sem2</td>
                                    </tr>
                                    <tr>
                                        <td>Fees</td>
                                        <td><strong class="col-blush">$278.60</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Prof NAME</td>
                                        <td><strong>Fidel Tonn</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Students</td>
                                        <td><strong class="col-green">80</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="{{route('back.courses-info')}}" class="btn btn-block btn-raised btn-default btn-simple btn-round waves-effect" role="button">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 text-center">
                <a href="javascript:void(0);" class="btn btn-raised waves-effect btn-round btn-primary" role="button">Load more</a>
            </div>
        </div>
    </div>
</section>
@stop
