@extends('back-end.main-layout')

@section('content')
  <br>
  <section class="content">
    <div class="row justify-content-center">
      <div class="col-sm-10">
        <div class="card">
          <div class="card-header text-center bg-primary">
            <h3 class="card-title">Liste des utilisateurs</h3>
          </div>
          <div class="card-body">
            <table class="table table-hover table-bordered table-responsive">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Login</th>
                  <th>Email</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                  <tr>
                    <td>{!! $user->id !!}</td>
                    <td class="text-primary"><strong>{!! $user->login !!}</strong></td>
                    <td class="text-primary"><strong>{!! $user->email !!}</strong></td>
                    <td>{!! link_to_route('user.show', 'Voir', [$user->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                    <td>{!! link_to_route('user.edit', 'Modifier', [$user->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                    <td>
                      {!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id]]) !!}
                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                      {!! Form::close() !!}
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        {!! $links !!}
      </div>
    </div>
  </section>
@endsection
