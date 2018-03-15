<div class="modal modal-primary fade" id="modal-adduser">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Cargar receta</h4>
      </div>
      <div class="modal-body">
           {!! Form::open(['route' => 'users.store']) !!}
             @include('admin.mosaico.partials.form')
      </div>
      <div class="modal-footer">
        <div class="form-group">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
          {{ Form::submit('Guardar', ['class' => 'btn btn-primary pull-right']) }}
        </div>
      </div>
            {!! Form::close() !!}
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>