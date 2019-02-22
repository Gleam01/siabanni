@extends('back-end.main-layout')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 text-center">
                <h2>Infos sur une entité
                <small>Welcome to Siabanni</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{route('back.home')}}"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Entités</a></li>
                    <li class="breadcrumb-item active">{{$school->name}}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <p class="col-sm-4"><b>Nom : </b></p>
                            <p class="col-sm-7"> {{$school->name}} </p>
                        </div>
                        <div class="row">
                            <p class="col-sm-4"><b> Description : </b></p>
                            <p class="col-sm-7"> {{$school->description}} </p>
                        </div>
                        <div class="row">
                            <p class="col-sm-4"><b> Contact : </b></p>
                            <p class="col-sm-7"> {{$school->contact}} </p>
                        </div>
                        <div class="row">
                            <p class="col-sm-4"> <b>Image : </b></p>
                            <div class="col-sm-7">
                                @if($school->avatar)
                                    <img src="http://localhost:8000/{{$school->avatar}}" alt="School picture" class="img-responsive img-thumbnail">
                                @else
                                    <p>Non encore définie</p>
                                @endif
                            </div>
                        </div>
                        <br><br><br>
                        <h5 class="text-center">Liste des filières disponibles</h5>
                        <div class="table-responsive">
                            <table class="table table-hover m-t-20">
                                <thead>
                                    <th>Nom</th>
                                    <th>Frais d'admission</th>
                                    <th>Scolarité</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach ($school_trainings as $school_training)
                                        <tr>
                                            <td>{{$school_training->name}}</td>
                                            <td>{{$school_training->admissionFees}}</td>
                                            <td>{{$school_training->fees}}</td>
                                            <td>{!! link_to_route('training.show', 'En savoir plus', [$school_training->id], ['class' => 'btn btn-info btn-block']) !!}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-12 text-center">
                            {!! $links !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 text-center">
                {!! $links !!}
            </div>
        </div>
    </div>
</section>
@stop
