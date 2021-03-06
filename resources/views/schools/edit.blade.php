@extends('back-end.main-layout')

@section('styles')
  <!-- Dropzone Css -->
  <link href="{{asset('back-end/plugins/dropzone/dropzone.css')}}" rel="stylesheet">
  <!-- Bootstrap Material Datetime Picker Css -->
  <link href="{{asset('back-end/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />
  <!-- Wait Me Css -->
  <link href="{{asset('back-end/plugins/waitme/waitMe.css')}}" rel="stylesheet" />
  <!-- Bootstrap Select Css -->
  <link href="{{asset('back-end/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
@stop

@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2 class="text-center"> Mise à de l'entité {{ $school->name }} </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{route('back.home')}}"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Entités</a></li>
                    <li class="breadcrumb-item active">Mise à jour</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        @if($school->avatar)
                            <div class="col-sm-12">
                                <h5>Ancienne image de l'entité</h5>
                                <img src="{{ asset($school->avatar) }}" alt="School picture" class="img-responsive img-thumbnail">
                            </div>
                        @endif
                        <div class="row clearfix" style="margin-top: 20px">
                            <div class="col-sm-12">
                                {!! Form::model($school, ['route' => ['school.update', $school->id], 'method' => 'put', 'files' => true]) !!}
                                    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom de l\'entité']) !!}
                                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                                    </div>

                                    <div class="form-group {!! $errors->has('description') ? 'has-error' : '' !!}">
                                        {!! Form::textarea('description', null, ['rows' => 7, 'class' => 'form-control', 'placeholder' => 'Description de l\'entité']) !!}
                                        {!! $errors->first('description', '<small class="help-block">:message</small>') !!}
                                    </div>

                                    <div class="form-group {!! $errors->has('contact') ? 'has-error' : '' !!}">
                                        {!! Form::text('contact', null, ['class' => 'form-control', 'placeholder' => 'Contact de l\'entité']) !!}
                                        {!! $errors->first('contact', '<small class="help-block">:message</small>') !!}
                                    </div>

                                    <div class="form-group {!! $errors->has('avatar') ? 'has-error' : '' !!}">
                                        {!! Form::file('avatar', null, ['class' => 'form-control', 'placeholder' => 'Uploadez une image']) !!}
                                        {!! $errors->first('avatar', '<small class="help-block">:message</small>') !!}
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary center">Valider</button>
                                        </div>
                                    </div>                            
                                {!! Form::close() !!}
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

  <script src="{{asset('back-end/js/pages/forms/basic-form-elements.js')}}"></script>
@stop
