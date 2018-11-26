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
      			{!! Form::close() !!}
      		</div>
          <div class="card-footer">
            <a href="javascript:history.back()" class="btn btn-primary">
        			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        		</a>
          </div>
      	</div>
      </div>
    </section>
  </div>
@endsection
