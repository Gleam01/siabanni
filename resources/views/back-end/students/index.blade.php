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
                <th>Login</th>
          			<th></th>
          			<th></th>
          			<th></th>
                @if(Auth::user()->rank === 2)
                  <th>Assigner Statut</th>
                @endif
          		</tr>
          	</thead>
          	<tbody>
          		@foreach ($students as $student)
          			<tr>
          				<td>{!! $student->id !!}</td>
          				<td id="lastName" class="text-primary"><strong>{!! $student->lastName !!}</strong></td>
                  <td id="firstName"class="text-primary"><strong>{!! $student->firstName !!} </strong></td>
                  <td class="text-primary">
                    @if($student->status !== null)
                      <strong> {!! $student->status !!} </strong>
                    @else
                      <strong>En attente</strong>
                    @endif
                  </td>
                  <td class="text-primary"><strong>{!! $student->user->email !!}</strong></td>
                  <td class="text-primary"><strong>{!! $student->user->login !!}</strong></td>
          				<td>{!! link_to_route('student.show', 'Voir', [$student->id], ['class' => 'btn btn-success btn-block']) !!}</td>
          				<td>{!! link_to_route('student.edit', 'Modifier', [$student->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
          				<td>
          					{!! Form::open(['method' => 'DELETE', 'route' => ['student.destroy', $student->id]]) !!}
          						{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
          					{!! Form::close() !!}
          				</td>
                  @if(Auth::user()->rank === 2)
                    <td>
                      <button id="openModal" type="button" class="btn btn-info btn-block">Statut</button>
                    </td>
                  @endif
          			</tr>
          		@endforeach
          	</tbody>
          </table>
        </div>
      </div>
      {!! $links !!}
    </div>

    <div id="student_status_modal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center text-primary">Assignation de statut</h4>
          </div>
          <div class="modal-body">
            <h3 style="text-align: center;" id="identite"></h3>
            <form id="student_status_form" action="{{ route('student.status') }}" method="POST">
              {!! csrf_field() !!}
              <div class="form-group">
                <label for="status">Statut de l'étudiant</label>
                <select class="form-control" name="status" id="status">
                  <option value="Boursier">Boursier</option>
                  <option value="Titre Payant">Titre Payant</option>
                  <option value="Sponsoring">Sponsoring</option>
                </select>
                <small></small>
              </div><br>
              <button type="submit" id="student_status_submit" class="pull-left btn btn-primary">Ajouter</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection

@section('scripts')
<script>
$(function(){
  $('#openModal').click(function() {
    var identity = $(this).parent
    $('#identite').val('Etudiant : ' + identity);
    $('#student_status_modal').modal('show');
  });
    $('#student_status_submit').click(function(e) {
      e.preventDefault();
      $('select+small').text('');
      $('select').parent().removeClass('has-error');

      $.ajax({
        type: $('#student_status_form').attr('method'),
        url: $('#student_status_form').attr('action'),
        data: $('#student_status_form').serialize(),
        dataType: "json",
        success: function(data) {
          $('#student_status').modal('hide');
        },
        error: function(data) {
          $.each(data.responseJSON, function (key, value) {
            var input = '#student_status_form select[name=' + key + ']';
            $(input + '+small').text(value);
            $(input).parent().addClass('has-error');
          });
        }
      });
      return false;
    });
  });
</script>
@stop
