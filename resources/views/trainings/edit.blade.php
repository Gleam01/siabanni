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
                <h2 class="text-center"> Mise à de la filière {{ $training->name }} </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{route('back.home')}}"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Filières</a></li>
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
                        @if($training->avatar)
                            <div class="col-sm-12">
                                <h5>Ancienne image de la filière</h5>
                                <img src="{{ asset($training->avatar) }}" alt="Training picture" class="img-responsive img-thumbnail">
                            </div>
                        @else
                            <div class="col-sm-12">
                                <h5 class="text-center">Pas d'ancienne image pour la filière</h5>
                            </div>
                        @endif

                        @endif
                        <div class="row clearfix" style="margin-top: 20px">
                            <div class="col-sm-12">
                                {!! Form::model($training, ['route' => ['training.update', $training->id], 'method' => 'put', 'files' => true]) !!}
                                    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom de la filière']) !!}
                                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                                    </div>

                                    <div class="form-group {!! $errors->has('code') ? 'has-error' : '' !!}">
                                        {!! Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'Code de la filière']) !!}
                                        {!! $errors->first('code', '<small class="help-block">:message</small>') !!}
                                    </div>

                                    <div class="form-group {!! $errors->has('description') ? 'has-error' : '' !!}">
                                        {!! Form::textarea('description', null, ['rows' => 7, 'class' => 'form-control', 'placeholder' => 'Description de la filière']) !!}
                                        {!! $errors->first('description', '<small class="help-block">:message</small>') !!}
                                    </div>

                                    <div class="form-group {!! $errors->has('admissionFees') ? 'has-error' : '' !!}">
                                        {!! Form::number('admissionFees', null, ['class' => 'form-control', 'placeholder' => 'Frais d\'admission de la filière']) !!}
                                        {!! $errors->first('admissionFees', '<small class="help-block">:message</small>') !!}
                                    </div>

                                    <div class="form-group {!! $errors->has('fees') ? 'has-error' : '' !!}">
                                        {!! Form::number('fees', null, ['class' => 'form-control', 'placeholder' => 'Frais de scolarité de la filière']) !!}
                                        {!! $errors->first('fees', '<small class="help-block">:message</small>') !!}
                                    </div>
                                    
                                    <div class="form-group">
                                        <select name="school_id" id="school_id" class="form-control {{ $errors->has('school_id') ? 'has-danger' : '' }}" value="{{ old('school_id') }}" placeholder="Entité de la filière">
                                            @foreach ($schools as $school)
                                                @if ($training->school_id == $school->id)
                                                    <option selected="selected" value="{{$school->id}}">{{$school->name}}</option>
                                                @else
                                                    <option value="{{$school->id}}">{{$school->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @if ($errors->has('school_id'))
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('school_id') }}</strong>
                                            </span>
                                        @endif
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
