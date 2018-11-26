@extends('layouts.app')

@section('title')
  Création de compte
@endsection

@section('content')
<form id="register_step_one_form" method="POST" action="{{ route('register') }}" aria-label="{{ __('Création de compte') }}">
    @csrf
    <div class="form-group row">
        <label for="login" class="col-md-4 col-form-label text-md-right">{{ __('Login') }}</label>
        <div class="col-md-6">
          <input type="text" name="login" class="form-control{{ $errors->has('login') ? ' is-invalid' : '' }}" id="login" value="{{ old('login') }}" required >
          @if ($errors->has('login'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('login') }}</strong>
            </span>
          @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Address E-Mail') }}</label>
        <div class="col-md-6">
          <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" value="{{ old('email') }}" required >
          @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

        <div class="col-md-6">
          <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" value="{{ old('password') }}" required >
          @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer Mot de passe') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="training" class="col-md-4 col-form-label text-md-right">{{ __('Filière') }}</label>
        <div class="col-md-6">
          <select class="form-control {{ $errors->has('training_id') ? 'is-invalid' : '' }}" name="training_id" id="training" value="{{ old('training_id') }}" required>
            @foreach ($trainings as $training)
              <option value="{{$training->id}}">{{$training->name}}</option>
            @endforeach
          </select>
          @if ($errors->has('training_id'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('training_id') }}</strong>
            </span>
          @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="cycle" class="col-md-4 col-form-label text-md-right">{{ __('Cycle') }}</label>
        <div class="col-md-6">
            <select class="form-control {{ $errors->has('cycle') ? 'is-invalid' : '' }}" name="cycle" id="cycle" value="{{ old('cycle') }}" required>
              <option value="Licence">Licence</option>
              <option value="Ingénieur">Ingénieur</option>
              <option value="Master">Master</option>
              <option value="Doctorat">Doctorat</option>
            </select>
            @if ($errors->has('cycle'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('cycle') }}</strong>
              </span>
            @endif
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button id="submit_step_one" type="submit" class="btn btn-primary">
                {{ __('S\'inscrire') }}
            </button>
        </div>
    </div>
</form>
@endsection
