{!! Form::open(['route' => 'users.store']) !!}

	<div class="form-group">
	    {{ Form::label('name', 'Nombre del usuario') }}
	    <div class="input-group">
	    	<div class="input-group-addon"><i class="fa fa-user"></i></div>
	    	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
	    </div>	
	</div>

	<div class="form-group">
		{{ Form::label('email', 'Email:') }}
		<div class="input-group">
			<div class="input-group-addon">@</div>	
		    {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('password', 'Contraseña:') }}
		<div class="input-group">
			<div class="input-group-addon">@</div>	
		    {{ Form::text('password', null, ['class' => 'form-control', 'id' => 'pass']) }}
		</div>
	</div>
	

