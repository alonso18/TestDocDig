{!! Form::open(['url' => $url, 'method' => $method]) !!}
<div class="form-group">
		{{ Form::select('nombre_sucursal', $sucursales->nombre_sucursal , Input::old('clients')) }}
	</div>
	
	{!! Form::close() !!}