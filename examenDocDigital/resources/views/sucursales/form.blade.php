{!! Form::open(['url' => $url, 'method' => $method]) !!}

	<div class="form-group">
		{{ Form::text('nombre_sucursal', $sucursal->nombre_sucursal, array('class' => 'form-control', 'required' => '', 'placeholder'=>'Sucursal')) }}
	</div>
	<div class="form-group">
		{{ Form::text('nombre_calle', $sucursal->nombre_calle, array('class' => 'form-control', 'required' => '', 'placeholder'=>'Calle')) }}
	</div>
	<div class="form-group">
		{{ Form::text('nombre_colonia', $sucursal->nombre_colonia, array('class' => 'form-control', 'required' => '', 'placeholder'=>'Colonia')) }}
	</div>
	<div class="form-group">
		{{ Form::number('numero_exterior', $sucursal->numero_exterior, array('class' => 'form-control', 'required' => '', 'placeholder'=>'Numero exterior')) }}
	</div>
	<div class="form-group">
		{{ Form::number('numero_interior', $sucursal->numero_interior, array('class' => 'form-control', 'required' => '', 'placeholder'=>'Numero interior')) }}
	</div>
	<div class="form-group">
		{{ Form::number('codigo_postal', $sucursal->codigo_postal, array('class' => 'form-control', 'required' => '', 'placeholder'=>'C.P.')) }}
	</div>
	<div class="form-group">
		{{ Form::text('ciudad', $sucursal->ciudad, array('class' => 'form-control', 'required' => '', 'placeholder'=>'Ciudad')) }}
	</div>
	<div class="form-group">
		{{ Form::text('pais', $sucursal->pais, array('class' => 'form-control', 'required' => '', 'placeholder'=>'Pais')) }}
	</div>
	<div class="form-group text-right">
		<a href="{{url('/sucursales')}}">Regresar al inicio</a>
		<input type="submit" value="Enviar" class="btn btn-success">
	</div>
	{!! Form::close() !!}