@extends('back-end.main-layout')

@section('content')
<section class="content">
  <div class="row justify-content-center">
    <div class="alert-success hidden">
      <p>Successfully add staff</p>
      <h4>Staff password : </h4>
    </div>

    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#add_staff">Ajouter un staff</button>

    <div id="add_staff" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center text-primary">Formulaire d'ajout d'un staff</h4>
          </div>
          <div class="modal-body">
            <form id="add_staff_form" action="{{ url('/registerstaff') }}" method="POST">
              {!! csrf_field() !!}

              <div class="form-group">
                <label for="login">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="login" name="login">
                <small class="help-block"></small>
              </div>
              <div class="form-group">
                <label for="email">Adresse e-mail</label>
                <input type="email" class="form-control" id="email" name="email" >
                <small class="help-block"></small>
              </div>
              <div class="form-group">
                <label for="lastName">Nom</label>
                <input type="text" class="form-control" id="lastName" name="lastName" >
                <small class="help-block"></small>
              </div>
              <div class="form-group">
                <label for="firstName">Prénom</label>
                <input type="text" class="form-control" id="firstName" name="firstName" >
                <small class="help-block"></small>
            </div>
              <div class="form-group">
                <label for="phone">Téléphone</label>
                <input type="tel" class="form-control" id="phone" name="phone">
                <small class="help-block"></small>
              </div>
              <div class="form-group">
                <label for="office">Poste</label>
                <input type="text" class="form-control" id="office" name="office" >
                <small class="help-block"></small>
              </div>
              <div class="form-group">
                <label for="school">Entité</label>
                <select class="form-control" name="school_id" id="school">
                  <option value="1">ENSPD</option>
                  <option value="2">EPAC</option>
                </select>
              </div>
              <div class="form-group">
                <label for="rank">Autorité</label>
                <select class="form-control" name="rank" id="rank">
                  <option value="1">Niveau 1</option>
                  <option value="2">Niveau 2</option>
                  <option value="3">Niveau 3</option>
                </select>
              </div>
              <button type="submit" id="add_staff_submit" class="pull-left btn btn-primary" style="margin: 5px;">Ajouter</button>
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
@stop

@section('scripts')
<script>
$(function(){
    $('#add_staff_submit').click(function(e) {
      e.preventDefault();
      $('input+small').text('');
      $('input').parent().removeClass('has-error');

      $.ajax({
        type: $('#add_staff_form').attr('method'),
        url: $('#add_staff_form').attr('action'),
        data: $('#add_staff_form').serialize(),
        dataType: "json",
        success: function(data) {
          $('.alert-success').removeClass('hidden');
          $('#add_staff').modal('hide');
          $('.alert-success p').text(data.status);
          $('.alert-success h4').text(data.password);
        },
        error: function(data) {
          $.each(data.responseJSON, function (key, value) {
            var input = '#add_staff_form input[name=' + key + ']';
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
