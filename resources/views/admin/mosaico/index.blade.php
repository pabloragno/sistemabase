@extends('adminlte::page')

@section('title', 'SisTre')

@section('content_header')
 
@stop

@section('content')

	@include('admin.users.partials.modal_create')
	<!-- /.box-header 
  
     -->
   
	<div class="box">
    <div class="box-header">
      <h3 class="box-title">Semana 800 </h3>
      <small><b>  - 10/10/2018 al 16/10/2018 - </b></small>
      <h3 class="box-title pull-right">Total: $ 2032,45 </h3>
    </div>
     <div class="row">
            <div class="col-md-12">
              <!-- Custom Tabs -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Lun 10/10/2018<p style align="center">
                    
                  $ 450</p></a></li>
                  <li><a href="#tab_2" data-toggle="tab">Mar 11/10/2018</a></li>
                  <li><a href="#tab_3" data-toggle="tab">Mié 12/10/2018</a></li>
                  <li><a href="#tab_4" data-toggle="tab">Jue 13/10/2018</a></li>
                  <li><a href="#tab_5" data-toggle="tab">Vie 14/10/2018</a></li>
                  <li><a href="#tab_6" data-toggle="tab">Sab 15/10/2018</a></li>
                  <li><a href="#tab_7" data-toggle="tab">Dom 16/10/2018</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="box box-solid">
                          <div class="box-header with-border">
                            <h3 class="box-title">Platos</h3>
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body">
                            <div class="box-group" id="accordion">
                              <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                              <div class="panel box box-primary">
                                <div class="box-header with-border">
                                  <h4 class="box-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                      Menu Principal "A"
                                    </a>
                                  </h4>
                                  <h4 class="box-title pull-right"><b>Total: $ 33,50</b></h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                  <div class="box-body">
                                    <button type="button" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i> Agregar</button>
                                    <table class="table table-bordered">
                                      <tr>
                                        <th>Acción</th>
                                        <th>Categoria</th>
                                        <th>Receta</th>
                                        <th>Observaciones</th>
                                        <th>Precio</th>
                                      </tr>
                                      <tr>
                                        <td>                                        
                                        <button type="button" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                        </td>
                                        <td>Proteina</td>
                                        <td>Carne al horno</td>
                                        <td>Agregar mas papas </td>
                                        <td align="right">$ 13,40</td>
                                      </tr>
                                      <tr>
                                        <td>                                        
                                        <button type="button" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                        </td>
                                        <td>Salsas</td>
                                        <td>Salsa de Hongos</td>
                                        <td>Sin Observaciones</td>
                                        <td align="right">$ 10,10</td>
                                      </tr>
                                      <tr>
                                        <td>                                        
                                        <button type="button" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                        </td>
                                        <td>Guarnición</td>
                                        <td>Papas</td>
                                        <td>Cortar las papas en cuadrados</td>
                                        <td align="right">$ 10,00 </td>
                                      </tr>
                                    </table>  
                                  </div>
                                </div>
                              </div>
                              
                              <div class="panel box box-danger">
                                <div class="box-header with-border">
                                  <h4 class="box-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                      Menu Principal "A" (Sin Sal)
                                    </a>
                                  </h4>
                                  <h4 class="box-title pull-right"><b>Total: $ 33,50</b></h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                  <div class="box-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                  </div>
                                </div>
                              </div>
                              
                              <div class="panel box box-success">
                                <div class="box-header with-border">
                                  <h4 class="box-title pull-left" >
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                      Menú Principal "B"
                                    </a>
                                  </h4>
                                  <h4 class="box-title pull-right"><b>Total: $ 33,50</b></h4>

                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                  <div class="box-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                  </div>
                                </div>
                              </div>
                            
                            </div>
                          </div>
                                <!-- /.box-body -->
                       </div>
                             <!-- /.box -->
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    The European languages are members of the same family. Their separate existence is a myth.
                    For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                    in their grammar, their pronunciation and their most common words. Everyone realizes why a
                    new common language would be desirable: one could refuse to pay expensive translators. To
                    achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                    words. If several languages coalesce, the grammar of the resulting language is more simple
                    and regular than that of the individual languages.
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                    like Aldus PageMaker including versions of Lorem Ipsum.
                  </div>

                  <div class="tab-pane" id="tab_4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                    like Aldus PageMaker including versions of Lorem Ipsum.
                  </div>
                  <div class="tab-pane" id="tab_5">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                    like Aldus PageMaker including versions of Lorem Ipsum.
                  </div>
                  <div class="tab-pane" id="tab_6">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                    like Aldus PageMaker including versions of Lorem Ipsum.
                  </div>
                  <div class="tab-pane" id="tab_7">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                    like Aldus PageMaker including versions of Lorem Ipsum.
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div>
              <!-- nav-tabs-custom -->
            </div>
            <!-- /.col -->
    </div>

    
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

