@extends('front-end.layout')

@section('content')
  <br>
  <section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-6">
          <div class="card text-center">
          	<div class="card-header bg-primary">Listes des utilisateurs de Siabanni</div>
          	<div class="card-body">
              <p>Nom : {{ $user->login }}</p>
          		<p>Email : {{ $user->email }}</p>
          		@if($user->admin == 1)
                <p>Administrateur : <span class="text-success">Oui</span> </p>
          		@else
                <p>Administrateur : <span class="text-danger">Non</span> </p>
          		@endif
              @if($user->step !== null)
                <p>Niveau d'inscription : <span class="text-primary">{{ $user->step }}</span> </p>
          		@endif
              <p>Grade sur la plateforme : <span class="text-success">{{ $user->rank}}</span> </p>
          	</div>
            <div class="card-footer">
              <a href="javascript:history.back()" class="btn btn-primary">
                <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
