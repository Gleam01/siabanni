@extends('back-end.main-layout')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 text-center">
                <h2>Infos sur une filière
                <small>Welcome to Siabanni</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{route('back.home')}}"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Filières</a></li>
                    <li class="breadcrumb-item active">{{$training->name}}</li>
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
                            <p class="col-sm-7"> {{$training->name}} </p>
                        </div>
                        <div class="row">
                            <p class="col-sm-4"><b>Code : </b></p>
                            <p class="col-sm-7"> {{$training->code}} </p>
                        </div>
                        <div class="row">
                            <p class="col-sm-4"><b> Description : </b></p>
                            <p class="col-sm-7"> {{$training->description}} </p>
                        </div>
                        <div class="row">
                            <p class="col-sm-4"><b>Frais d'admission : </b></p>
                            <p class="col-sm-7"> {{$training->admissionFees}} </p>
                        </div>
                        <div class="row">
                            <p class="col-sm-4"><b>Frais de scolarité : </b></p>
                            <p class="col-sm-7"> {{$training->fees}} </p>
                        </div>
                        <div class="row">
                            <p class="col-sm-4"><b>Entité : </b></p>
                            <p class="col-sm-7">
                                {!! link_to_route('school.show', $training->school->name , [$training->school->id], ['class' => 'text-info']) !!}
                            </p>
                        </div>
                        <div class="row">
                            <p class="col-sm-4"> <b>Image : </b></p>
                            <div class="col-sm-7">
                                @if($training->avatar)
                                    <img src="{{asset($training->avatar)}}" alt="Training picture" class="img-responsive img-thumbnail">
                                @else
                                    <p>Non encore définie</p>
                                @endif
                            </div>
                        </div>
                        <br><br><br>
                        <h5 class="text-center">Liste des options disponibles</h5>
                        <div class="table-responsive">
                            <table class="table table-hover m-t-20">
                                <thead>
                                    <th>Nom</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach ($training_options as $training_option)
                                        <tr>
                                            <td>{{$training_option->name}}</td>
                                            <td>{!! link_to_route('option.show', 'En savoir plus', [$training_option->id], ['class' => 'btn btn-info btn-block']) !!}</td>
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
        </div>
    </div>
</section>
@stop
