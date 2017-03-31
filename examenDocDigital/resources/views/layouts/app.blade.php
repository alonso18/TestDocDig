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
    <link rel="stylesheet" type="text/css" href="../../alonso/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">
    <link href="/css/app.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="../../alonso/css/bootstrap.min.css">
<style>
    nav ul li
{
    display: inline-block;
    cursor: pointer;
    margin-right: 20px;
    color: #ffffff;

    transition: all 0.5s linear;
    -webkit-transition: all 0.5s linear;
    -moz-transition: all 0.5s linear;
    -o-transition: all 0.5s linear;
}

nav ul li:hover
{
    background-color: #ffffff;
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

 
 function ValidationFormSucursalEdit(){
    var nombreSucursal=document.getElementById('nombre_sucursal').value;

    if(nombreSucursal == ""){
        document.getElementById('nombre_sucursal').style.borderColor = "red";
        document.getElementById('sucursal_required').style.display = 'block';
        return false;
    }else{
        document.getElementById('nombre_sucursal').style.borderColor = "green";
        document.getElementById('sucursal_required').style.display = 'none';
    }
}


function ValidationFormEdit(){
    var nombreSucursal=document.getElementById('BusinessDistrictId').value;

    if(nombreSucursal == ""){
        document.getElementById('BusinessDistrictId').style.borderColor = "red";
        document.getElementById('sucursal_required').style.display = 'block';
        return false;
    }else{
        document.getElementById('BusinessDistrictId').style.borderColor = "green";
        document.getElementById('sucursal_required').style.display = 'none';
    }


    var nombre_empleado1=document.getElementById('nombre_empleado').value;
    if(nombre_empleado1 == ""){
        document.getElementById('nombre_empleado').style.borderColor = "red";
        document.getElementById('empleado_required').style.display = 'block';
        return false;
    }else{
        document.getElementById('nombre_empleado').style.borderColor = "green";
        document.getElementById('empleado_required').style.display = 'none';
    }     
}





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
                    input.id = "nombre_empleado"+i;
                    input.placeholder = "Nombre";
                    input.className = "form-control";

                    $(container)
                    .append('<br>')
                    .append('<h2>Datos del empleado</h2>')
                    .append(input)
                     .append('<span id="empleado_required'+i+'" style="color:red; display: none">*El nombre es requerido</span>');;

                    var input = document.createElement("input");
                    input.type = "text";
                    input.name = "rfc["+i+"]";
                    input.id = "rfc"+i;
                    input.placeholder = "RFC";
                    input.className = "form-control";

                    $(container)
                    .append('<br>')
                    .append(input)
                    .append('<span id="rfc_required'+i+'" style="color:red; display: none">*El RFC es requerido</span>');

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
    var container = document.getElementById("grid_employees");
    if(num_emp > 0 && num_emp <= 5)
    {
        for(var i = 1; i <= num_emp; i++)
        {
            if(++cont <= 5)
            {
                 var input = document.createElement("input");
                    input.type = "text";
                    input.name = "nombre_empleado["+i+"]";
                    input.id = "nombre_empleado"+i;
                    input.placeholder = "Nombre";
                    input.className = "form-control";

                    $(container)
                    .append('<br>')
                    .append('<h2>Datos del empleado</h2>')
                    .append(input)
                    .append('<span id="empleado_required'+i+'" style="color:red; display: none">*El nombre es requerido</span>');

                    var input = document.createElement("input");
                    input.type = "text";
                    input.name = "rfc["+i+"]";
                    input.id = "rfc"+i;
                    input.placeholder = "RFC";
                    input.className = "form-control";

                    $(container)
                    .append('<br>')
                    .append(input)
                    .append('<span id="rfc_required'+i+'" style="color:red; display: none">*El RFC es requerido</span>');

                    var input = document.createElement("input");
                    input.type = "text";
                    input.name = "puesto["+i+"]";
                    input.placeholder = "Puesto";
                    input.className = "form-control";

                    $(container)
                    .append('<br>')
                    .append(input);
                //$(container).append('<br>')
                //.append(content);
                   
                }
            }    
        }
    }
