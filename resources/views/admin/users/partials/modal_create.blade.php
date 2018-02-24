<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Usuario</h4>
      </div>
      <div class="modal-body">
        @include('admin.users.partials.form')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
        <div class="form-group">
      {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
      {!! Form::close() !!}
      </div>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>