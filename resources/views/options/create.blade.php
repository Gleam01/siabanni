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
                <h2 class="text-center"> Ajout d'une nouvelle option </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{route('back.home')}}"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Options</a></li>
                    <li class="breadcrumb-item active">Créer</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <form class="col-sm-12" method="post" action="{{route('training.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'has-danger' : '' }}" value="{{ old('name') }}" placeholder="Nom de l'option">
                                    @if ($errors->has('name'))
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input name="code" type="code" class="form-control {{ $errors->has('code') ? 'has-danger' : '' }}" value="{{ old('code') }}" placeholder="Nom de l'option">
                                    @if ($errors->has('code'))
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('code') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <textarea rows="7" name="description" class="form-control {{ $errors->has('description') ? 'has-danger' : '' }}" value="{{ old('description') }}" placeholder="Description">Description</textarea>
                                    @if ($errors->has('description'))
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <select name="training_id" id="training_id" class="form-control {{ $errors->has('training_id') ? 'has-danger' : '' }}" value="{{ old('training_id') }}" placeholder="Filière de l'option">
                                        @foreach($trainings as $training)
                                            <option value="{{$training->id}}">{{$training->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('training_id'))
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('training_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input name="avatar" type="file" class="form-control {{ $errors->has('avatar') ? 'has-danger' : '' }}" value="{{ old('avatar') }}" placeholder="Sélectionnez une image">
                                    @if ($errors->has('avatar'))
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('avatar') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary center">Valider</button>
                                </div>
                            </form>
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
  <!-- Bootstrap Material Datetime Picker Plugin Js -->
  <script src="{{asset('back-end/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>

  <script src="{{asset('back-end/js/pages/forms/basic-form-elements.js')}}"></script>
@stop
