

	{!! Form::open(['url' => $url, 'method' => $method]) !!}
	<div class="form-group">
		<select id="BusinessDistrictId" name="BusinessDistrictId" class="form-control" required="required">
            <option value="" disabled selected>Selecciona una sucursal</option>
            @foreach ($sucursales as $sucursal)
                <option value="{{$sucursal->id}}">{{$sucursal->nombre_sucursal}}</option>
            @endforeach
        </select>
    </div>
	<div class="form-group">
		<input id="IdEmp" type="number" class="form-control" placeholder="Empleados a registrar" name="count"/>
	</div>
	 <div class="form-group text-right">
		<input type="button" class="btn btn-success" value="Agregar" onclick="llenarFormasEmpleado();"/>
	</div>
	<div id="forma_empleados" >
	<h2>Datos del empleado</h2>
		<div class="form-group">
			<input id="nombre_empleado" type="text" class="form-control" placeholder="Nombre" name="nombre_empleado[]" required="required" />
		</div>
		<div class="form-group">
			<input id="rfc" type="text" class="form-control" placeholder="RFC" name="rfc[]" required="required" />
		</div>
		<div class="form-group">
			<input id="puesto" type="text" class="form-control" placeholder="Puesto" name="puesto[]" required="required" />
		</div>
	</div>
	<div class="form-group"><div id="grid_employees" ></div>
	<div id="SaveGrid" class="form-group text-right" >
		<a href="{{url('/sucursales')}}">Regresar al inicio</a>
		<input type="submit" value="Enviar" class="btn btn-success" onclick="ShowInput()">
	</div>
	{!! Form::close() !!}



    