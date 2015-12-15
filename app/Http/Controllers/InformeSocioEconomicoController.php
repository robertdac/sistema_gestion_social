<?php namespace App\Http\Controllers;

use App\Http\Requests;

class InformeSocioEconomicoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
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

        $socioD = \App\Models\SocioDemografico::where('id_solicitud', '=', $id)->get();

        $socio['vivienda'] = \App\Models\tipoVivienda::find(unserialize($socioD[0]['id_viviendas']));
        $socio['paredes'] = \App\Models\tipoParedes::find(unserialize($socioD[0]['id_paredes']));
        $socio['pisos'] = \App\Models\tipoPisos::find(unserialize($socioD[0]['id_pisos']));
        $socio['techos'] = \App\Models\tipoTechos::find(unserialize($socioD[0]['id_techos']));
        $socio['agua'] = \App\Models\Servicios::find(unserialize($socioD[0]['id_agua']));
        $socio['gas'] = \App\Models\Servicios::find(unserialize($socioD[0]['id_gas']));
        $socio['basura'] = \App\Models\Servicios::find(unserialize($socioD[0]['id_basura']));
        $socio['aguaServida'] = \App\Models\Servicios::find(unserialize($socioD[0]['id_agua_servida']));
        $socio['comunidad'] = \App\Models\Servicios_comunidad::find(unserialize($socioD[0]['id_comunidad']));
        $socio['comite'] = \App\Models\Comites::find(unserialize($socioD[0]['id_comite']));
        $socio['misiones'] = \App\Models\Misiones::find(unserialize($socioD[0]['id_misiones']));

        $informe = \App\Models\Solicitudes::with(
            'egresos_grupo',
            'beneficiario.estado',
            'beneficiario.ocupacion',
            'beneficiario.municipio',
            'beneficiario.parroquia',
            'beneficiario.edoCivil',
            'solicitante.estado',
            'solicitante.ocupacion',
            'solicitante.municipio',
            'solicitante.parroquia',
            'solicitante.edoCivil',
            'ingresos_grupo.parentesco',
            'ingresos_grupo.ocupacion',
            'ingresos_grupo.consulta_ingresos',
            'ingresos_grupo.nivel_instruccion',
            'socio_demografico')
            ->get();




        //dd($informe[0]->beneficiario->nacionalidad);

        return view('informe_socioeconomico.informe', ['informe' => $informe,'socio'=>$socio]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {


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
