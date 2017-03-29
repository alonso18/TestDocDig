@extends("layouts.app");
@section("content");
<div class="big-padding text-center blue-grey white-text">
	<h1>Sucursales</h1>
</div>
<div class="container">
<nav>
<ul>
	<li><a href="{{url('/sucursales/create')}}">Registrar Sucursal</a></li>
	<li><a href="{{url('/empleados/create')}}">Registrar Empleados de la Sucursal</a></li>
</ul>
</nav>
	<table class="table table-bordered">
		<thead>
			<tr>
				<td>Nombre sucursal</td>
				<td>Nombre calle</td>
				<td>Nombre colonia</td>
				<td>Numero exterior</td>
				<td>Numero interior</td>
				<td>Codigo postal</td>
				<td>Ciudad</td>
				<td>Pais</td>
				<td>Numero de empleados</td>
				<td>Acciones</td>
			</tr>
		</thead>
		<tbody>
		@if($sucursales->count() > 0)
			@foreach ($sucursales as $sucursal)
			<tr>
				<td>{{ $sucursal->nombre_sucursal}}</td>
				<td>{{ $sucursal->nombre_calle}}</td>
				<td>{{ $sucursal->nombre_colonia}}</td>
				<td>{{ $sucursal->numero_exterior}}</td>
				<td>{{ $sucursal->numero_interior}}</td>
				<td>{{ $sucursal->codigo_postal}}</td>
				<td>{{ $sucursal->ciudad}}</td>
				<td>{{ $sucursal->pais}}</td>
				<td>{{ $counter = App\Empleado::where('sucursal_id', '=', $sucursal->id)->get()->count()}}</td>
				
				<td>
					<a href="{{url('/sucursales/'.$sucursal->id.'/edit')}}">Editar</a>
				</td>
			</tr>
			@endforeach
			@else
			<h2>No hay sucursales registradas</h2>
			@endif
		</tbody>

	</table>
</div>
@endsection