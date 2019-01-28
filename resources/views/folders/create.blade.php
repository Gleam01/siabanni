@extends('front-end.layout')

@section('styles')
    <style>
        input[type="file"]:focus {
            border: 2px solid tomato;
        }
    </style>
@endsection

@section('content')
    <form method="post" class="col-sm-12 text-center" enctype="multipart/form-data" action="{{ route('folder.store') }}">
        @csrf
        <fieldset>
            <legend>Pièces jointes</legend>
            <div class="form-group row">
                <label for="birthCertificate" class="col-sm-4 col-form-label text-md-right">{{ __('Acte de naissance') }}</label>

                <div class="col-md-6">
                    <input type="file" name="birthCertificate" class="form-control{{ $errors->has('birthCertificate') ? ' is-invalid' : '' }}" id="birthCertificate" value="{{ old('birthCertificate') }}" required autofocus>
                    @if ($errors->has('birthCertificate'))
                        <span class="invalid-feedback" role="alert">*
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
                </div>
            </div>
            <div class="form-group row">
                <a href="{{route('student.edit', ['id' => $student_id])}}" class="btn btn-primary col-md-1">
                    Précédent
                </a>
                <button type="submit" class="btn btn-primary offset-md-10 col-md-1">
                    Suivant
                </button>
            </div>
        </fieldset>
    </form>
@endsection