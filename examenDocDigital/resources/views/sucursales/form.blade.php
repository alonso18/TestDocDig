{!! Form::open(['url' => $url, 'method' => $method]) !!}

	<div class="form-group">
		<input type="text" id="nombre_sucursal" name="nombre_sucursal" class="form-control" placeholder="Sucursal"/>
		<span id="required_sucursal" style="display: none; color: red">*Nombre sucursal requerido</span>
	</div>
	<div class="form-group">
		<input type="text" id="nombre_calle" name="nombre_calle" class="form-control" placeholder="Calle"/>
	</div>
	<div class="form-group">
		<input type="text" id="nombre_colonia" name="nombre_colonia" class="form-control" placeholder="Colonia"/>
	</div>
	<div class="form-group">
		<input type="text" id="numero_exterior" name="numero_exterior" class="form-control" placeholder="Numero exterior" onkeypress='return ValidateNumber(event)'/>
		<div id="num_validate"></div>
	</div>
	<div class="form-group">
		<input type="number" id="numero_interior" name="numero_interior" class="form-control" placeholder="Numero interior" onkeypress='return ValidateNumber(event)'/>
	</div>
	<div class="form-group">
		<input type="number" id="codigo_postal" name="codigo_postal" class="form-control" placeholder="Código Postal" onkeypress='return ValidateNumber(event)'/>
	</div>
	<div class="form-group">
		<input type="text" id="ciudad" name="ciudad" class="form-control" placeholder="Ciudad"/>
	</div>
	<div class="form-group">
		<input type="text" id="pais" name="pais" class="form-control" placeholder="País"/>
	</div>
	
	<div class="form-group">
		<input id="IdEmp" type="number" class="form-control" placeholder="Empleados a registrar" name="count"/>
	</div>
	 <div class="form-group text-right">
		<input type="button" class="btn btn-warning" value="Agregar" onclick="llenarFormasEmpleadoSucursal();"/>
	</div>
	<div id="grid_employees" >
		
	</div>


	<br>
	<div class="form-group text-right">
		<a href="{{url('/sucursales')}}">Regresar al inicio</a>
		<input type="submit" value="Enviar" class="btn btn-success" onclick="return ValidationFormSucursal();">
	</div>
	{!! Form::close() !!}

	