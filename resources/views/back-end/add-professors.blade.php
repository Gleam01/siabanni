@extends('back-end.main-layout')

@section('styles')
<!-- Dropzone Css -->
<link href="{{asset('back-end/plugins/dropzone/dropzone.css')}}" rel="stylesheet">
<!-- Bootstrap Material Datetime Picker Css -->
<link href="{{asset('back-end/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />
<!-- Bootstrap Select Css -->
<link href="{{asset('back-end/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
@stop

@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Add Professors
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
                    <li class="breadcrumb-item active">Add</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2><strong>Basic</strong> Information <small>Description text here...</small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);" class="waves-effect waves-block">Action</a></li>
									<li><a href="javascript:void(0);" class="waves-effect waves-block">Another action</a></li>
									<li><a href="javascript:void(0);" class="waves-effect waves-block">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
					</div>
					<div class="body">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="datetimepicker form-control" placeholder="Date of Birth">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <select class="form-control show-tick">
                                    <option value="">-- Gender --</option>
                                    <option value="10">Male</option>
                                    <option value="20">Female</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Department">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Position">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Email">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Website URL">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <form action="/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>Drop files here or click to upload.</h3>
                                        <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-raised btn-round btn-primary">Submit</button>
                                <button type="submit" class="btn btn-raised btn-round">Cancel</button>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
        <div class="row clearfix">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h2><strong>Professor's</strong> Account Information <small>Description text here...</small> </h2>
						<ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);" class="waves-effect waves-block">Action</a></li>
									<li><a href="javascript:void(0);" class="waves-effect waves-block">Another action</a></li>
									<li><a href="javascript:void(0);" class="waves-effect waves-block">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
					</div>
					<div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="User Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-raised btn-round btn-primary">Submit</button>
                                <button type="submit" class="btn btn-raised btn-round">Cancel</button>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
        <div class="row clearfix">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h2><strong>Professor</strong> Social Media Info <small>Description text here...</small> </h2>
						<ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);" class="waves-effect waves-block">Action</a></li>
									<li><a href="javascript:void(0);" class="waves-effect waves-block">Another action</a></li>
									<li><a href="javascript:void(0);" class="waves-effect waves-block">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
					</div>
				<div class="body">
          <div class="row clearfix">
              <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Facebook">
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Twitter">
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Google Plus">
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="LinkedIN ">
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Behance">
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="dribbble">
                  </div>
              </div>
              <div class="col-sm-12">
                  <button type="submit" class="btn btn-raised btn-round btn-primary">Submit</button>
                  <button type="submit" class="btn btn-raised btn-round">Cancel</button>
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
<script src="{{asset('back-end/plugins/autosize/autosize.js')}}"></script> <!-- Autosize Plugin Js -->
<script src="{{asset('back-end/plugins/momentjs/moment.js')}}"></script> <!-- Moment Plugin Js -->
<script src="{{asset('back-end/plugins/dropzone/dropzone.js')}}"></script> <!-- Dropzone Plugin Js -->
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{asset('back-end/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>

<script src="{{asset('back-end/js/pages/forms/basic-form-elements.js')}}"></script>
@stop
