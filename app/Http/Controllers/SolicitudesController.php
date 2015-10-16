<?php namespace App\Http\Controllers;

use App\Http\Requests\SolicitudesRequest;
use Illuminate\Http\Request as Peticion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;

class SolicitudesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index(Peticion $request)
    {
        $uri = $request->all();

        // dd($uri);

        if (!empty($uri['cedula'])) {
            $ci = $uri['cedula'];

            return $this->create($ci);

        }
        return view('solicitudes.nueva_solicitud');


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($ci)
    {
        $cedula = Crypt::decrypt($ci);
        $datos = \App\Models\Saime::datos("'V'", $cedula);
        $edo_civil = \App\Models\EdoCivil::all_edo_civil();
        $estados = \App\Models\Estados::all()->lists('nombre', 'id');
        array_unshift($estados, 'Seleccione un Estado');
        $ocupacion = \App\Models\Ocupacion::ocupacion();
        $recepcion = \App\Models\Recepcion::recepcion();
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
        $anexos = \App\Models\Anexos::where('estatus', '=', 1)->lists('nombre', 'id');

        //array_unshift($discapacidad, 'SELECCIONE...');
        array_unshift($sub_secretaria, 'SELECCIONE...');

        // dd($sub_secretaria);

        //dd($estados);


        return view('solicitudes.solicitud', [
            'datos' => $datos,
            'EdoCivil' => $edo_civil,
            'estados' => $estados,
            'ocupacion' => $ocupacion,
            'recepcion' => $recepcion,
            'discapacidad' => ['' => 'SELECCIONE..'] + $discapacidad,
            'comites' => $comites,
            'misiones' => $misiones,
            'vivienda' => $vivienda,
            'paredes' => $paredes,
            'pisos' => $pisos,
            'techos' => $techos,
            'servicios' => $servicios,
            'suministro_agua' => $suministro_agua,
            'gas' => $gas,
            'desecho' => $desecho,
            'agua_ser' => $agua_ser,
            'servicios_comunidad' => $servicios_comunidad,
            'realidad' => $realidad,
            'casa_comercial' => $casa_comercial,
            'sub_secretaria' => $sub_secretaria,
            'consulta_ingreso' => ['' => 'SELECCIONE..'] + $consulta_ingreso,
            'nivel_instruccion' => ['' => 'SELECCIONE..'] + $nivel_instruccion,
            'parentesco' => ['' => 'SELECCIONE..'] + $parenteso,
            'anexos' => $anexos,
            'gradoDis' => ['' => 'SELECCIONE..'] + $gradoDis

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

        //dd($request->egreso);


       // dd(is_array($request->egreso));


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


        $solicitudes = new \App\Models\Solicitudes;
        $solicitudes->descripcion = $request->input('descripcion_caso');
        $solicitudes->observacion = $request->input('observacion_caso');
        $solicitudes->monto_solicitado = $request->input('monto_solicitado');
        $solicitudes->id_beneficiario = $ben->id;
        $solicitudes->id_solicitante = $sol->id;
        $solicitudes->id_tsolicitud = $request->input("tipo_solicitud");
        $solicitudes->id_coordinaciones = $request->input("coordinacion");
        $solicitudes->id_trecepcion = $request->input("recepcion");
        $solicitudes->id_casa_comercial = $request->input("casa_comercial");
        $solicitudes->id_realidad_socieco = $request->input("preguntas");
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


        //SOLICITUDES
        $user_soli = \App\Models\Solicitudes::find($solicitudes->id);
        $user_soli->usuarios()->attach(Auth::user()->id, ['estatus' => 1, 'fecha_registro' => \Carbon\Carbon::now()]);

        //Ingresos grupo familiar
        for ($i = 0; $i <= 6; $i++) {
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


        //Egreso grupo familiar
        if (is_array($request->egreso)) {
            foreach($request->egreso as $ind => $val) {
                $egreso = new \App\Models\EgresoGrupo;
                //$egreso->id_solicitud = $solicitudes->id;
                $egreso->id_solicitud = 10;
                $egreso->nombre = $ind;
                $egreso->cantidad = $val;
                $egreso->save();
            }
        }


        //Socio Demografico
        $socio = new \App\Models\SocioDemografico;
        //$socio->id_solicitud = $solicitudes->id;
        $socio->id_solicitud = 10;
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
