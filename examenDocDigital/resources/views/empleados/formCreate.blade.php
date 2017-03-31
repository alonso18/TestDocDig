
	
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
	@if(count($errors) > 0)
		<div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif
	<div id="forma_empleados" >
	<h2>Datos del empleado</h2>
		<div class="form-group">
			<input id="nombre_empleado" type="text" class="form-control" placeholder="Nombre" name="nombre_empleado[]"/>
		</div>
		<div class="form-group">
			<input id="rfc" type="text" class="form-control" placeholder="RFC" name="rfc[]" />
		</div>
		<div class="form-group">
			<input id="puesto" type="text" class="form-control" placeholder="Puesto" name="puesto[]"/>
		</div>
	</div>
	<div class="form-group"><div id="grid_employees" ></div>
	<div id="SaveGrid" class="form-group text-right" >
		<a href="{{url('/sucursales')}}">Regresar al inicio</a>
		<input type="submit" value="Enviar" class="btn btn-success">
	</div>
	{!! Form::close() !!}



    