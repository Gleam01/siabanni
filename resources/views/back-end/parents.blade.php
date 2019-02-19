@extends('back-end.main-layout')
@section('content')
<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>All Parents List
                <small class="text-muted">Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{route('back.home')}}"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item active">Parents List</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card parents-list">
                    <div class="header">
                        <h2><strong>Parents</strong> List</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">2017 Year</a></li>
                                    <li><a href="javascript:void(0);">2016 Year</a></li>
                                    <li><a href="javascript:void(0);">2015 Year</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead>
                                    <tr>
                                        <th>Media</th>
                                        <th>Student ID</th>
                                        <th>Department</th>
                                        <th>Parents Name</th>
                                        <th class="hidden-md-down">Address</th>
                                        <th>Number</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="list-icon"><img class="rounded" src="{{asset('back-end/images/xs/avatar1.jpg')}}" alt=""></span></td>
                                        <td><span class="list-name">OU 00456</span></td>
                                        <td><span class="badge badge-primary">MCA</span></td>
                                        <td>Joseph</td>
                                        <td class="hidden-md-down">70 Bowman St. South Windsor, CT 06074</td>
                                        <td>404-447-6013</td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="rounded" src="{{asset('back-end/images/xs/avatar2.jpg')}}" alt=""></span></td>
                                        <td><span class="list-name">KU 00789</span></td>
                                        <td><span class="badge badge-warning">Medical</span></td>
                                        <td>Cameron</td>
                                        <td class="hidden-md-down">123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-4569</td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="rounded" src="{{asset('back-end/images/xs/avatar3.jpg')}}" alt=""></span></td>
                                        <td><span class="list-name">KU 00987</span></td>
                                        <td><span class="badge badge-info">M.COM</span></td>
                                        <td>Alex</td>
                                        <td class="hidden-md-down">123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-7412</td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="rounded" src="{{asset('back-end/images/xs/avatar4.jpg')}}" alt=""></span></td>
                                        <td><span class="list-name">OU 00951</span></td>
                                        <td><span class="badge badge-default">MBA</span></td>
                                        <td>James</td>
                                        <td class="hidden-md-down">44 Shirley Ave. West Chicago, IL 60185</td>
                                        <td>404-447-2589</td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="rounded" src="{{asset('back-end/images/xs/avatar1.jpg')}}" alt=""></span></td>
                                        <td><span class="list-name">OU 00953</span></td>
                                        <td><span class="badge badge-success">BBA</span></td>
                                        <td>charlie</td>
                                        <td class="hidden-md-down">123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-9632</td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="rounded" src="{{asset('back-end/images/xs/avatar1.jpg')}}" alt=""></span></td>
                                        <td><span class="list-name">OU 00456</span></td>
                                        <td><span class="badge badge-primary">MCA</span></td>
                                        <td>Joseph</td>
                                        <td class="hidden-md-down">70 Bowman St. South Windsor, CT 06074</td>
                                        <td>404-447-6013</td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="rounded" src="{{asset('back-end/images/xs/avatar2.jpg')}}" alt=""></span></td>
                                        <td><span class="list-name">KU 00789</span></td>
                                        <td><span class="badge badge-warning">Medical</span></td>
                                        <td>Cameron</td>
                                        <td class="hidden-md-down">123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-4569</td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="rounded" src="{{asset('back-end/images/xs/avatar3.jpg')}}" alt=""></span></td>
                                        <td><span class="list-name">KU 00987</span></td>
                                        <td><span class="badge badge-info">M.COM</span></td>
                                        <td>Alex</td>
                                        <td class="hidden-md-down">123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-7412</td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="rounded" src="{{asset('back-end/images/xs/avatar4.jpg')}}" alt=""></span></td>
                                        <td><span class="list-name">OU 00951</span></td>
                                        <td><span class="badge badge-default">MBA</span></td>
                                        <td>James</td>
                                        <td class="hidden-md-down">44 Shirley Ave. West Chicago, IL 60185</td>
                                        <td>404-447-2589</td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="rounded" src="{{asset('back-end/images/xs/avatar1.jpg')}}" alt=""></span></td>
                                        <td><span class="list-name">OU 00953</span></td>
                                        <td><span class="badge badge-success">BBA</span></td>
                                        <td>charlie</td>
                                        <td class="hidden-md-down">123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-9632</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <ul class="pagination pagination-primary m-b-0">
                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="zmdi zmdi-arrow-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="zmdi zmdi-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
