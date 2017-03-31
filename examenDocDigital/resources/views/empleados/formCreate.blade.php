
	
	{!! Form::open(['url' => $url, 'method' => $method]) !!}
	<div class="form-group">
		<select id="BusinessDistrictId" name="BusinessDistrictId" class="form-control">
            <option value="" disabled selected>Selecciona una sucursal</option>
            @foreach ($sucursales as $sucursal)
                <option value="{{$sucursal->id}}">{{$sucursal->nombre_sucursal}}</option>
            @endforeach
        </select><span id="sucursal_required" style="color: red; display: none">*La sucursal es requerida</span>
    </div>
	<div class="form-group">
		<input id="IdEmp" type="number" class="form-control" placeholder="Empleados a registrar" name="count"/>
	</div>
	 <div class="form-group text-right">
		<input type="button" class="btn btn-warning" value="Agregar" onclick="llenarFormasEmpleado();"/>
	</div>
	<div id="grid_employees" ></div>
	<div id="SaveGrid" class="form-group text-right" >
		<a href="{{url('/sucursales')}}">Regresar al inicio</a>
		<input type="submit" value="Enviar" class="btn btn-success" onclick="return ValidarForm();">
	</div>
	{!! Form::close() !!}

	