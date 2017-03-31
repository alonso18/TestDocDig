@extends("layouts.app");

@section("content");
<div class="container white">
	<h1>Nueva Sucursal</h1>
	<!--Formulario-->
	<div id="form">
	@include('sucursales.form', ['sucursal' => $sucursal, 'url' => '/sucursales', 'method' => 'POST'])
	</div>
	
</div>
@endsection