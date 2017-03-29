{!! Form::open(['url' => $url, 'method' => $method]) !!}
<div class="form-group">
	<select id="BusinessDistrictId" name="BusinessDistrictId" class="form-control" required="required">
            @foreach ($sucursales as $sucursal)
                <option value="{{$sucursal->id}}">{{$sucursal->nombre_sucursal}}</option>
            @endforeach
            </select>
            </div>
	<div class="form-group">
		{{ Form::text('nombre_empleado', $empleado->nombre_empleado, array('class' => 'form-control', 'required' => '', 'placeholder'=>'Nombre')) }}
	</div>
	<div class="form-group">
		{{ Form::text('rfc', $empleado->rfc, ['class' => 'form-control', 'readonly' => 'true',
		'placeholder'=>'RFC']) }}
	</div>
	<div class="form-group">
		{{ Form::text('puesto', $empleado->puesto, array('class' => 'form-control', 'required' => '', 'placeholder'=>'Puesto')) }}
	</div>
	<div class="form-group text-right">
		<a href="{{url('/sucursales')}}">Regresar al inicio</a>
		<input type="submit" value="Enviar" class="btn btn-success">
	</div>
	{!! Form::close() !!}