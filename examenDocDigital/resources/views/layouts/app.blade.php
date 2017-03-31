<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DocDigitales</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">
    <link href="/css/app.css" rel="stylesheet">
<style>
    nav ul li
{
    display: inline-block;
    cursor: pointer;
    margin-right: 20px;
    color: #1d1d1d;

    transition: all 0.5s linear;
    -webkit-transition: all 0.5s linear;
    -moz-transition: all 0.5s linear;
    -o-transition: all 0.5s linear;
}

nav ul li:hover
{
    background-color: #1d1d1d;
    color: #ffffff;
    border-radius: 5px;
    padding: 5px;
}

nav ul li a
{
    text-decoration: none;
}
</style>
    <!-- Scripts -->
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
<script>
 var cont = 0;

function llenarFormasEmpleadoSucursal() {
    var num_emp = document.getElementById('IdEmp').value;
    if(num_emp == ""){
        document.getElementById('IdEmp').style.borderColor = "red";
        return false;
    }
    else
    {
        document.getElementById('IdEmp').style.borderColor = "green";
        var container = document.getElementById("grid_employees");
        //var grid = document.getElementById("forma_empleados");
        //var content=grid.innerHTML;
        if(num_emp > 0 && num_emp <= 5)
        {
            for(var i = 1; i <= num_emp; i++)
            {
                if(++cont <= 5)
                {
                    //container.appendChild(document.createTextNode("Member " + (i+1)));
                    // Create an <input> element, set its type and name attributes
                    var input = document.createElement("input");
                    input.type = "text";
                    input.name = "nombre_empleado["+i+"]";
                    input.placeholder = "Nombre";
                    input.className = "form-control";

                    $(container)
                    .append('<br>')
                    .append('<h2>Datos del empleado</h2>')
                    .append(input);

                    var input = document.createElement("input");
                    input.type = "text";
                    input.name = "rfc["+i+"]";
                    input.placeholder = "RFC";
                    input.className = "form-control";

                    $(container)
                    .append('<br>')
                    .append(input);

                    var input = document.createElement("input");
                    input.type = "text";
                    input.name = "puesto["+i+"]";
                    input.placeholder = "Puesto";
                    input.className = "form-control";

                    $(container)
                    .append('<br>')
                    .append(input);
                   
                }
            }    
        }
    }
}






function llenarFormasEmpleado() {
    var num_emp = document.getElementById('IdEmp').value;
    if(num_emp == ""){
        document.getElementById('IdEmp').style.borderColor = "red";
        return false;
    }
    else
    {
        document.getElementById('IdEmp').style.borderColor = "green";
        var container = document.getElementById("grid_employees");
        var grid = document.getElementById("forma_empleados");
        var content=grid.innerHTML;
        if(num_emp > 0 && num_emp <= 4)
        {
            for(var i = 1; i <= num_emp; i++)
            {
                if(++cont <= 4)
                {
                    $(container).append('<br>')
                    .append(content);
                   
                }
            }    
        }
    }
}


 function FormValidation(){
//First Name Validation /*
    
    var fn=document.getElementById('nombre_empleado').value;
    alert(fn);
    if(fn == ""){
        alert('Please Enter First Name');
        document.getElementById('nombre_empleado').style.borderColor = "red";
        return false;
    }else{
        document.getElementById('nombre_empleado').style.borderColor = "green";
    }
/*
var rfc=document.getElementById('rfc').value;
if(rfc == ""){
        alert('Please Enter First Name');
        document.getElementById('rfc').style.borderColor = "red";
        return false;
    }else{
        document.getElementById('rfc').style.borderColor = "green";
    }

var puesto =document.getElementById('puesto').value;
if(puesto == ""){
        alert('Please Enter First Name');
        document.getElementById('puesto').style.borderColor = "red";
        return false;
    }else{
        document.getElementById('puesto').style.borderColor = "green";
    }



    /*
    if (/^[0-9]+$/.test(document.getElementById("firstname").value)) {
        alert("First Name Contains Numbers!");
        document.getElementById('firstname').style.borderColor = "red";
        return false;
    }else{
        document.getElementById('firstname').style.borderColor = "green";
    }
    if(fn.length <=2){
        alert('Your Name is To Short');
        document.getElementById('firstname').style.borderColor = "red";
        return false;
    }else{
        document.getElementById('firstname').style.borderColor = "green";
    }*/
}





// just for the demos, avoids form submit
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$('#form').validate({
  rules: {
    field: {
      required: true
    }
  }
});

        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="">
                        Documentos Digitales
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Iniciar Sesión</a></li>
                            <li><a href="{{ url('/register') }}">Registro</a></li>
                        @else
                            <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script
  src="http://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>

     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>

    <script>
        $.material.init();
    </script>
    <script src="/js/app.js"></script>
</body>
</html>
