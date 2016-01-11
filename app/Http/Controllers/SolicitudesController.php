<?php namespace App\Http\Controllers;

use App\Http\Requests\SolicitudesRequest;
use App\Models\Solicitudes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;

class SolicitudesController extends Controller
{
    protected $edo_civil;
    protected $estados;
    protected $ocupacion;
    protected $recepcion;
    protected $discapacidad;
    protected $gradoDis;
    protected $comites;
    protected $misiones;
    protected $vivienda;
    protected $pisos;
    protected $paredes;
    protected $techos;
    protected $suministro_agua;
    protected $gas;
    protected $desecho;
    protected $agua_ser;
    protected $servicios;
    protected $servicios_comunidad;
    protected $realidad;
    protected $casa_comercial;
    protected $sub_secretaria;
    protected $consulta_ingreso;
    protected $nivel_instruccion;
    protected $parentesco;
    protected $anexos;
    protected $municipios;
    protected $parroquias;


    public function __construct()
    {
        $this->middleware('auth');
        $this->edo_civil = \App\Models\EdoCivil::all()->lists('descripcion', 'id');
        $this->estados = \App\Models\Estados::all()->lists('nombre', 'id');
        $this->municipios = \App\Models\Municipios::all()->lists('nombre', 'id');
        $this->parroquias = \App\Models\Parroquias::all()->lists('nombre', 'id');
        $this->ocupacion = \App\Models\Ocupacion::all()->lists('nombre', 'id');
        $this->recepcion = \App\Models\Recepcion::all()->lists('nombre', 'id');
        $this->discapacidad = \App\Models\discapacidad::all()->lists('nombre', 'id');
        $this->gradoDis = \App\Models\GradoDiscapacidad::where('estatus', '=', 1)->lists('nombre', 'id');
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


    }


