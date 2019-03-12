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
              <p>Filière (s) : {{ $training->name }}</p>
              <p>Frais d'admission : ${{ $training->admissionFees }}USD</p>
            @endforeach

            @isset($schoolFee)
              <fieldset>
                <legend> Informations de paiement de frais d'admission</legend>
                <div class="row">
                    <h5 class="col-md-5 text-md-right">Type de paiement : </h5>
                    <h5 class="col-md-6">{{ $schoolFee->type }}</h5>
                </div>
                <div class="row">
                    <h5 class="col-md-5 text-md-right">Montant Payé : </h5>
                    <h5 class="col-md-6">${{ $schoolFee->pay }}USD</h5>
                </div>
                <div class="row">
                    <h5 class="col-md-5 text-md-right">Montant restant à payer : </h5>
                    <h5 class="col-md-6">${{ $schoolFee->letToPay }}USD</h5>
                </div>
              </fieldset>
            @endisset
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
