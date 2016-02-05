<?php namespace App\Http\Controllers;

use App\Http\Requests;
use \App\Http\Requests\FiltroRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\View;
use Request;
use DB;


class FiltroController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        return View('solicitudes.filtro');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(FiltroRequest $request)
    {
        $cedula = trim($request->input('cedula'));

        $epa = DB::table('personas')
            ->join('solicitudes', 'personas.id', '=', 'solicitudes.id_beneficiario')
            ->join('usuarios_solicitudes', 'solicitudes.id', '=', 'usuarios_solicitudes.id_solicitud')
            ->where('personas.cedula', $cedula)
            ->orderBy('usuarios_solicitudes.estatus', 'desc')
            ->get();




        if (count($epa) > 0) {
            if ($epa[0]->estatus == 1 || $epa[0]->estatus == 2) {

            } else {

                $hoy = Carbon::now();
                //agregamos 6 meses mas
                $fecha_aprobada = Carbon::parse($epa[0]->fecha_registro)->addMonth(6);
                //comprueba si la primera fecha es mayor a la segunda fecha.
                $fecha = $hoy->gt($fecha_aprobada);

                if ($fecha == true) {
                    $ci = Crypt::encrypt($cedula);
                    return redirect('solicitudes/' . $ci);

                } else {
                    //dd(Redirect::action('SolicitudesController@show',$epa[0]->id));
                    //return redirect()->route('fichas',[$epa[0]->id]);
                    return Redirect::action('SolicitudesController@show',$epa[0]->id);

                }

            }


        }

        $ci = Crypt::encrypt($cedula);

        return redirect('solicitudes/' . $ci);


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
