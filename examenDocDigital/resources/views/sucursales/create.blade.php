@extends("layouts.app");

@section("content");
<div class="container white">
	<h1>Nueva Sucursal</h1>
	<!--Formulario-->
	@include('sucursales.form', ['sucursal' => $sucursal, 'url' => '/sucursales', 'method' => 'POST'])
</div>
@endsection