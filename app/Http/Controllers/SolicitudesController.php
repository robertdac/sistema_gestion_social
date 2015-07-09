<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class SolicitudesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        if (Input::get('cedula')) {

            $ci = intval(Input::get('cedula'));
            $data = \App\Models\Saime::datos("'V'", $ci);
            $datos = explode(",", $data[0]->buscar_diex);
            $edo_civil = \App\Models\EdoCivil::all_edo_civil();
            $estados = \App\Models\Estados::all()->lists('nombre', 'id');
            array_unshift($estados, 'Seleccione un Estado');
            $ocupacion = \App\Models\Ocupacion::ocupacion();
            $recepcion = \App\Models\Recepcion::recepcion();
            $discapacidad = \App\Models\discapacidad::all()->lists('nombre', 'id');
            $comites = \App\Models\Comites::all()->lists('nombre', 'id');
            $misiones = \App\Models\Misiones::all()->lists('nombre', 'id');
            array_unshift($discapacidad, 'SELECCIONE...');

            return view('solicitudes.solicitud', [
                'datos' => $datos,
                'EdoCivil' => $edo_civil,
                'estados' => $estados,
                'ocupacion' => $ocupacion,
                'recepcion' => $recepcion,
                'discapacidad' => $discapacidad,
                'comites' => $comites,
                'misiones' => $misiones
            ]);

        }


        //$menu = opciones_perfiles::menu();
        return view('solicitudes.nueva_solicitud');

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
