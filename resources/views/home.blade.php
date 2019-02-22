@extends('layouts.app')

@section('styles')
  <style>
    img {
      max-width: 100%;
    }

    legend {
      text-align: center;
    }

    a.btn-warning {
      margin-bottom: 10px;
      margin-left: 40%;
    }

    figure legend {
      font-size: 1.5vw;
    }
  </style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                      <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                      </div>
                    @endif

                    @if(session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    @isset($user)
                    <fieldset>
                      <legend> Informations de votre compte utilisateur </legend>
                      <div class="row">
                          <h5 class="col-md-5 text-md-right">Login</h5>
                          <h5 class="col-md-6">{{ $user->login }}</h5>
                      </div>
                      <div class="row">
                          <h5 class="col-md-5 text-md-right">Address E-Mail : </h5>
                          <h5 class="col-md-6">{{ $user->email }}</h5>
                      </div>
                      {!! link_to_route('user.edit', 'Modifier', [$user->id], ['class' => 'btn btn-warning pull-right']) !!}
                    </fieldset>
                    @endisset

                    @isset($student)
                    <fieldset>
                      <legend> Informations Générales </legend>
                      <div class="row">
                          <h5 class="col-md-5 text-md-right">Nom : </h5>
                          <h5 class="col-md-6">{{ $student->lastName }}</h5>
                      </div>
                      <div class="row">
                          <h5 class="col-md-5 text-md-right">Prénoms : </h5>
                          <h5 class="col-md-6">{{ $student->firstName }}</h5>
                      </div>
                      <div class="row">
                          <h5 class="col-md-5 text-md-right">Sexe : </h5>
                          <h5 class="col-md-6">{{ $student->sex }}</h5>
                      </div>
                      <div class="row">
                          <h5 class="col-md-5 text-md-right">Date de naissance : </h5>
                          <h5 class="col-md-6">{{ $student->birthday }}</h5>
                      </div>
                      <div class="row">
                          <h5 class="col-md-5 text-md-right">Lieu de naissance : </h5>
                          <h5 class="col-md-6">{{ $student->placeOfBirth }}</h5>
                      </div>
                      <div class="row">
                          <h5 class="col-md-5 text-md-right">Téléphone</h5>
                          <h5 class="col-md-6">{{ $student->phone }}</h5>
                      </div>
                      <div class="row">
                          <h5 class="col-md-5 text-md-right">Pays : </h5>
                          <h5 class="col-md-6">{{ $student->country }}</h5>
                      </div>
                      <div class="row">
                          <h5 class="col-md-5 text-md-right">Département : </h5>
                          <h5 class="col-md-6">{{ $student->province }}</h5>
                      </div>
                      <div class="row">
                          <h5 class="col-md-5 text-md-right">Ville : </h5>
                          <h5 class="col-md-6">{{ $student->city }}</h5>
                      </div>
                      {!! link_to_route('student.edit', 'Modifier', [$student->id], ['class' => 'btn btn-warning pull-right']) !!}
                    </fieldset>
                    @endisset

                    @isset($schoolFee)
                    <fieldset>
                      <legend> Informations de paiement </legend>
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

                    @isset($folder)
                      <fieldset>
                        <legend> Pièces jointes </legend>
                        <figure class="row">
                          <div class=" offset-md-2 col-md-8">
                            <img src="{{$folder->birthCertificate}}" alt="Acte de naissance" />
                          </div>
                          <legend>Acte de naissance</legend>
                        </figure>

                        <figure class="row">
                          <div class=" offset-md-2 col-md-8">
                            <img src="{{$folder->nationalityCertificate}}" alt="Certificat de nationalité" />
                          </div>
                          <legend>Certificat de nationalité</legend>
                        </figure>

                        <figure class="row">
                          <div class=" offset-md-2 col-md-8">
                            <img src="{{$folder->attestation}}" alt="Attestation de BAC" />
                          </div>
                          <legend>Attestation de BAC</legend>
                        </figure>

                        <figure class="row">
                          <div class=" offset-md-2 col-md-8">
                            <img src="{{$folder->bulletin}}" alt="Bulletin de notes" />
                          </div>
                          <legend>Bulletin de notes</legend>
                        </figure>

                        <figure class="row">
                          <div class=" offset-md-2 col-md-8">
                            <img src="{{$folder->NICReference}}" alt="Carte d'identité nationale" />
                          </div>
                          <legend>Carte d'identité nationale</legend>
                        </figure>

                        <figure class="row">
                          <div class=" offset-md-2 col-md-8">
                            <img src="{{$folder->picture}}" alt="Photo d'identité" />
                          </div>
                          <legend>Photo d'identité</legend>
                        </figure>
                        {!! link_to_route('folder.edit', 'Modifier', [$folder->id], ['class' => 'btn btn-warning']) !!}
                      </fieldset>
                    @endisset

                    @switch(Auth::user()->step)
                      @case(1)
                        {!! link_to_route('register.pursuit', 'Poursuivre votre inscription', ['step' => '1'], ['class' => 'btn btn-info']) !!}
                      @break

                      @case(2)
                        {!! link_to_route('register.pursuit', 'Poursuivre votre inscription', ['step' => '2'], ['class' => 'btn btn-info']) !!}
                      @break

                      @case(3)
                        {!! link_to_route('register.pursuit', 'Poursuivre votre inscription', ['step' => '3'], ['class' => 'btn btn-info']) !!}
                      @break
                    @endswitch
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
