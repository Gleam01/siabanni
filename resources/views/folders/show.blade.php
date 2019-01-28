@extends('front-end.layout')

@section('styles')
  <style>
    .card-body figure {
      padding: 5%;
    }
    figcaption {
      margin-top: 2%;
    }
  </style>
@endsection
@section('content')
<br>
<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-8">
        <div class="card text-center">
          <div class="card-header bg-primary">Informations Générales sur {{ $folder->student->firstName }}  {{ $folder->student->lastName }}</div>
          <div class="card-body">
            @foreach (config('input-names.folder') as $attr => $caption)
            <figure>
              <img src="{{ asset($folder->$attr) }}" class="img-thumbnail img-responsive" alt="{{ $caption }}">
              <figcaption class="caption"><u class="text-danger">{{ $caption }}</u></figcaption>
            </figure>
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
