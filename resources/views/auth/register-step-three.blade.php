@extends('layouts.app')

@section('title')
  Pièces jointes
@endsection

@section('content')
<form method="post" class="col-sm-offset-3 col-sm-12 text-center" enctype="multipart/form-data" action="{{ route('register.step.three') }}">
  @csrf
  <div class="form-group row">
      <label for="birthCertificate" class="col-sm-4 col-form-label text-md-right">{{ __('Acte de naissance') }}</label>

      <div class="col-md-6">
        <input type="file" name="birthCertificate" class="form-control{{ $errors->has('birthCertificate') ? ' is-invalid' : '' }}" id="birthCertificate" value="{{ old('birthCertificate') }}" required autofocus>
        @if ($errors->has('birthCertificate'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('birthCertificate') }}</strong>
          </span>
        @endif
      </div>
  </div>

  <div class="form-group row">
    <label for="nationalityCertificate" class="col-sm-4 col-form-label text-md-right">{{ __('Certificat de nationalité') }}</label>

    <div class="col-md-6">
      <input type="file" name="nationalityCertificate" class="form-control{{ $errors->has('nationalityCertificate') ? ' is-invalid' : '' }}" id="nationalityCertificate" value="{{ old('nationalityCertificate') }}" required autofocus>
      @if ($errors->has('nationalityCertificate'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('nationalityCertificate') }}</strong>
        </span>
      @endif
    </div>
  </div>

  <div class="form-group row">
    <label for="attestation" class="col-sm-4 col-form-label text-md-right">{{ __('Attestation du BAC') }}</label>
    <div class="col-md-6">
      <input type="file" name="attestation" class="form-control{{ $errors->has('attestation') ? ' is-invalid' : '' }}" id="attestation" value="{{ old('attestation') }}" required>
      @if ($errors->has('attestation'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('attestation') }}</strong>
        </span>
      @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="bulletin" class="col-sm-4 col-form-label text-md-right">{{ __('Bulletin de notes') }}</label>
    <div class="col-md-6">
      <input type="file" name="bulletin" class="form-control{{ $errors->has('bulletin') ? ' is-invalid' : '' }}" id="" value="{{ old('bulletin') }}" required>
      @if ($errors->has('bulletin'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('bulletin') }}</strong>
        </span>
      @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="NICReference" class="col-sm-4 col-form-label text-md-right">{{ __('Carte d\'identité nationale') }}</label>
    <div class="col-md-6">
      <input type="file" name="NICReference" class="form-control{{ $errors->has('NICReference') ? ' is-invalid' : '' }}" id="NICReference" value="{{ old('NICReference') }}" required>
      @if ($errors->has('NICReference'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('NICReference') }}</strong>
        </span>
      @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="picture" class="col-sm-4 col-form-label text-md-right">{{ __('Photo d\'identité') }}</label>
    <div class="col-md-6">
      <input type="file" name="picture" class="form-control{{ $errors->has('picture') ? ' is-invalid' : '' }}" id="picture" value="{{ old('picture') }}" required>
      @if ($errors->has('picture'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('picture') }}</strong>
        </span>
      @endif
      <input type="hidden" name="student_id" value="{{session('student_id')}}">
      <input type="hidden" name="student_lastName" value="{{session('student_lastName')}}">
      <input type="hidden" name="student_firstName" value="{{session('student_firstName')}}">
    </div>
  </div>
  <div class="form-group row">
    <a href="javascript:history.back()" class="btn btn-primary offset-md-1 col-md-2">
      <span class="glyphicon glyphicon-circle-arrow-left"></span>
        Précédent
    </a>
    <a href="{{route('login')}}" class="btn btn-primary offset-md-2 col-md-2">
      <span class="glyphicon glyphicon-user"></span>
        Se connecter
    </a>
    <button type="submit" class="btn btn-primary  offset-md-2 col-md-2 offset-md-2">
      Suivant
      <span class="glyphicon glyphicon-circle-arrow-right"></span>
    </button>
  </div>
</form>
@endsection
