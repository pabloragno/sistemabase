	<div class="form-group">
	    {{ Form::label('categoria', 'Categoría') }}
		 <div class="input-group">
		  	 <div class="input-group-addon"><i class="fa fa-tag"></i></div>
		    {{ Form::select('categoria', ['L' => 'Large', 'S' => 'Small'], null ,['class' => 'form-control select2', 'id' => 'categoria', 'style' => 'width: 100%']) }}
		</div> 	
	</div>	
	
	<div class="form-group">
	    {{ Form::label('name', 'Receta') }}
	    <div class="input-group">
	    	<div class="input-group-addon"><i class="fa fa-cutlery"></i></div>
	    	{{ Form::select('name', ['L' => 'Large', 'S' => 'Small'],null, ['class' => 'form-control select2', 'id' => 'name' , 'style' => 'width: 100%']) }}
	    </div>	
	</div>

	<div class="form-group">
		{{ Form::label('observaciones', 'Observaciones:') }}
		<div class="input-group">
			<div class="input-group-addon"><i class="fa fa-pencil"></i></div>	
		    {{ Form::textarea('observaciones', null, ['class' => 'form-control', 'id' => 'observaciones']) }}
		</div>
	</div>


	

