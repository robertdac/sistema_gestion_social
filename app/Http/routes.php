<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');

Route::get('/', 'HomeController@index');


Route::get('prueba', function () {


dd(\App\Models\Personas::with('telefonos.tipoTelefono')->find('43'));

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
        ->find(10);

//dd($informe->descripcion);

    return view('success',['informe'=>$informe]);

    $view =  \View::make('success',['informe'=>$informe]);
    $pdf = \App::make('dompdf.wrapper');
    $pdf->loadHTML($view);
    return $pdf->stream('lalala');


    $epa= \App\Models\Estatus::find(1)->solicitudes();

   dd($epa);

    $solicitudes = \App\Models\Solicitudes::with('beneficiario', 'coordinacion', 'tipoSolicitud', 'recepcion')
        ->join('usuarios','solicitudes.id','=','usuarios.id')
        //->where('id_coordinaciones', '=', 3)
        // ->where('estatus','=','1')
        ->get();
dd($solicitudes);

});


Route::get('consulta', function () {

    $cedula = Input::get('id');
    return \App\Models\Saime::datos("'V'", $cedula);


});


Route::get('municipios', function () {
    $id = Input::get('option');
    $lost = App\Models\Estados::find($id)->municipios->lists('nombre', 'id');
    return $lost;

});

Route::get('parroquias', function () {
    $id = Input::get('option');
    $lost = App\Models\Municipios::find($id)->parroquias->lists('nombre', 'id');
    return $lost;

});


Route::get('coordinaciones', function () {
    $id = Input::get('option');
    if ($id <> 0) {
        $coor = App\Models\Sub_secretaria::find($id)->coordinacion->lists('nombre', 'id');
        return $coor;
    }
    return $coor = [0 => 'Debe Seleccionar una coordinacion'];

});


Route::get('tipo_solicitud', function () {
    $id = Input::get('option');
    $sol = \App\Models\Coordinacion::find($id)->tipo_solicitud->lists('nombre', 'id');
    return $sol;
});


/*Route::get("posts", function(){
	$posts= DB::connection('saime')->select("SELECT saime.buscar_diex('V',19387292)");
	var_dump($posts);
});*/


Route::any('filtro', function () {
    $cedula = Input::get('cedula');

    if ($cedula != null) {
        $personas = \App\Models\Personas::where('cedula', '=', $cedula)->first();

        if ($personas == null) {
            $cedula = Crypt::encrypt(Input::get('cedula'));
            return redirect('solicitudes/' . $cedula);

        }


    }
    return view('solicitudes.nueva_solicitud');

    /*   if (!empty($personas)) {
           $personas = \App\Models\Personas::find($cedula);
           $id = \App\Models\Solicitudes::where('id_beneficiario', '=', $personas->id)->lists('id');

           if ($personas != null && empty($id) != true) {
               $solicitudes = \App\Models\Solicitudes::find($id[0])->usuarios;
               if (count($solicitudes) == 3) {

                   return redirect('filtro')->with('mensaje', 'la solicitud ya ha sido aprobada tiene que esperar 6 meses para otra solicitud');

               } else {

                   return redirect('filtro')->with('mensaje', 'la solicitud esta en proceso');

               }

           }
           $cedula = Crypt::encrypt(Input::get('cedula'));
           return redirect('solicitudes/' . $cedula);
       }

       //return redirect('solicitudes/');

       return view('solicitudes.nueva_solicitud');*/

});


//Route::any('nueva_solicitud','SolicitudesController@index');
//Route::post('nueva_solicitud','SolicitudesController@index');


Route::get('informe_socio_economico/{id}', 'InformeSocioEconomicoController@show');


Route::get('solicitudes', 'SolicitudesController@index');
Route::get('solicitudes/{ci}', 'SolicitudesController@create');
Route::post('solicitudes', 'SolicitudesController@store');
Route::get('editar_solicitudes/{id}','SolicitudesController@edit');
Route::post('editar_solicitudes/{id}','SolicitudesController@update');
Route::get('ficha/{id}','SolicitudesController@show');

Route::get('usuarios', 'UserController@index');
Route::get('ver_usuario/{id}', 'UserController@show');
Route::get('nuevo_usuario', 'UserController@create');
Route::post('usuarios', 'UserController@store');
Route::get('editar_usuario/{id}', 'UserController@edit');
Route::post('modificar_usuario/{id}', 'UserController@update');


Route::get('discapacidades', 'DiscapacidadController@index');
Route::get('nueva_discapacidad', 'DiscapacidadController@create');
Route::post('discapacidades', 'DiscapacidadController@store');
Route::get('editar_discapacidad/{id}', 'DiscapacidadController@edit');
Route::post('modificar_discapacidad/{id}', 'DiscapacidadController@update');

Route::get('recepcion', 'RecepcionController@index');
Route::get('nueva_recepcion', 'RecepcionController@create');
Route::post('recepcion', 'RecepcionController@store');
Route::get('editar_recepcion/{id}', 'RecepcionController@edit');
Route::post('modificar_recepcion/{id}', 'RecepcionController@update');

Route::get('tipo_atencion', 'TipoAtencionController@index');
Route::get('nuevo_tipo_atencion', 'TipoAtencionController@create');
Route::post('tipo_atencion', 'TipoAtencionController@store');
Route::get('editar_tipo_atencion/{id}', 'TipoAtencionController@edit');
Route::post('modificar_tipo_atencion/{id}', 'TipoAtencionController@update');


Route::get('secretaria', 'SecretariaController@index');
Route::get('nueva_secretaria', 'SecretariaController@create');
Route::post('secretaria', 'SecretariaController@store');
Route::get('editar_secretaria/{id}', 'SecretariaController@edit');
Route::post('modificar_secretaria/{id}', 'SecretariaController@update');

Route::get('subsecretaria', 'SubSecretariaController@index');
Route::get('nueva_subsecretaria', 'SubSecretariaController@create');
Route::post('subsecretaria', 'SubSecretariaController@store');
Route::get('editar_subsecretaria/{id}', 'SubSecretariaController@edit');
Route::post('modificar_subsecretaria/{id}', 'SubSecretariaController@update');


Route::get('coordinacion', 'CoordinacionController@index');
Route::get('nueva_coordinacion', 'CoordinacionController@create');
Route::post('coordinacion', 'CoordinacionController@store');
Route::get('editar_coordinacion/{id}', 'CoordinacionController@edit');
Route::post('modificar_coordinacion/{id}', 'CoordinacionController@update');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
