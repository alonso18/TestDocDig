@extends("layouts.app");

@section("content");
<div class="big-padding text-center blue-grey white-text">
	<h1>Empleados</h1>
</div>
<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
				<td>Nombre</td>
				<td>RFC</td>
				<td>Puesto</td>
				<td>Acciones</td>
			</tr>
		</thead>
		<tbody>
		@foreach($sucursal as $sucursa)
			@foreach ($empleados as $empleado)
			@if($sucursa->id == $empleado->sucursal_id)
			<tr>
				<td>{{ $empleado->nombre_empleado}}</td>
				<td>{{ $empleado->rfc}}</td>
				<td>{{ $empleado->puesto}}</td>
				<td>
					<a href="{{url('/empleados/'.$empleado->id.'/edit')}}">Editar</a>
				</td>
			</tr>
			@endif
			@endforeach
			@endforeach
		</tbody>
	</table>
</div>
<div class="form-group text-right" style="margin-right: 100px;">
		<a href="{{url('/sucursales')}}">Regresar al inicio</a>
	</div>
@endsection