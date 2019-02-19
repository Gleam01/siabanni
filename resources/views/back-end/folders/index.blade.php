@extends('back-end.main-layout')

@section('content')
<br>
<section class="content">
  <div class="row justify-content-center">
    <div class="col-sm-10">
      <div class="card">
        <div class="card-header text-center bg-primary">
          <h3 class="card-title">Liste des dossiers en instance</h3>
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
                  @if(Auth::user()->rank === 2 && !$folder->validateByStaffLevelTwo)
                    <td>{!! link_to_route('folder.accept.staff.two', 'Valider', [$folder->id], ['class' => 'btn btn-info btn-block']) !!}</td>
                  @endif
                  @if(Auth::user()->rank === 2 && $folder->validateByStaffLevelTwo)
                    <td>{!! link_to_route('folder.reject.staff.two', 'Rejeté', [$folder->id], ['class' => 'btn btn-info btn-block']) !!}</td>
                  @endif
                  @if(Auth::user()->rank === 3 && !$folder->validateByStaffLevelThree)
                    <td>{!! link_to_route('folder.accept.staff.three', 'Valider', [$folder->id], ['class' => 'btn btn-info btn-block']) !!}</td>
                  @endif
                  @if(Auth::user()->rank === 3 && $folder->validateByStaffLevelThree)
                    <td>{!! link_to_route('folder.reject.staff.three', 'Rejeté', [$folder->id], ['class' => 'btn btn-info btn-block']) !!}</td>
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
</section>
@endsection
