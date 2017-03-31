<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\EmpleadoRequest;

use App\Empleado;

use App\Sucursal;

use Illuminate\Support\Facades\Auth;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sucursal = Sucursal::where('user_id', '=', Auth::user()->id)->get();
       $empleados = Empleado::all();

        return View('empleados.index', array(
            'empleados' => $empleados,
            'sucursal' => $sucursal
            ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $sucursales = Sucursal::where('user_id', '=', Auth::user()->id)->get();

        $empleado = new Empleado;

        return View('empleados.create', array(
            'empleado' => $empleado,
            'sucursales' => $sucursales
            ));
        //$view = view("empleados.create", ['empleado' => $empleado]);

        //$view = View('empleados.create', array('sucursales' => $sucursales));
        //$view = view("empleados.sucursalName", ['sucursales' => $sucursales]);

        //return $view;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //$tracks = $request->json()->all();
        //dd($request->all());
        $bandera = false;
        $cont = 0;
        $empleado = new Empleado;

        while ($cont <= $request->count) {
            $empleado = new Empleado;
            $empleado->nombre_empleado = $request->nombre_empleado[$cont];
            $empleado->rfc = $request->rfc[$cont];
            $empleado->puesto = $request->puesto[$cont];
            $empleado->sucursal_id = $request->get('BusinessDistrictId');
            if($empleado->save())
            {
                $bandera = true;
                $cont++;
            }
            else
                return view("empleados.create");
        }
       if($bandera)
        {
            return redirect("/empleados");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empleado = Empleado::find($id);

        $sucursales = Sucursal::where('id', '=', $empleado->sucursal_id)->get();


        return View('empleados.edit', array(
            'empleado' => $empleado,
            'sucursales' => $sucursales
            ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $empleado = Empleado::find($id);

        $empleado->nombre_empleado = $request->nombre_empleado;
        $empleado->rfc = $request->rfc;
        $empleado->puesto = $request->puesto;

        if($empleado->save())
        {
            return redirect("/empleados");
        }
        else
        {
            return view("empleados.edit");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
