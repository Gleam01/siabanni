@extends('front-end.layout')

@section('styles')
  <style>
    .card-body {
      padding: 2%;
    }

    input[type="file"]:focus {
      border: 2px solid tomato;
    }
  </style>
@endsection

@section('content')
  <br>
  <div class="container">
    <section class="row justify-content-center">
      <div class="col-sm-8">
        <div class="card">
          <div class="card-header bg-primary">Modification d'un dossier</div>
          <div class="card-body">
      			{!! Form::model($folder, ['route' => ['folder.update', $folder->id], 'method' => 'put', 'class' => 'form-horizontal panel', 'files' => true]) !!}
              @foreach(config('input-names.folder') as $name => $label)
                <div class="form-group {!! $errors->has($name) ? 'has-error' : '' !!}">
                  {!! Form::label($name, $label, ['class' => 'col-md-4 control-label']) !!}
          			  {!! Form::file($name, null, ['class' => 'form-control col-md-8']) !!}
          				{!! $errors->first($name, '<small class="help-block">:message</small>') !!}
          			</div>
              @endforeach
              <div class="col-sm-3">
                {!! Form::submit('Envoyer', ['class' => 'btn btn-primary']) !!}
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
