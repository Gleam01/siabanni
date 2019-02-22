@extends('back-end.main-layout')

@section('content')
<br>
<section class="content">
  <div class="row justify-content-center">
    <div class="col-sm-10">
      <div class="card">
        <div class="card-header text-center bg-primary">
          <h3 class="card-title">Liste des dossiers en instance</h3>
          @if (Session::has('success'))
            <div class="alert alert-success text-center">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
              <p>{{ Session::get('success') }}</p>
            </div>
          @endif
        </div>
        <div class="card-body">
          <table class="table table-condensed table-bordered table-responsive table-hover">
    				<thead>
    					<tr>
    						<th>#</th>
    						<th>Nom</th>
                <th>Prénoms</th>
    						<th>Plus sur le postulant</th>
    						<th>Details du dossier</th>
    						<th>Action</th>
                @if(Auth::user()->rank === 1)
                  <th>Assigner Statut</th>
                @endif
    					</tr>
    				</thead>
    				<tbody>
    					@foreach ($folders as $folder)
    						<tr>
    							<td class="folder">{!! $folder->id !!}</td>
    							<td class="text-primary"><strong>{!! $folder->student->lastName !!}</strong></td>
                  <td class="text-primary"><strong>{!! $folder->student->firstName !!}</strong></td>
    							<td>{!! link_to_route('student.show', 'En savoir plus', [$folder->student_id], ['class' => 'btn btn-info btn-block']) !!}</td>
    							<td>{!! link_to_route('folder.show', 'Details dossier', [$folder->id], ['class' => 'btn btn-info btn-block']) !!}</td>
                  @if(Auth::user()->rank === 1 && ($folder->validateByStaffLevelOne==-1 || $folder->validateByStaffLevelOne== 0))
                    <td>
                      {!! Form::open(['method' => 'PUT', 'route' => ['folder.accept.staff.one', $folder->id]]) !!}
                        {!! Form::submit('Valider', ['class' => 'btn btn-success btn-block', 'onclick' => 'return confirm(\'Vraiment valider ce dossier ?\')']) !!}
                      {!! Form::close() !!}
                    </td>
                  @endif

                  @if(Auth::user()->rank === 1 && $folder->validateByStaffLevelOne==1)
                    <td>
                      {!! Form::open(['method' => 'PUT', 'route' => ['folder.reject.staff.one', $folder->id]]) !!}
                        {!! Form::submit('Rejeter', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment rejeter ce dossier ?\')']) !!}
                      {!! Form::close() !!}
                    </td>
                  @endif

                  @if(Auth::user()->rank === 2 && ($folder->validateByStaffLevelTwo==-1 || $folder->validateByStaffLevelTwo==0))
                    <td>
                      {!! Form::open(['method' => 'PUT', 'route' => ['folder.accept.staff.two', $folder->id]]) !!}
                        {!! Form::submit('Valider', ['class' => 'btn btn-success btn-block', 'onclick' => 'return confirm(\'Vraiment valider ce dossier ?\')']) !!}
                      {!! Form::close() !!}
                    </td>
                  @endif
                  @if(Auth::user()->rank === 2 && $folder->validateByStaffLevelTwo == 1)
                    <td>
                      {!! Form::open(['method' => 'PUT', 'route' => ['folder.reject.staff.two', $folder->id]]) !!}
                        {!! Form::submit('Rejeter', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment rejeter ce dossier ?\')']) !!}
                      {!! Form::close() !!}
                    </td>
                  @endif

                  @if(Auth::user()->rank === 1)
                    <td>
                      <button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-target="#student_status_collapse{{$folder->id}}">Assignation</button>
                      <div id="student_status_collapse{{$folder->id}}" class="collapse">
                        <p class="text-center">Etudiant : <b>{{ $folder->student->lastName }}  {{ $folder->student->firstName }}</b></p>
                        {!! Form::open(['method' => 'PUT', 'route' => ['student.status', $folder->student_id]]) !!}
                          <div class="form-group">
                            <select name="status" required>
                              <option value="Boursier">Boursier</option>
                              <option value="Titre Payant">Titre Payant</option>
                              <option value="Sponsoring">Sponsoring</option>
                            </select>
                            @if ($errors->has('status'))
                              <span class="text-danger" role="alert">
                                <strong>{{ $errors->first('status') }}</strong>
                              </span>
                            @endif
                          </div><br>
                          {!! Form::submit('Assigner', ['class' => 'btn btn-primary btn-block', 'onclick' => 'return confirm(\'Vraiment attribuer ce statut ?\')']) !!}
                        {!! Form::close() !!}
                      </div>
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
    </div>
  </div>
</section>
@endsection
