@extends('back-end.main-layout')

@section('content')
<br>
<section class="content">
  <div class="row justify-content-center">
    <div class="col-sm-10">
      <div class="card">
        <div class="card-header text-center bg-primary">
          <h3 class="card-title">Liste des étudiants</h3>
        </div>
        <div class="card-body">
          <table class="table table-condensed table-bordered table-responsive table-hover">
            <thead>
              <tr>
                <th>#</th>
          			<th>Nom</th>
                <th>Prénoms</th>
                <th>Statut</th>
                <th>Adresse mail</th>
          			<th></th>
          			<th></th>
          			<th></th>
          		</tr>
          	</thead>
          	<tbody>
          		@foreach ($students as $student)
          			<tr>
          				<td>{!! $student->id !!}</td>
          				<td class="text-primary"><strong>{!! $student->lastName !!}</strong></td>
                  <td class="text-primary"><strong>{!! $student->firstName !!} </strong></td>
                  <td class="text-primary">
                    @if($student->status !== null)
                      <strong> {!! $student->status !!} </strong>
                    @else
                      <strong>En attente</strong>
                    @endif
                  </td>
                  <td class="text-primary"><strong>{!! $student->user->email !!}</strong></td>
          				<td>{!! link_to_route('student.show', 'Voir', [$student->id], ['class' => 'btn btn-success btn-block']) !!}</td>
          				<td>{!! link_to_route('student.edit', 'Modifier', [$student->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
          				<td>
          					{!! Form::open(['method' => 'DELETE', 'route' => ['student.destroy', $student->id]]) !!}
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