function ValidateNumber(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
    
    function ValidationFormSucursal(){
    var nombreSucursal=document.getElementById('nombre_sucursal').value;

    if(nombreSucursal == ""){
        document.getElementById('nombre_sucursal').style.borderColor = "red";
        document.getElementById('required_sucursal').style.display = 'block';
        return false;
    }else{
        document.getElementById('nombre_sucursal').style.borderColor = "green";
        document.getElementById('required_sucursal').style.display = 'none';
    }


     var num_emp = document.getElementById('IdEmp').value;

     if(num_emp >0)
    {
        if(num_emp == 1)
        {
            var nombre_empleado1=document.getElementById('nombre_empleado1').value;
            if(nombre_empleado1 == ""){
                document.getElementById('nombre_empleado1').style.borderColor = "red";
                document.getElementById('empleado_required1').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado1').style.borderColor = "green";
                document.getElementById('empleado_required1').style.display = 'none';
            }

            var rfc1=document.getElementById('rfc1').value;
            if(rfc1 == ""){
                document.getElementById('rfc1').style.borderColor = "red";
                document.getElementById('rfc_required1').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc1').style.borderColor = "green";
                document.getElementById('rfc_required1').style.display = 'none';
            }
        }
        if(num_emp == 2)
        {
            var nombre_empleado1=document.getElementById('nombre_empleado1').value;
            if(nombre_empleado1 == ""){
                document.getElementById('nombre_empleado1').style.borderColor = "red";
                document.getElementById('empleado_required1').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado1').style.borderColor = "green";
                document.getElementById('empleado_required1').style.display = 'none';
            }

            var rfc1=document.getElementById('rfc1').value;
            if(rfc1 == ""){
                document.getElementById('rfc1').style.borderColor = "red";
                document.getElementById('rfc_required1').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc1').style.borderColor = "green";
                document.getElementById('rfc_required1').style.display = 'none';
            }

            var nombre_empleado2=document.getElementById('nombre_empleado2').value;
            if(nombre_empleado2 == ""){
                document.getElementById('nombre_empleado2').style.borderColor = "red";
                document.getElementById('empleado_required2').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado2').style.borderColor = "green";
                document.getElementById('empleado_required2').style.display = 'none';
            }

            var rfc2=document.getElementById('rfc2').value;
            if(rfc2 == ""){
                document.getElementById('rfc2').style.borderColor = "red";
                document.getElementById('rfc_required2').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc2').style.borderColor = "green";
                document.getElementById('rfc_required2').style.display = 'none';
            }

        }
        if(num_emp == 3)
        {
            var nombre_empleado1=document.getElementById('nombre_empleado1').value;
            if(nombre_empleado1 == ""){
                document.getElementById('nombre_empleado1').style.borderColor = "red";
                document.getElementById('empleado_required1').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado1').style.borderColor = "green";
                document.getElementById('empleado_required1').style.display = 'none';
            }

            var rfc1=document.getElementById('rfc1').value;
            if(rfc1 == ""){
                document.getElementById('rfc1').style.borderColor = "red";
                document.getElementById('rfc_required1').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc1').style.borderColor = "green";
                document.getElementById('rfc_required1').style.display = 'none';
            }

            var nombre_empleado2=document.getElementById('nombre_empleado2').value;
            if(nombre_empleado2 == ""){
                document.getElementById('nombre_empleado2').style.borderColor = "red";
                document.getElementById('empleado_required2').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado2').style.borderColor = "green";
                document.getElementById('empleado_required2').style.display = 'none';
            }

            var rfc2=document.getElementById('rfc2').value;
            if(rfc2 == ""){
                document.getElementById('rfc2').style.borderColor = "red";
                document.getElementById('rfc_required2').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc2').style.borderColor = "green";
                document.getElementById('rfc_required2').style.display = 'none';
            }

            var nombre_empleado3=document.getElementById('nombre_empleado3').value;
            if(nombre_empleado3 == ""){
                document.getElementById('nombre_empleado3').style.borderColor = "red";
                document.getElementById('empleado_required3').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado3').style.borderColor = "green";
                document.getElementById('empleado_required3').style.display = 'none';
            }

            var rfc3=document.getElementById('rfc3').value;
            if(rfc3 == ""){
                document.getElementById('rfc3').style.borderColor = "red";
                document.getElementById('rfc_required3').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc3').style.borderColor = "green";
                document.getElementById('rfc_required3').style.display = 'none';
            }
        }
        if(num_emp == 4)
        {
            var nombre_empleado1=document.getElementById('nombre_empleado1').value;
            if(nombre_empleado1 == ""){
                document.getElementById('nombre_empleado1').style.borderColor = "red";
                document.getElementById('empleado_required1').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado1').style.borderColor = "green";
                document.getElementById('empleado_required1').style.display = 'none';
            }

            var rfc1=document.getElementById('rfc1').value;
            if(rfc1 == ""){
                document.getElementById('rfc1').style.borderColor = "red";
                document.getElementById('rfc_required1').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc1').style.borderColor = "green";
                document.getElementById('rfc_required1').style.display = 'none';
            }

            var nombre_empleado2=document.getElementById('nombre_empleado2').value;
            if(nombre_empleado2 == ""){
                document.getElementById('nombre_empleado2').style.borderColor = "red";
                document.getElementById('empleado_required2').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado2').style.borderColor = "green";
                document.getElementById('empleado_required2').style.display = 'none';
            }

            var rfc2=document.getElementById('rfc2').value;
            if(rfc2 == ""){
                document.getElementById('rfc2').style.borderColor = "red";
                document.getElementById('rfc_required2').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc2').style.borderColor = "green";
                document.getElementById('rfc_required2').style.display = 'none';
            }

            var nombre_empleado3=document.getElementById('nombre_empleado3').value;
            if(nombre_empleado3 == ""){
                document.getElementById('nombre_empleado3').style.borderColor = "red";
                document.getElementById('empleado_required3').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado3').style.borderColor = "green";
                document.getElementById('empleado_required3').style.display = 'none';
            }

            var rfc3=document.getElementById('rfc3').value;
            if(rfc3 == ""){
                document.getElementById('rfc3').style.borderColor = "red";
                document.getElementById('rfc_required3').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc3').style.borderColor = "green";
                document.getElementById('rfc_required3').style.display = 'none';
            }

            var nombre_empleado4=document.getElementById('nombre_empleado4').value;
            if(nombre_empleado4 == ""){
                document.getElementById('nombre_empleado4').style.borderColor = "red";
                document.getElementById('empleado_required4').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado4').style.borderColor = "green";
                document.getElementById('empleado_required4').style.display = 'none';
            }

            var rfc4=document.getElementById('rfc4').value;
            if(rfc4 == ""){
                document.getElementById('rfc4').style.borderColor = "red";
                document.getElementById('rfc_required4').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc4').style.borderColor = "green";
                document.getElementById('rfc_required4').style.display = 'none';
            }

        }
        if(num_emp == 5)
        {
             var nombre_empleado1=document.getElementById('nombre_empleado1').value;
            if(nombre_empleado1 == ""){
                document.getElementById('nombre_empleado1').style.borderColor = "red";
                document.getElementById('empleado_required1').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado1').style.borderColor = "green";
                document.getElementById('empleado_required1').style.display = 'none';
            }

            var rfc1=document.getElementById('rfc1').value;
            if(rfc1 == ""){
                document.getElementById('rfc1').style.borderColor = "red";
                document.getElementById('rfc_required1').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc1').style.borderColor = "green";
                document.getElementById('rfc_required1').style.display = 'none';
            }

            var nombre_empleado2=document.getElementById('nombre_empleado2').value;
            if(nombre_empleado2 == ""){
                document.getElementById('nombre_empleado2').style.borderColor = "red";
                document.getElementById('empleado_required2').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado2').style.borderColor = "green";
                document.getElementById('empleado_required2').style.display = 'none';
            }

            var rfc2=document.getElementById('rfc2').value;
            if(rfc2 == ""){
                document.getElementById('rfc2').style.borderColor = "red";
                document.getElementById('rfc_required2').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc2').style.borderColor = "green";
                document.getElementById('rfc_required2').style.display = 'none';
            }

            var nombre_empleado3=document.getElementById('nombre_empleado3').value;
            if(nombre_empleado3 == ""){
                document.getElementById('nombre_empleado3').style.borderColor = "red";
                document.getElementById('empleado_required3').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado3').style.borderColor = "green";
                document.getElementById('empleado_required3').style.display = 'none';
            }

            var rfc3=document.getElementById('rfc3').value;
            if(rfc3 == ""){
                document.getElementById('rfc3').style.borderColor = "red";
                document.getElementById('rfc_required3').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc3').style.borderColor = "green";
                document.getElementById('rfc_required3').style.display = 'none';
            }

            var nombre_empleado4=document.getElementById('nombre_empleado4').value;
            if(nombre_empleado4 == ""){
                document.getElementById('nombre_empleado4').style.borderColor = "red";
                document.getElementById('empleado_required4').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado4').style.borderColor = "green";
                document.getElementById('empleado_required4').style.display = 'none';
            }

            var rfc4=document.getElementById('rfc4').value;
            if(rfc4 == ""){
                document.getElementById('rfc4').style.borderColor = "red";
                document.getElementById('rfc_required4').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc4').style.borderColor = "green";
                document.getElementById('rfc_required4').style.display = 'none';
            }
            var nombre_empleado5=document.getElementById('nombre_empleado5').value;
            if(nombre_empleado5 == ""){
                document.getElementById('nombre_empleado5').style.borderColor = "red";
                document.getElementById('empleado_required5').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado5').style.borderColor = "green";
                document.getElementById('empleado_required5').style.display = 'none';
            }

            var rfc5=document.getElementById('rfc5').value;
            if(rfc5 == ""){
                document.getElementById('rfc5').style.borderColor = "red";
                document.getElementById('rfc_required5').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc5').style.borderColor = "green";
                document.getElementById('rfc_required5').style.display = 'none';
            }
        }
    }


    

     //var numeroExterior = document.getElementById('numero_exterior').value;
/*
    if(numeroExterior == ""){
        alert(numeroExterior);
        document.getElementById('numero_exterior').style.borderColor = "red";
        document.getElementById('sucursal_required').style.display = 'block';
        return false;
    }else{
        document.getElementById('numero_exterior').style.borderColor = "green";
        document.getElementById('sucursal_required').style.display = 'none';
    }

    var numeroInterior = document.getElementById('numero_interior').value;
    if(numeroInterior == ""){
        document.getElementById('numero_interior').style.borderColor = "red";
        document.getElementById('nombre_required').style.display = 'block';
        return false;
    }else{
        document.getElementById('numero_interior').style.borderColor = "green";
        document.getElementById('nombre_required').style.display = 'none';
    }

    var cp = document.getElementById('codigo_postal').value;
    if(cp == ""){
        document.getElementById('codigo_postal').style.borderColor = "red";
        document.getElementById('rfc_required').style.display = 'block';
        return false;
    }else{
        document.getElementById('codigo_postal').style.borderColor = "green";
        document.getElementById('rfc_required').style.display = 'none';
    }*/
}





 function ValidarForm(){
//First Name Validation /*
    var BusinessDistrictId=document.getElementById('BusinessDistrictId').value;

    if(BusinessDistrictId == ""){
        //document.getElementById('BusinessDistrictId').style.borderColor = "red";
        document.getElementById('sucursal_required').style.display = 'block';
        return false;
    }else{
        document.getElementById('BusinessDistrictId').style.borderColor = "green";
        document.getElementById('sucursal_required').style.display = 'none';
    }

    var num_emp = document.getElementById('IdEmp').value;

    if(num_emp >0)
    {
        if(num_emp == 1)
        {
            var nombre_empleado1=document.getElementById('nombre_empleado1').value;
            if(nombre_empleado1 == ""){
                document.getElementById('nombre_empleado1').style.borderColor = "red";
                document.getElementById('empleado_required1').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado1').style.borderColor = "green";
                document.getElementById('empleado_required1').style.display = 'none';
            }

            var rfc1=document.getElementById('rfc1').value;
            if(rfc1 == ""){
                document.getElementById('rfc1').style.borderColor = "red";
                document.getElementById('rfc_required1').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc1').style.borderColor = "green";
                document.getElementById('rfc_required1').style.display = 'none';
            }
        }
        if(num_emp == 2)
        {
            var nombre_empleado1=document.getElementById('nombre_empleado1').value;
            if(nombre_empleado1 == ""){
                document.getElementById('nombre_empleado1').style.borderColor = "red";
                document.getElementById('empleado_required1').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado1').style.borderColor = "green";
                document.getElementById('empleado_required1').style.display = 'none';
            }

            var rfc1=document.getElementById('rfc1').value;
            if(rfc1 == ""){
                document.getElementById('rfc1').style.borderColor = "red";
                document.getElementById('rfc_required1').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc1').style.borderColor = "green";
                document.getElementById('rfc_required1').style.display = 'none';
            }

            var nombre_empleado2=document.getElementById('nombre_empleado2').value;
            if(nombre_empleado2 == ""){
                document.getElementById('nombre_empleado2').style.borderColor = "red";
                document.getElementById('empleado_required2').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado2').style.borderColor = "green";
                document.getElementById('empleado_required2').style.display = 'none';
            }

            var rfc2=document.getElementById('rfc2').value;
            if(rfc2 == ""){
                document.getElementById('rfc2').style.borderColor = "red";
                document.getElementById('rfc_required2').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc2').style.borderColor = "green";
                document.getElementById('rfc_required2').style.display = 'none';
            }

        }
        if(num_emp == 3)
        {
            var nombre_empleado1=document.getElementById('nombre_empleado1').value;
            if(nombre_empleado1 == ""){
                document.getElementById('nombre_empleado1').style.borderColor = "red";
                document.getElementById('empleado_required1').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado1').style.borderColor = "green";
                document.getElementById('empleado_required1').style.display = 'none';
            }

            var rfc1=document.getElementById('rfc1').value;
            if(rfc1 == ""){
                document.getElementById('rfc1').style.borderColor = "red";
                document.getElementById('rfc_required1').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc1').style.borderColor = "green";
                document.getElementById('rfc_required1').style.display = 'none';
            }

            var nombre_empleado2=document.getElementById('nombre_empleado2').value;
            if(nombre_empleado2 == ""){
                document.getElementById('nombre_empleado2').style.borderColor = "red";
                document.getElementById('empleado_required2').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado2').style.borderColor = "green";
                document.getElementById('empleado_required2').style.display = 'none';
            }

            var rfc2=document.getElementById('rfc2').value;
            if(rfc2 == ""){
                document.getElementById('rfc2').style.borderColor = "red";
                document.getElementById('rfc_required2').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc2').style.borderColor = "green";
                document.getElementById('rfc_required2').style.display = 'none';
            }

            var nombre_empleado3=document.getElementById('nombre_empleado3').value;
            if(nombre_empleado3 == ""){
                document.getElementById('nombre_empleado3').style.borderColor = "red";
                document.getElementById('empleado_required3').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado3').style.borderColor = "green";
                document.getElementById('empleado_required3').style.display = 'none';
            }

            var rfc3=document.getElementById('rfc3').value;
            if(rfc3 == ""){
                document.getElementById('rfc3').style.borderColor = "red";
                document.getElementById('rfc_required3').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc3').style.borderColor = "green";
                document.getElementById('rfc_required3').style.display = 'none';
            }
        }
        if(num_emp == 4)
        {
            var nombre_empleado1=document.getElementById('nombre_empleado1').value;
            if(nombre_empleado1 == ""){
                document.getElementById('nombre_empleado1').style.borderColor = "red";
                document.getElementById('empleado_required1').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado1').style.borderColor = "green";
                document.getElementById('empleado_required1').style.display = 'none';
            }

            var rfc1=document.getElementById('rfc1').value;
            if(rfc1 == ""){
                document.getElementById('rfc1').style.borderColor = "red";
                document.getElementById('rfc_required1').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc1').style.borderColor = "green";
                document.getElementById('rfc_required1').style.display = 'none';
            }

            var nombre_empleado2=document.getElementById('nombre_empleado2').value;
            if(nombre_empleado2 == ""){
                document.getElementById('nombre_empleado2').style.borderColor = "red";
                document.getElementById('empleado_required2').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado2').style.borderColor = "green";
                document.getElementById('empleado_required2').style.display = 'none';
            }

            var rfc2=document.getElementById('rfc2').value;
            if(rfc2 == ""){
                document.getElementById('rfc2').style.borderColor = "red";
                document.getElementById('rfc_required2').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc2').style.borderColor = "green";
                document.getElementById('rfc_required2').style.display = 'none';
            }

            var nombre_empleado3=document.getElementById('nombre_empleado3').value;
            if(nombre_empleado3 == ""){
                document.getElementById('nombre_empleado3').style.borderColor = "red";
                document.getElementById('empleado_required3').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado3').style.borderColor = "green";
                document.getElementById('empleado_required3').style.display = 'none';
            }

            var rfc3=document.getElementById('rfc3').value;
            if(rfc3 == ""){
                document.getElementById('rfc3').style.borderColor = "red";
                document.getElementById('rfc_required3').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc3').style.borderColor = "green";
                document.getElementById('rfc_required3').style.display = 'none';
            }

            var nombre_empleado4=document.getElementById('nombre_empleado4').value;
            if(nombre_empleado4 == ""){
                document.getElementById('nombre_empleado4').style.borderColor = "red";
                document.getElementById('empleado_required4').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado4').style.borderColor = "green";
                document.getElementById('empleado_required4').style.display = 'none';
            }

            var rfc4=document.getElementById('rfc4').value;
            if(rfc4 == ""){
                document.getElementById('rfc4').style.borderColor = "red";
                document.getElementById('rfc_required4').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc4').style.borderColor = "green";
                document.getElementById('rfc_required4').style.display = 'none';
            }

        }
        if(num_emp == 5)
        {
             var nombre_empleado1=document.getElementById('nombre_empleado1').value;
            if(nombre_empleado1 == ""){
                document.getElementById('nombre_empleado1').style.borderColor = "red";
                document.getElementById('empleado_required1').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado1').style.borderColor = "green";
                document.getElementById('empleado_required1').style.display = 'none';
            }

            var rfc1=document.getElementById('rfc1').value;
            if(rfc1 == ""){
                document.getElementById('rfc1').style.borderColor = "red";
                document.getElementById('rfc_required1').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc1').style.borderColor = "green";
                document.getElementById('rfc_required1').style.display = 'none';
            }

            var nombre_empleado2=document.getElementById('nombre_empleado2').value;
            if(nombre_empleado2 == ""){
                document.getElementById('nombre_empleado2').style.borderColor = "red";
                document.getElementById('empleado_required2').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado2').style.borderColor = "green";
                document.getElementById('empleado_required2').style.display = 'none';
            }

            var rfc2=document.getElementById('rfc2').value;
            if(rfc2 == ""){
                document.getElementById('rfc2').style.borderColor = "red";
                document.getElementById('rfc_required2').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc2').style.borderColor = "green";
                document.getElementById('rfc_required2').style.display = 'none';
            }

            var nombre_empleado3=document.getElementById('nombre_empleado3').value;
            if(nombre_empleado3 == ""){
                document.getElementById('nombre_empleado3').style.borderColor = "red";
                document.getElementById('empleado_required3').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado3').style.borderColor = "green";
                document.getElementById('empleado_required3').style.display = 'none';
            }

            var rfc3=document.getElementById('rfc3').value;
            if(rfc3 == ""){
                document.getElementById('rfc3').style.borderColor = "red";
                document.getElementById('rfc_required3').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc3').style.borderColor = "green";
                document.getElementById('rfc_required3').style.display = 'none';
            }

            var nombre_empleado4=document.getElementById('nombre_empleado4').value;
            if(nombre_empleado4 == ""){
                document.getElementById('nombre_empleado4').style.borderColor = "red";
                document.getElementById('empleado_required4').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado4').style.borderColor = "green";
                document.getElementById('empleado_required4').style.display = 'none';
            }

            var rfc4=document.getElementById('rfc4').value;
            if(rfc4 == ""){
                document.getElementById('rfc4').style.borderColor = "red";
                document.getElementById('rfc_required4').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc4').style.borderColor = "green";
                document.getElementById('rfc_required4').style.display = 'none';
            }
            var nombre_empleado5=document.getElementById('nombre_empleado5').value;
            if(nombre_empleado5 == ""){
                document.getElementById('nombre_empleado5').style.borderColor = "red";
                document.getElementById('empleado_required5').style.display = 'block';
                return false;
            }else{
                document.getElementById('nombre_empleado5').style.borderColor = "green";
                document.getElementById('empleado_required5').style.display = 'none';
            }

            var rfc5=document.getElementById('rfc5').value;
            if(rfc5 == ""){
                document.getElementById('rfc5').style.borderColor = "red";
                document.getElementById('rfc_required5').style.display = 'block';
                return false;
            }else{
                document.getElementById('rfc5').style.borderColor = "green";
                document.getElementById('rfc_required5').style.display = 'none';
            }
        }
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
        <nav class="navbar navbar-default navbar-static-top" style="background-color: #00AAE8">
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
