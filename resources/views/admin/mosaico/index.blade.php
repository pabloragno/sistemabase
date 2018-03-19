@extends('adminlte::page')

@section('title', 'SisTre')

@section('content_header')
 
@stop

@section('content')

	@include('admin.mosaico.partials.modal_create')

 
	<div class="box">
    <div class="box-header">
      <h3 class="box-title">Semana {{ $semana->numero }} </h3>
      <small><b>  - {{ $semana->desde->format('l d \\ F Y') }} --  al  -- {{ $semana->hasta->format('l d \\ F Y') }} - </b></small>
      <h3 class="box-title pull-right">Total: $ 2032,45 </h3>
    </div>
     <div class="row">
            <div class="col-md-12">
              <!-- Custom Tabs -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  @for($i = 1; $i < 8; $i++)
                    @if($i == 1)
                      <li class="active">
                        <a href="#tab_1" data-toggle="tab">
                          <p style align="center"><b>{{ $semana->desde->format('l') }}</b></p>
                          <p style align="center">{{ $semana->desde->format('d/m/Y') }}</p>
                          <p style align="center">$ 450</p>
                        </a>
                      </li>
                    @else
                      <li>
                        <a href="{{ "#tab_".$i}}" data-toggle="tab">
                          <p style align="center"><b>{{ $semana->desde->addDay($i-1)->format('l') }}</b></p>
                          <p style align="center">{{ $semana->desde->addDay($i-1)->format('d/m/Y') }}</p>
                          <p style align="center">$ 450</p>
                        </a>
                      </li>
                    @endif
                  @endfor
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
                              @foreach($platos as $plato)
                                <div class="panel box box-info">
                                  <div class="box-header with-border">
                                    <h4 class="box-title">
                                      <a data-toggle="collapse" data-parent="#accordion" href="#{{ "collapse".$plato->codigo }}" id="{{ $plato->codigo }}">
                                        ( Cod:{{ $plato->codigo }}) - {{ $plato->name }} 
                                      </a>
                                    </h4>
                                    <h4 class="box-title pull-right"><b>Total: $ 33,50</b></h4>
                                  </div>
                                  <div id="{{ "collapse".$plato->codigo }}" class="panel-collapse collapse"
                                  ></div>
                                </div>
                              @endforeach()
                                                          
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
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
    })
    
    $('.tab-content').click(function(e){
      var idaccordion = e.target.id;
      
      if (idaccordion != ""){
        tablasDicamicas(idaccordion);  
      }
    })
    
    function contenidoDivs($cont, $idaccor){
      $('#collapse'+$idaccor).empty();
      $('#collapse'+$idaccor).append($cont);
    }

    function tablasDicamicas($id){
      $.ajax({
        url: 'getUsers', 
        success: function(result){
        //console.log(result.data[0].name);
        var fila = "<div class='box-body'><table id='t"+$id+"' class='table table-bordered table-striped'><thead><th>ID</th><th>Nombre</th><th>Mail</th><th>Acción</th></thead><tbody>";
        
        $('#collapse'+$id).append(
          $.each(result.data, function(i, item) {
            fila = fila + "<tr><td>"+result.data[i].id+"</td><td>"+result.data[i].name+"</td><td>"+result.data[i].email+"</td><td><button type='button' class='btn btn-sm btn-info'><i class='fa fa-pencil'></i></button><button type='button' class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></button></td></tr>"
          }))
          fila = fila + "</tbody></table></div></div>";            
          contenidoDivs(fila, $id);
      }});
    }
  </script>
@stop

