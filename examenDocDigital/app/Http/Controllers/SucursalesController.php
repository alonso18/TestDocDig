<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Sucursal;

use App\Empleado;

use Illuminate\Support\Facades\Auth;

class SucursalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
        $sucursales = Sucursal::where('user_id', '=', Auth::user()->id)->get();

        
        return view("sucursales.index", ["sucursales" => $sucursales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sucursal = new Sucursal;
        return view("sucursales.create", ['sucursal' => $sucursal]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sucursal = new Sucursal;

        $sucursal->nombre_sucursal = $request->nombre_sucursal;
        $sucursal->nombre_calle = $request->nombre_calle;
        $sucursal->nombre_colonia = $request->nombre_colonia;
        $sucursal->numero_exterior = $request->numero_exterior;
        $sucursal->numero_interior = $request->numero_interior;
        $sucursal->codigo_postal = $request->codigo_postal;
        $sucursal->ciudad = $request->ciudad;
        $sucursal->pais = $request->pais;
        $sucursal->user_id = Auth::user()->id;
        $numero_empleado = $request->count;

        
        
        /*
       if($bandera)
        {
            return redirect("/empleados");
        }
*/
        if($sucursal->save())
        {
            if($numero_empleado > 0)
            {
                $bandera = false;
                $cont = 1;
                $empleado = new Empleado;

                while ($cont <= $request->count) {
                    $empleado = new Empleado;
                    $empleado->nombre_empleado = $request->nombre_empleado[$cont];
                    $empleado->rfc = $request->rfc[$cont];
                    $empleado->puesto = $request->puesto[$cont];
                    $empleado->sucursal_id = $sucursal->id;
                    if($empleado->save())
                    {
                        $bandera = true;
                        $cont++;
                    }
                }
            }
            return redirect("/sucursales");
        }
        else
        {
            return view("sucursales.create");
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
         $empleados = Empleado::where('sucursal_id', '=', $id)->get();

        $sucursal = Sucursal::find($id);

        return View('sucursales.edit', array(
            'empleados' => $empleados,
            'sucursal' => $sucursal
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
        $sucursal = Sucursal::find($id);

        $sucursal->nombre_sucursal = $request->nombre_sucursal;
        $sucursal->nombre_calle = $request->nombre_calle;
        $sucursal->nombre_colonia = $request->nombre_colonia;
        $sucursal->numero_exterior = $request->numero_exterior;
        $sucursal->numero_interior = $request->numero_interior;
        $sucursal->codigo_postal = $request->codigo_postal;
        $sucursal->ciudad = $request->ciudad;
        $sucursal->pais = $request->pais;

        

        if($sucursal->save())
        {
            return redirect("/sucursales");
        }
        else
        {
            return view("sucursales.edit");
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
