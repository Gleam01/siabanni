@extends('back-end.main-layout')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Toutes les entités
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
                    <li class="breadcrumb-item active">Toutes</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-10 col-lg-10">
                <div class="card">
                    <div class="body">
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif

                        <h6>Liste des entitésde Siabanni</h6>
                        <div class="table-responsive">
                            <table class="table table-hover m-t-20">
                                <thead>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Contact</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach ($schools as $school)
                                    <tr>
                                        <td>{{$school->id}}</td>
                                        <td>{{$school->name}}</td>
                                        <td>{{$school->contact}}</td>
                                        <td>{!! link_to_route('school.show', 'En savoir plus', [$school->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                                        <td>{!! link_to_route('school.edit', 'Modifier', [$school->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                                        <td>
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['school.destroy', $school->id]]) !!}
                                                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                            {!! Form::close() !!}
                                        </td>
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
