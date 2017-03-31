@extends("layouts.app");

@section("content");
<div class="container white">
	<h1>Registro de empleados</h1>
	<!--Formulario-->

	<div id="form">
	@include('empleados.formCreate', ['empleado' => $empleado, 'url' => '/empleados', 'method' => 'POST'])
	</div>
</div>
@endsection