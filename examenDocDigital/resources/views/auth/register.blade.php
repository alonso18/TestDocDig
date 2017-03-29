@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre completo</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>El nombre es requerido</strong>
                                    </span>
                                @endif
                                <span id="name_required" style="color:red"></span>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>El email es requerido</strong>
                                    </span>
                                @endif
                                <span id="email_required" style="color:red"></span>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('rfc') ? ' has-error' : '' }}">
                            <label for="rfc" class="col-md-4 control-label">RFC</label>

                            <div class="col-md-6">
                                <input id="rfc" type="text" class="form-control" name="rfc" value="{{ old('rfc') }}">

                                @if ($errors->has('rfc'))
                                    <span class="help-block">
                                        <strong>El rfc es requerido</strong>
                                    </span>
                                @endif
                                <span id="rfc_required" style="color:red"></span>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name_company') ? ' has-error' : '' }}">
                            <label for="name_company" class="col-md-4 control-label">Nombre de la empresa</label>

                            <div class="col-md-6">
                                <input id="name_company" type="text" class="form-control" name="name_company" value="{{ old('name_company') }}">

                                @if ($errors->has('name_company'))
                                    <span class="help-block">
                                        <strong>El nombre de la empresa es requerido</strong>
                                    </span>
                                @endif
                                <span id="name_company_required" style="color:red"></span>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>El password es requerido y con un minimo de 6 caracteres</strong>
                                    </span>
                                @endif
                                <span id="pass_required" style="color:red"></span>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password-confirm') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                 @if ($errors->has('password-confirm'))
                                    <span class="help-block">
                                        <strong>El password es requerido</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" onclick="FormValidation()">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