    public function index()
    {

        $solicitudes = \App\Models\Solicitudes::with('usuarios', 'estatus', 'beneficiario', 'coordinacion', 'tipoSolicitud', 'recepcion')
            ->where('id_coordinaciones', '=', Auth::user()->id_coordinacion)
            ->where('id_estatus', '=', '1')
            //->select('id','estatus','id_coordinaciones')
            ->get();

        return view('solicitudes.index', ['solicitud' => $solicitudes]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($ci)
    {
        $cedula = Crypt::decrypt($ci);
        // dd($cedula);
        $datos = \App\Models\Saime::datos("'V'", $cedula);
        /*    $edo_civil = \App\Models\EdoCivil::all()->lists('descripcion', 'id');
            $estados = \App\Models\Estados::all()->lists('nombre', 'id');
            //array_unshift($estados, 'Seleccione un Estado');
            $ocupacion = \App\Models\Ocupacion::all()->lists('nombre', 'id');
            $recepcion = \App\Models\Recepcion::all()->lists('nombre', 'id');
            $discapacidad = \App\Models\discapacidad::all()->lists('nombre', 'id');
            $gradoDis = \App\Models\GradoDiscapacidad::where('estatus', '=', 1)->lists('nombre', 'id');
            $comites = \App\Models\Comites::all()->lists('nombre', 'id');
            $misiones = \App\Models\Misiones::all()->lists('nombre', 'id');
            $vivienda = \App\Models\tipoVivienda::all()->lists('nombre', 'id');
            $pisos = \App\Models\tipoPisos::all()->lists('nombre', 'id');
            $paredes = \App\Models\tipoParedes::all()->lists('nombre', 'id');
            $techos = \App\Models\tipoTechos::all()->lists('nombre', 'id');
            $suministro_agua = \App\Models\Servicios::where('padre', '=', 1)->lists('nombre', 'id');
            $gas = \App\Models\Servicios::where('padre', '=', 2)->lists('nombre', 'id');
            $desecho = \App\Models\Servicios::where('padre', '=', 3)->lists('nombre', 'id');
            $agua_ser = \App\Models\Servicios::where('padre', '=', 8)->lists('nombre', 'id');
            $servicios = \App\Models\Servicios::where('padre', '=', null)->lists('nombre', 'id');
            $servicios_comunidad = \App\Models\Servicios_comunidad::all()->lists('nombre', 'id');
            $realidad = \App\Models\RealidadSocioeconomica::all()->lists('pregunta', 'id');
            $casa_comercial = \App\Models\CasaComercial::all()->lists('nombre', 'id');
            $sub_secretaria = \App\Models\Sub_secretaria::where('estatus', '=', 1)->lists('descripcion', 'id');
            $consulta_ingreso = \App\Models\consulta_ingreso::where('estatus', '=', 1)->lists('nombre', 'id');
            $nivel_instruccion = \App\Models\nivel_instruccion::where('estatus', '=', 1)->lists('nombre', 'id');
            $parenteso = \App\Models\parentesco::where('estatus', '=', 1)->lists('nombre', 'id');
            $anexos = \App\Models\Anexos::where('estatus', '=', 1)->lists('nombre', 'id');*/


        return view('solicitudes.solicitud', [
            'datos' => $datos,
            'EdoCivil' => $this->edo_civil,
            'estados' => ['' => 'Seleccione un Estado'] + $this->estados,
            'ocupacion' => $this->ocupacion,
            'recepcion' => $this->recepcion,
            'discapacidad' => ['' => 'SELECCIONE..'] + $this->discapacidad,
            'comites' => $this->comites,
            'misiones' => $this->misiones,
            'vivienda' => $this->vivienda,
            'paredes' => $this->paredes,
            'pisos' => $this->pisos,
            'techos' => $this->techos,
            'servicios' => $this->servicios,
            'suministro_agua' => $this->suministro_agua,
            'gas' => $this->gas,
            'desecho' => $this->desecho,
            'agua_ser' => $this->agua_ser,
            'servicios_comunidad' => $this->servicios_comunidad,
            'realidad' => $this->realidad,
            'casa_comercial' => $this->casa_comercial,
            'sub_secretaria' => ['' => 'SELECIONE...'] + $this->sub_secretaria,
            'consulta_ingreso' => ['' => 'SELECCIONE..'] + $this->consulta_ingreso,
            'nivel_instruccion' => ['' => 'SELECCIONE..'] + $this->nivel_instruccion,
            'parentesco' => ['' => 'SELECCIONE..'] + $this->parentesco,
            'anexos' => $this->anexos,
            'gradoDis' => ['' => 'SELECCIONE..'] + $this->gradoDis

        ]);

//        }


        //$menu = opciones_perfiles::menu();
        //      return view('solicitudes.nueva_solicitud');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(SolicitudesRequest $request)
    {

        $cumple_be = \Carbon\Carbon::createFromFormat('d-m-Y', $request->input('fecha_nacimiento_be'));
        $cumple_so = \Carbon\Carbon::createFromFormat('d-m-Y', $request->input('fecha_nacimiento_so'));


//pendiente de validar las cedulas si son las misma como el beneficiario com el solicitante

        $ben = new \App\Models\Personas;
        $ben->nacionalidad = $request->input('nacionalidad');
        $ben->nombres = $request->input('nombre_be');
        $ben->apellidos = $request->input('apellido_be');
        $ben->cedula = $request->input('cedula_be');
        $ben->fecha_nacimiento = $cumple_be;
        $ben->sexo = $request->input('sexo_be');
        $ben->direccion = $request->input('sector_be');
        $ben->id_ocupacion = $request->input('ocupacion_be');
        $ben->id_estado = $request->input('estado_be');
        $ben->id_municipio = $request->input('municipio_be');
        $ben->id_parroquia = $request->input('parroquias_be');
        $ben->id_edocivil = $request->input('Edocivil_be');
        $ben->save();


        // si la cedula existe en la tabla personas , si existe solo obtenemos el id

        $solicitante = \App\Models\Personas::where('cedula', '=', $request->input('cedula_so'))->first();

        if ($solicitante == null) {

            $sol = new \App\Models\Personas;
            $sol->nacionalidad = $request->input('nacionalidad');
            $sol->nombres = $request->input('nombre_so');
            $sol->apellidos = $request->input('apellido_so');
            $sol->cedula = $request->input('cedula_so');
            $sol->fecha_nacimiento = $cumple_so;
            $sol->sexo = $request->input('sexo_so');
            $sol->direccion = $request->input('sector_so');
            $sol->id_ocupacion = $request->input('ocupacion_so');
            $sol->id_estado = $request->input('estado_so');
            $sol->id_municipio = $request->input('municipio_so');
            $sol->id_parroquia = $request->input('parroquia_so');
            $sol->id_edocivil = $request->input('edocivil_so');
            $sol->save();
        }


        $solicitudes = new \App\Models\Solicitudes;
        $solicitudes->descripcion = $request->input('descripcion_caso');
        $solicitudes->observacion = $request->input('observacion_caso');
        $solicitudes->monto_solicitado = $request->input('monto_solicitado');
        $solicitudes->id_beneficiario = $ben->id;
        $solicitudes->id_solicitante = ($solicitante) ? $solicitante->id : $sol->id;
        $solicitudes->id_tsolicitud = $request->input("tipo_solicitud");
        $solicitudes->id_coordinaciones = $request->input("coordinacion");
        $solicitudes->id_trecepcion = $request->input("recepcion");
        $solicitudes->id_casa_comercial = $request->input("casa_comercial");
        $solicitudes->id_realidad_socieco = $request->input("preguntas");
        $solicitudes->id_usuarios = Auth::user()->id;
        $solicitudes->estatus = 1;
        $solicitudes->save();


        //Discapacidad Beneficiario

        if ($request->discapacidad != null) {
            $disca = new  \App\Models\BeneficiarioDiscapacidad;
            $disca->certificado_discp = $request->discapacidad['certificado'];
            $disca->ayuda_tecnica = $request->discapacidad['ayudaTecnica'];
            $disca->id_discapacidad = $request->discapacidad['algunaDis'];
            $disca->id_gdiscapacidad = $request->discapacidad['grado'];
            $disca->id_beneficiario = $ben->id;
            $disca->save();
        }


        //historico de solicitudes
        $user_soli = \App\Models\Solicitudes::find($solicitudes->id);
        $user_soli->usuarios()->attach(Auth::user()->id, ['estatus' => 1, 'fecha_registro' => \Carbon\Carbon::now()]);

        //Ingresos por grupo familiar
        for ($i = 0; $i <= 5; $i++) {
            if ($request->nombre_Apellido[$i] != "") {
                $ingresos = new  \App\Models\IngresosGrupo;
                $ingresos->id_solicitud = $solicitudes->id;
                $ingresos->nombre_apellido = $request->nombre_Apellido[$i];
                $ingresos->edad = $request->edad[$i];
                $ingresos->id_parentesco = $request->parentesco[$i];
                $ingresos->id_ocupacion = $request->ocupacion[$i];
                $ingresos->id_nivel_instr = $request->nivel_instruccion[$i];
                $ingresos->id_ingresos = $request->ingresos[$i];
                $ingresos->cantidad = $request->cantidad[$i];
                ($i == $request->jefe_familia) ? $ingresos->jefe_familia = 1 : $ingresos->jefe_familia = 0;
                $ingresos->save();
            }
        }


        //Egreso por  grupo familiar
        if (is_array($request->egreso)) {
            foreach ($request->egreso as $ind => $val) {
                $egreso = new \App\Models\EgresoGrupo;
                $egreso->id_solicitud = $solicitudes->id;
                //$egreso->id_solicitud = 10;
                $egreso->nombre = $ind;
                $egreso->cantidad = $val;
                $egreso->save();
            }
        }


        //Socio Demografico
        $socio = new \App\Models\SocioDemografico;
        $socio->id_solicitud = $solicitudes->id;
        //$socio->id_solicitud = 10;
        $socio->id_viviendas = serialize($request->socio_demofrafico['vivienda']);
        $socio->id_paredes = serialize($request->socio_demofrafico['paredes']);
        $socio->id_pisos = serialize($request->socio_demofrafico['pisos']);
        $socio->id_techos = serialize($request->socio_demofrafico['techos']);
        $socio->id_agua = serialize($request->socio_demofrafico['agua']);
        $socio->id_gas = serialize($request->socio_demofrafico['gas']);
        $socio->id_basura = serialize($request->socio_demofrafico['basura']);
        $socio->id_agua_servida = serialize($request->socio_demofrafico['aguas_servidas']);
        $socio->id_comunidad = serialize($request->socio_demofrafico['servicio_comunidad']);
        $socio->id_comite = serialize($request->socio_demofrafico['programa']);
        $socio->id_misiones = serialize($request->socio_demofrafico['misiones']);
        $socio->save();


        //Session::flash('mensaje','Se Ha Registrado Una Nueva discapacidad');
        //return Redirect::to('solicitudes/' . Crypt::encrypt($request->input('cedula_be')));
        return Redirect::to('filtro');


    }


    protected function fileStore($file)
    {
        /*        $imageName = 'Robert.'.$request->file('cedula_file')->getClientOriginalExtension();

                $request->file('cedula_file')->move(base_path() . '/public/documentos/', $imageName);*/


        if (is_array($file)) {
            foreach ($file as $key => $value) {
                if (!empty($value) || $value != NULL || $value != "") {
                    return true;
                    break;//stop the process we have seen that at least 1 of the array has value so its not empty
                }
            }


        }
    }


    protected function showInforme($id)
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
            ->find($id);


        return $socio;


    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {


        //return $solicitudes = \App\Models\Solicitudes::find($id);//->with('usuarios','estatus','beneficiario', 'coordinacion', 'tipoSolicitud', 'recepcion')


        // dd($solicitudes);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {

        $soli = \App\Models\Solicitudes::with(
            'usuarios',
            'estatus',
            'beneficiario.beneficiario_discapacidad.discapacidad',
            'solicitante',
            'coordinacion',
            'tipoSolicitud',
            'recepcion',
            'ingresos_grupo.parentesco',
            'ingresos_grupo.ocupacion',
            'ingresos_grupo.consulta_ingresos',
            'ingresos_grupo.nivel_instruccion',
            'socio_demografico'
        )->find($id);

        //dd(($soli->egresos_grupo[1]));




        // $beneficiario = \App\Models\Personas::with('beneficiario_discapacidad.discapacidad', 'beneficiario_discapacidad.GradoDiscapacidad')->find($soli->id_beneficiario);
        //$solicitante = \App\Models\Personas::find($soli->id_solicitante);
        $sub_secretaria = \App\Models\Sub_secretaria::where('id', '=', Auth::user()->id_secretaria)->lists('descripcion', 'id');
        $coordinacion = \App\Models\Coordinacion::find(Auth::user()->id_coordinacion)->lists('nombre', 'id');
        $tiposolicitud = \App\Models\Coordinacion::find(Auth::user()->id_coordinacion)->tipo_solicitud()->lists('nombre', 'id');

        return view('solicitudes.editar_solicitudes', [
            'anexos' => $this->anexos,
            'casa_comercial' => $this->casa_comercial,
            'solicitudes' => $soli,
            //'solicitante' => $solicitante,
            //'beneficiario' => $beneficiario,
            'subSecretaria' => $sub_secretaria,
            'coordinacion' => $coordinacion,
            'tipoSolicitud' => $tiposolicitud,
            'estado' => $this->estados,
            'municipio' => $this->municipios,
            'parroquia' => $this->parroquias,
            'ocupacion' => $this->ocupacion,
            'recepcion' => $this->recepcion,
            'parentesco' => $this->parentesco,
            'nivelInstruccion' => $this->nivel_instruccion,
            'consulta_ingreso' => $this->consulta_ingreso,
            'edo_civil' => $this->edo_civil,
            'discapacidad' => $this->discapacidad,
            'gradoDis' => $this->gradoDis,
            'vivienda'=> $this->vivienda,
            'paredes'=>$this->paredes,
            'pisos'=>$this->pisos,
            'techos'=>$this->techos,
            'suministro_agua'=>$this->suministro_agua,
            'gas'=>$this->gas,
            'agua_ser'=>$this->agua_ser,
            'servicios_comunidad'=>$this->servicios_comunidad,
            'comite'=>$this->comites,
            'misiones'=>$this->misiones,
            'desecho'=>$this->desecho,
            'realidad'=>$this->realidad


        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(SolicitudesRequest $request,$id)
    {
        $soli = \App\Models\Solicitudes::with(
            'usuarios',
            'estatus',
            'beneficiario.beneficiario_discapacidad.discapacidad',
            'solicitante',
            'coordinacion',
            'tipoSolicitud',
            'recepcion',
            'ingresos_grupo.parentesco',
            'ingresos_grupo.ocupacion',
            'ingresos_grupo.consulta_ingresos',
            'ingresos_grupo.nivel_instruccion',
            'socio_demografico'
        )->find($id);

        dd($request->input());
       // dd($soli);

        // BENEFICIARIO
        $soli->beneficiario->sexo = $request->input('sexo_be');
        $soli->beneficiario->direccion = $request->input('sector_be');
        $soli->beneficiario->id_ocupacion = $request->input('ocupacion_be');
        $soli->beneficiario->id_estado = $request->input('estado_be');
        $soli->beneficiario->id_municipio = $request->input('municipio_be');
        $soli->beneficiario->id_parroquia = $request->input('parroquias_be');
        $soli->beneficiario->id_edocivil = $request->input('Edocivil_be');

        // BENEFICIARIO DISCAPACIDAD
        if ($request->discapacidad != null) {
            $soli->beneficiario->certificado_discp = $request->discapacidad['certificado'];
            $soli->beneficiario->beneficiario_discapacidad->ayuda_tecnica = $request->discapacidad['ayudaTecnica'];
            $soli->beneficiario->beneficiario_discapacidad->id_discapacidad = $request->discapacidad['algunaDis'];
            $soli->beneficiario->beneficiario_discapacidad->id_gdiscapacidad = $request->discapacidad['grado'];

        }

        //SOLICITANTE
        $soli->solicitante->sexo = $request->input('sexo_so');
        $soli->solicitante->direccion = $request->input('sector_so');
        $soli->solicitante->id_ocupacion = $request->input('ocupacion_so');
        $soli->solicitante->id_estado = $request->input('estado_so');
        $soli->solicitante->id_municipio = $request->input('municipio_so');
        $soli->solicitante->id_parroquia = $request->input('parroquia_so');
        $soli->solicitante->id_edocivil = $request->input('edocivil_so');










        //$soli->solicitante->nombres='DANIXI';
        //$soli->save();

      //  dd($soli->solicitante);

     /*   $solicitudes= Solicitudes::find($id)->beneficiario()->first();

        $solicitudes->nombres='ROBERT';
        $solicitudes->save();

        dd($solicitudes);



        dd($request->input());*/



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
