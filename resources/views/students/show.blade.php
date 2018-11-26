@extends('front-end.layout')

@section('content')
<br>
<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <div class="card text-center">
          <div class="card-header bg-primary">Informations Générales sur {{ $student->firstName }}  {{ $student->lastName }}</div>
          <div class="card-body">
            <p>Prénoms : {{ $student->firstName }}</p>
            <p>Nom : {{ $student->lastName }}</p>
            <p>Date de naissance : {{ $student->birthday }}</p>
            <p>Lieu de naissance : {{ $student->placeOfBirth }}</p>
            <p>Numéro de Téléphone : {{ $student->phone }}</p>
            <p>Sexe : {{ $student->sex }}</p>
            <p>Pays : {{ $student->country }}</p>
            <p>Département : {{ $student->province }}</p>
            <p>Ville : {{ $student->city }}</p>
            @foreach ($student->trainings as $training)
              <p>Filière : {{ $training->name }}</p>
            @endforeach
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
