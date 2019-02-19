@extends('back-end.main-layout')

@section('styles')
  <!-- JQuery DataTable Css -->
  <link href="{{asset('back-end/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@stop

@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-5 col-sm-12">
                <h2>Cardiology
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12">
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{route('back.home')}}"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="{{route('back.departments')}}">Departments</a></li>
                    <li class="breadcrumb-item active">All</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>All</strong> Departments List</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
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
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>Dept. Name</th>
                                    <th>Brief</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>No. of Students</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>55</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>MBA</td>
                                    <td>web page editors now use Lorem Ipsum as their</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>78</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>MBA</td>
                                    <td>There are many variations of passages of Lorem Ipsum</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>MBA</td>
                                    <td>Contrary to popular belief, Lorem Ipsum is not simply random</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>35</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>44</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>M.COM</td>
                                    <td>All the Lorem Ipsum generators on the Internet</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>74</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>102</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>B.COM</td>
                                    <td>All the Lorem Ipsum generators on the Internet</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>47</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>50</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>BBA</td>
                                    <td>It is a long established fact that a reader</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>52</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>55</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>MCA</td>
                                    <td>It is a long established fact that a reader</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>55</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('scripts')
  <!-- Jquery DataTable Plugin Js -->
  <script src="{{asset('back-end/bundles/datatablescripts.bundle.js')}}"></script>
  <script src="{{asset('back-end/js/pages/tables/jquery-datatable.js')}}"></script>
@stop
