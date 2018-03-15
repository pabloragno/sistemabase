@extends('adminlte::page')

@section('title', 'SisTre')

@section('content_header')
 
@stop

@section('content')

	@include('admin.users.partials.modal_create')
  @include('admin.users.partials.modal_edit')
   
	<div class="box">
    <div class="box-header">
      <h3 class="box-title">Listado de usuarios del sistema</h3>
      <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-adduser"><i class="fa fa-user-plus"></i>
      </button>
    </div>
     <!-- /.box-header -->
    <div class="box-body">
      <table id="users" class="table table-bordered table-striped">
        <thead>
          <th>ID</th>
          <th>Nombre</th>
          <th>Mail</th>
          <th>Acción</th>	
        </thead>
        <tbody>
        </tbody>  
      </table>
    </div>
        <!-- /.box-body -->
  </div>
     
@stop

@section('js')
   <script>
   	function my(id){
   		var $url = "users/"+id+"/edit";
   		console.log($url);
   		$.ajax({
   			url: $url, 
   			success: function(result){
            	console.log(result);
        }});
   		
   	}
   	
	$(function () {
	    $('#users').DataTable({
	      	'paging'      : true,
	      	'lengthChange': true,
	      	'searching'   : true,
	     	'ordering'    : true,
	      	'info'        : true,
	      	'processing'  : true,
	      	'serverSide'  : true,
	      	'language'    : {
	    					'url' : '{{ asset ('dataTable_traduc/es_data.lang') }}'
		  					},
		  	'ajax'      : 'getUsers',
		  	'columns'   : [
			    {data: 'id', name: 'id'},
		        {data: 'name', name: 'name'},
		        {data: 'email', name: 'email'},
	            {data: 'action', name: 'action', orderable: false, searchable: false}
	        ]
	    })
	})
	
		
	  
</script>
@stop

