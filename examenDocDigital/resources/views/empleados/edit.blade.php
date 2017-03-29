@extends("layouts.app");

@section("content");
<div class="container white">
	<h1>Editar empleado</h1>
	<!--Formulario-->
	@include('empleados.form', ['empleado' => $empleado, 'url' => '/empleados/'.$empleado->id, 'method' => 'PATCH'])
</div>
@endsection