<?php namespace App\Http\Controllers;

use App\Http\Requests\ReporteBeneficiarioRequest ;
use App\Models\Solicitudes;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ReporteBeneficiarioController extends Controller
{

    protected $sub_secretaria;

    public function __construct()
    {
        $this->middleware('auth');
        $this->edo_civil = \App\Models\EdoCivil::all()->lists('descripcion', 'id');
        $this->estados = \App\Models\Estados::all()->lists('nombre', 'id');
        $this->municipios = \App\Models\Municipios::all()->lists('nombre', 'id');
        $this->parroquias = \App\Models\Parroquias::all()->lists('nombre', 'id');
        $this->ocupacion = \App\Models\Ocupacion::all()->lists('nombre', 'id');
        $this->recepcion = \App\Models\Recepcion::all()->lists('nombre', 'id') + ['' => 'SELECCIONE..'];
        $this->discapacidad = \App\Models\discapacidad::all()->lists('nombre', 'id') + ['' => 'SELECCIONE..'];
        $this->gradoDis = \App\Models\GradoDiscapacidad::where('estatus', '=', 1)->lists('nombre', 'id') + ['' => 'SELECCIONE..'];
        $this->modalidad=\App\Models\TipoAtencion::all()->lists('nombre','id')+[''=>'SELECCIONE..'];
        $this->comites = \App\Models\Comites::all()->lists('nombre', 'id');
        $this->misiones = \App\Models\Misiones::all()->lists('nombre', 'id');
        $this->vivienda = \App\Models\tipoVivienda::all()->lists('nombre', 'id');
        $this->pisos = \App\Models\tipoPisos::all()->lists('nombre', 'id');
        $this->paredes = \App\Models\tipoParedes::all()->lists('nombre', 'id');
        $this->techos = \App\Models\tipoTechos::all()->lists('nombre', 'id');
        $this->suministro_agua = \App\Models\Servicios::where('padre', '=', 1)->lists('nombre', 'id');
        $this->gas = \App\Models\Servicios::where('padre', '=', 2)->lists('nombre', 'id');
        $this->desecho = \App\Models\Servicios::where('padre', '=', 3)->lists('nombre', 'id');
        $this->agua_ser = \App\Models\Servicios::where('padre', '=', 8)->lists('nombre', 'id');
        $this->servicios = \App\Models\Servicios::where('padre', '=', null)->lists('nombre', 'id');
        $this->servicios_comunidad = \App\Models\Servicios_comunidad::all()->lists('nombre', 'id');
        $this->realidad = \App\Models\RealidadSocioeconomica::all()->lists('pregunta', 'id');
        $this->casa_comercial = \App\Models\CasaComercial::all()->lists('nombre', 'id');
        $this->sub_secretaria = \App\Models\Sub_secretaria::where('estatus', '=', 1)->lists('descripcion', 'id');
        $this->consulta_ingreso = \App\Models\consulta_ingreso::where('estatus', '=', 1)->lists('nombre', 'id');
        $this->nivel_instruccion = \App\Models\nivel_instruccion::where('estatus', '=', 1)->lists('nombre', 'id');
        $this->parentesco = \App\Models\parentesco::where('estatus', '=', 1)->lists('nombre', 'id');
        $this->anexos = \App\Models\Anexos::where('estatus', '=', 1)->lists('nombre', 'id');
        $this->atencion = \App\Models\TipoAtencion::where('estatus', 1)->lists('nombre', 'id');


    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        //dd($this->TipoSolicitud);

        return view('reporteBeneficiario')->with([
            'sub_secretaria' => $this->sub_secretaria + ['' => 'SELECCIONE..'],
            'estados' => $this->estados + ['' => 'SELECCIONE..'],
            'edoCivil' => $this->edo_civil + ['' => 'SELECCIONE..'],
            'ocupacion' => $this->ocupacion + ['' => 'SELECCIONE'],
            'gradoDiscapacidad' => $this->gradoDis,
            'tipoDiscapacidad' => $this->discapacidad,
            'recepcion' => $this->recepcion,
            'modalidad' => $this->modalidad,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(ReporteBeneficiarioRequest $r)
    {
        //dd($r->input());

       $sol= Solicitudes::Reporte($r->input())->get();

        dd($sol);




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
