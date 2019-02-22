@extends('back-end.main-layout')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 text-center">
                <h2>Infos sur une option
                <small>Welcome to Siabanni</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{route('back.home')}}"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Options</a></li>
                    <li class="breadcrumb-item active">{{$option->name}}</li>
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
                            <p class="col-sm-7"> {{$option->name}} </p>
                        </div>
                        <div class="row">
                            <p class="col-sm-4"><b> Code : </b></p>
                            <p class="col-sm-7"> {{$option->code}} </p>
                        </div>
                        <div class="row">
                            <p class="col-sm-4"><b> Description : </b></p>
                            <p class="col-sm-7"> {{$option->description}} </p>
                        </div>
                        <div class="row">
                            <p class="col-sm-4"><b> filière de l'option : </b></p>
                            <p class="col-sm-7">
                                {!! link_to_route('training.show', $option->training->name , [$option->training->id], ['class' => 'text-info']) !!}
                            </p>
                        </div>
                        <div class="row">
                            <p class="col-sm-4"><b> Entité d'enseignement : </b></p>
                            <p class="col-sm-7">
                                {!! link_to_route('school.show', $option->training->school->name , [$option->training->school->id], ['class' => 'text-info']) !!}
                            </p>
                        </div>
                        <div class="row">
                            <p class="col-sm-4"> <b>Image : </b></p>
                            <div class="col-sm-7">
                                @if($option->avatar)
                                    <img src="http://localhost:8000/{{$option->avatar}}" alt="School picture" class="img-responsive img-thumbnail">
                                @else
                                    <p>Non encore définie</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
