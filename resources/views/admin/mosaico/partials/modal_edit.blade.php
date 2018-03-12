<div class="modal modal-primary fade" id="modal-edituser">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Usuario</h4>
      </div>
     
        <div class="modal-body">
          @if(isset($user))
          {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}
          @include('admin.users.partials.form')
          {{ Form::submit('Editar', ['class' => 'btn btn-primary pull-right']) }}
        </div>
         @endif
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
          <div class="form-group">
           
          </div>
        </div>
      {!! Form::close() !!}
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>