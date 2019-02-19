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
        <div class="card card-primary">
          <div class="card-header bg-primary">Modification d'un utilisateur</div>
          <div class="card-body">
            {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
              <div class="form-group {!! $errors->has('login') ? 'has-error' : '' !!}">
                {!! Form::text('login', null, ['class' => 'form-control', 'placeholder' => 'Login']) !!}
                {!! $errors->first('login', '<small class="help-block">:message</small>') !!}
      				</div>
      				<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
      				  {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
      				  {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
      				</div>
              <div class="col-sm-3">
                {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
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
