@extends("layouts.app");

@section("content");
<div class="container white">
	<h1>Editar sucursal</h1>
	<!--Formulario-->
	@include('sucursales.form', ['sucursal' => $sucursal, 'url' => '/sucursales/'.$sucursal->id, 'method' => 'PATCH'])
</div>

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
		@if($empleados->count() > 0)
		@foreach ($empleados as $empleado)
			<tr>
				<td>{{ $empleado->nombre_empleado}}</td>
				<td>{{ $empleado->rfc}}</td>
				<td>{{ $empleado->puesto}}</td>
				<td>
					<a href="{{url('/empleados/'.$empleado->id.'/edit')}}">Editar</a>
				</td>
			</tr>
			@endforeach
		@else
			<h2>No hay empleados registrados</h2>
			@endif
		</tbody>
	</table>
</div>

@endsection