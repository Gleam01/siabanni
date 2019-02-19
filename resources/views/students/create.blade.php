@extends('front-end.layout')

@section('content')
    <form method="POST" action="{{ route('student.store') }}" aria-label="{{ __('Informations Générales') }}">
        @csrf

        <fieldset>
            <legend class="text-center">Cycle et Filière</legend>
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
        </fieldset>

        <fieldset>
            <legend class="text-center">Informations Générales</legend>
            <div class="form-group row">
                <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Nom :* ') }}</label>
                <div class="col-md-6">
                    <input type="lastName" name="lastName" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" id="lastName" value="{{ old('lastName') }}" required >
                    @if ($errors->has('lastName'))
                        <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('lastName') }}</strong>
            </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('Prénoms :* ') }}</label>
                <div class="col-md-6">
                    <input type="text" name="firstName" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" id="firstName" value="{{ old('firstName') }}" required >
                    @if ($errors->has('firstName'))
                        <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('firstName') }}</strong>
            </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Sexe') }}</label>
                <div class="col-md-6">
                    <select class="form-control{{ $errors->has('sex') ? ' is-invalid' : ''}}" name="sex" id="sex" required>
                        <option value="Masculin">Masculin</option>
                        <option value="Féminin">Féminin</option>
                        <option value="Autre">Autre</option>
                    </select>
                    @if ($errors->has('sex'))
                        <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('sex') }}</strong>
            </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('Date de naissance :* ') }}</label>

                <div class="col-md-6">
                    <input type="date" name="birthday" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" id="birthday" value="{{ old('birthday') }}" required >
                    @if ($errors->has('birthday'))
                        <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('birthday') }}</strong>
            </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="placeOfBirth" class="col-md-4 col-form-label text-md-right">{{ __('Lieu de naissance :* ') }}</label>
                <div class="col-md-6">
                    <input type="text" name="placeOfBirth" class="form-control{{ $errors->has('placeOfBirth') ? ' is-invalid' : '' }}" id="placeOfBirth" value="{{ old('placeOfBirth') }}" required >
                    @if ($errors->has('placeOfBirth'))
                        <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('placeOfBirth') }}</strong>
            </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone :* ') }}</label>
                <div class="col-md-6">
                    <input type="tel" name="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" id="phone" value="{{ old('phone') }}" required >
                    @if ($errors->has('phone'))
                        <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('phone') }}</strong>
            </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Pays :* ') }}</label>
                <div class="col-md-6">
                    <select name="country" id="country" class="form-control{{ $errors->has('country') ? ' is-invalid' : ''}}" required>
                        <option value="Bénin">Bénin</option>
                        <option value="Mali">Mali</option>
                    </select>
                    @if ($errors->has('country'))
                        <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('country') }}</strong>
            </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('Département') }}</label>
                <div class="col-md-6">
                    <input type="text" name="province" class="form-control{{ $errors->has('province') ? ' is-invalid' : '' }}" id="province" value="{{ old('province') }}" required >
                    @if ($errors->has('province'))
                        <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('province') }}</strong>
            </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Ville :* ') }}</label>
                <div class="col-md-6">
                    <input type="text" name="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" id="city" value="{{ old('city') }}" required >
                    @if ($errors->has('city'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-md-1 offset-md-5">
                    Suivant
                </button>
            </div>
        </fieldset>
    </form>
@endsection