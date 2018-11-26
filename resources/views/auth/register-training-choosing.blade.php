@extends('layouts.app')

@section('title')
  Choix de filière et Spécification du cycle
@endsection

@section('content')
<form method="POST" action="{{ route('register.training.choosing') }}" aria-label="{{ __('Choix de filière et Spécification du cycle') }}">
    @csrf

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
            <input type="hidden" name="user_id" class="form-control" value="{{ session('user_id') }}" required >
            <button id="submit_step_one" type="submit" class="btn btn-primary">
                {{ __('Valider') }}
            </button>
        </div>
    </div>
</form>
@endsection
