@extends('back-end.main-layout')

@section('styles')
  <!-- JQuery DataTable Css -->
  <link rel="stylesheet" href="{{asset('back-end/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">
@stop

@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Invoice
                <small class="text-muted">Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{route('back.home')}}"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Payments</a></li>
                    <li class="breadcrumb-item active">Invoice</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Invoice</strong> List</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
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
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Bill No</th>
                                        <th>Bill date</th>
                                        <th>Students</th>
                                        <th>Professors</th>
                                        <th>Charges</th>
                                        <th>Tax</th>
                                        <th>Discount</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>21</td>
                                        <td>02/21/2017</td>
                                        <td>Christina Thomas</td>
                                        <td>Juan Freeman</td>
                                        <td>102</td>
                                        <td>10</td>
                                        <td>10%</td>
                                        <td>210</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>02/21/2017</td>
                                        <td>Christina Thomas</td>
                                        <td>Juan Freeman</td>
                                        <td>102</td>
                                        <td>10</td>
                                        <td>10%</td>
                                        <td>210</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>02/21/2017</td>
                                        <td>Christina Thomas</td>
                                        <td>Juan Freeman</td>
                                        <td>102</td>
                                        <td>10</td>
                                        <td>10%</td>
                                        <td>210</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>02/21/2017</td>
                                        <td>Christina Thomas</td>
                                        <td>Juan Freeman</td>
                                        <td>102</td>
                                        <td>10</td>
                                        <td>10%</td>
                                        <td>210</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>02/21/2017</td>
                                        <td>Lori Perkins</td>
                                        <td>Juan Freeman</td>
                                        <td>102</td>
                                        <td>10</td>
                                        <td>10%</td>
                                        <td>210</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>02/21/2017</td>
                                        <td>Christina Thomas</td>
                                        <td>Juan Freeman</td>
                                        <td>102</td>
                                        <td>10</td>
                                        <td>10%</td>
                                        <td>210</td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>02/21/2017</td>
                                        <td>Christina Thomas</td>
                                        <td>Juan Freeman</td>
                                        <td>102</td>
                                        <td>10</td>
                                        <td>10%</td>
                                        <td>210</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>02/21/2017</td>
                                        <td>Christina Thomas</td>
                                        <td>Jessica Patterson</td>
                                        <td>102</td>
                                        <td>10</td>
                                        <td>10%</td>
                                        <td>210</td>
                                    </tr>
                                    <tr>
                                        <td>105</td>
                                        <td>02/21/2017</td>
                                        <td>Lori Perkins</td>
                                        <td>Juan Freeman</td>
                                        <td>102</td>
                                        <td>10</td>
                                        <td>10%</td>
                                        <td>210</td>
                                    </tr>
                                    <tr>
                                        <td>56</td>
                                        <td>02/21/2017</td>
                                        <td>Christina Thomas</td>
                                        <td>Juan Freeman</td>
                                        <td>102</td>
                                        <td>10</td>
                                        <td>10%</td>
                                        <td>210</td>
                                    </tr>
                                    <tr>
                                        <td>34</td>
                                        <td>02/21/2017</td>
                                        <td>Christina Thomas</td>
                                        <td>Jessica Patterson</td>
                                        <td>102</td>
                                        <td>10</td>
                                        <td>10%</td>
                                        <td>210</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>02/21/2017</td>
                                        <td>Christina Thomas</td>
                                        <td>Juan Freeman</td>
                                        <td>102</td>
                                        <td>10</td>
                                        <td>10%</td>
                                        <td>210</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>02/21/2017</td>
                                        <td>Christina Thomas</td>
                                        <td>Juan Freeman</td>
                                        <td>102</td>
                                        <td>10</td>
                                        <td>10%</td>
                                        <td>210</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>02/21/2017</td>
                                        <td>Christina Thomas</td>
                                        <td>Juan Freeman</td>
                                        <td>102</td>
                                        <td>10</td>
                                        <td>10%</td>
                                        <td>210</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>02/21/2017</td>
                                        <td>Christina Thomas</td>
                                        <td>Juan Freeman</td>
                                        <td>102</td>
                                        <td>10</td>
                                        <td>10%</td>
                                        <td>210</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>02/21/2017</td>
                                        <td>Lori Perkins</td>
                                        <td>Juan Freeman</td>
                                        <td>102</td>
                                        <td>10</td>
                                        <td>10%</td>
                                        <td>210</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>02/21/2017</td>
                                        <td>Christina Thomas</td>
                                        <td>Juan Freeman</td>
                                        <td>102</td>
                                        <td>10</td>
                                        <td>10%</td>
                                        <td>210</td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>02/21/2017</td>
                                        <td>Christina Thomas</td>
                                        <td>Juan Freeman</td>
                                        <td>102</td>
                                        <td>10</td>
                                        <td>10%</td>
                                        <td>210</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>02/21/2017</td>
                                        <td>Christina Thomas</td>
                                        <td>Jessica Patterson</td>
                                        <td>102</td>
                                        <td>10</td>
                                        <td>10%</td>
                                        <td>210</td>
                                    </tr>
                                    <tr>
                                        <td>105</td>
                                        <td>02/21/2017</td>
                                        <td>Lori Perkins</td>
                                        <td>Juan Freeman</td>
                                        <td>102</td>
                                        <td>10</td>
                                        <td>10%</td>
                                        <td>210</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
