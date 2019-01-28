@extends('front-end.layout')

@section('styles')
  <style>
    .card-body {
      padding: 2%;
    }
  </style>
@endsection

@section('content')
  <br>
  <div class="container">
    <section class="row justify-content-center">
      <div class="col-sm-8">
        <div class="card">
          <div class="card-header bg-primary">Modification d'un étudiant</div>
          <div class="card-body">
            {!! Form::model($student, ['route' => ['student.update', $student->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
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
                  <legend>Informations Générales</legend>
                  <div class="form-group {!! $errors->has('lastName') ? 'has-error' : '' !!}">
                      {!! Form::text('lastName', null, ['class' => 'form-control text-center', 'placeholder' => 'Nom']) !!}
                      {!! $errors->first('lastName', '<small class="help-block">:message</small>') !!}
                  </div>

                  <div class="form-group {!! $errors->has('firstName') ? 'has-error' : '' !!}">
                      {!! Form::text('firstName', null, ['class' => 'form-control text-center', 'placeholder' => 'Prénoms']) !!}
                      {!! $errors->first('firstName', '<small class="help-block">:message</small>') !!}
                  </div>

                  <div class="form-group {!! $errors->has('sex') ? 'has-error' : '' !!}">
                      {!! Form::select('sex', ['Masculin' => 'Masculin', 'Féminin' => 'Féminin',
                          'Autres' => 'Autres'], null, ['class' => 'form-control text-center', 'placeholder' => 'Sexe']) !!}
                      {!! $errors->first('sex', '<small class="help-block">:message</small>') !!}
                  </div>

                  <div class="form-group {!! $errors->has('birthday') ? 'has-error' : '' !!}">
                      {!! Form::date('birthday', null, ['class' => 'form-control text-center', 'placeholder' => 'Date de naissance']) !!}
                      {!! $errors->first('birthday', '<small class="help-block">:message</small>') !!}
                  </div>

                  <div class="form-group {!! $errors->has('placeOfBirth') ? 'has-error' : '' !!}">
                      {!! Form::text('placeOfBirth', null, ['class' => 'form-control text-center', 'placeholder' => 'Lieu de naissance']) !!}
                      {!! $errors->first('placeOfBirth', '<small class="help-block">:message</small>') !!}
                  </div>

                  <div class="form-group {!! $errors->has('phone') ? 'has-error' : '' !!}">
                      {!! Form::text('phone', null, ['class' => 'form-control text-center', 'placeholder' => 'Téléphone']) !!}
                      {!! $errors->first('phone', '<small class="help-block">:message</small>') !!}
                  </div>

                  <div class="form-group {!! $errors->has('country') ? 'has-error' : '' !!}">
                      {!! Form::select('country', ['Bénin' => 'Bénin', 'Mali' => 'Mali',
                          'Sénégal' => 'Sénégal'], null, ['class' => 'form-control text-center', 'placeholder' => 'Pays']) !!}
                      {!! $errors->first('country', '<small class="help-block">:message</small>') !!}
                  </div>

                  <div class="form-group {!! $errors->has('province') ? 'has-error' : '' !!}">
                      {!! Form::text('province', null, ['class' => 'form-control text-center', 'placeholder' => 'Département']) !!}
                      {!! $errors->first('province', '<small class="help-block">:message</small>') !!}
                  </div>

                  <div class="form-group {!! $errors->has('city') ? 'has-error' : '' !!}">
                      {!! Form::text('city', null, ['class' => 'form-control text-center', 'placeholder' => 'Ville']) !!}
                      {!! $errors->first('city', '<small class="help-block">:message</small>') !!}
                  </div>

                  <div class="col-sm-3">
                      {!! Form::submit('Envoyer', ['class' => 'btn btn-primary ']) !!}
                  </div>
              </fieldset>
      			{!! Form::close() !!}
      		</div>
      	</div>
      </div>
    </section>
  </div>
@endsection
