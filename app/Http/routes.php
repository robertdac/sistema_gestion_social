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
    return view('prueba');

    $solo=[];
    dd($solo);


    $user= \App\Models\Cargos::all()->count('nombre');

    dd(json_encode($user));



    $json = ['robert' => 'de abreu'];

    $string = '

{
    "area": [
        {
            "area": "kothrud"
        },
        {
            "area": "katraj"
        }
    ]
}

';


    $string = '   chart: {
        type: "column"
                } ';


    dd(json_decode($string));


    return view('prueba');

    $stocksTable = \Khill\Lavacharts\Lavacharts::DataTable();  // Lava::DataTable() if using Laravel

    dd($stocksTable);

    $stocksTable->addDateColumn('Day of Month')
        ->addNumberColumn('Projected')
        ->addNumberColumn('Official');


// Random Data For Example
    for ($a = 1; $a < 30; $a++) {
        $stocksTable->addRow([
            '2015-10-' . $a, rand(800, 1000), rand(800, 1000)
        ]);
    }


    dd(json_encode(url('/')));


    //dd(url('cortes_agenda/logoGDC.png'));

    $img = Image::make(url('cortes_agenda/logoGDC.png'))->resize(300, 200);
    $img->save(url('cortes_agenda/NEWlogoGDC.png'));

    //dd($img);
    /*return $img->response('png');*/

    //$est=\App\Models\tipoEstablecimientoSalud::find(11)->establecimientoSalud()->get();
    $est9 = \App\Models\establecimientoSalud::find(155)->tipoEstablecimiento()->get();

    dd($est9);


    // $roles = \App\Models\Opciones::all();
    // $usuario = \App\User::find(Auth::user()->id)->roles()->lists('nombre', 'id');


    //dd(DB::raw("select DATE(created_at) * from solicitudes"));

    //$q->where(DB::raw("DATE(created_at) = '".date('Y-m-d')."'"));

    $esta = \App\Models\Solicitudes::where('id_estatus', 3)
        ->whereDate('updated_at', '=', '2016-04-12')
        ->get();
    //dd($esta->toJson());


    return view('prueba');

});


Route::get('consulta', function () {
    $cedula = Input::get('id');
    $nac = Input::get('nac');
    return \App\Models\Saime::datos("'" . $nac . "'", $cedula);
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


Route::get('establecimientoSalud', function () {
    $id = Input::get('option');
    if ($id <> 0) {
        $esta = App\Models\tipoEstablecimientoSalud::find($id)->establecimientoSalud()->lists('nombre', 'id');
        return $esta;
    }
    return $esta = [0 => 'Debe Seleccionar un establecimiento'];

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

Route::get('filtro', 'FiltroController@index');
Route::post('filtro', 'SolicitudesController@filtro');

Route::get('ReporteBeneficiario', 'ReporteBeneficiarioController@index');
Route::post('ReporteBeneficiario', 'ReporteBeneficiarioController@create');

Route::get('informe_socio_economico/{id}', 'InformeSocioEconomicoController@index');
Route::get('nuevaSolicitud', 'SolicitudesController@nuevaSolicitud');
Route::get('solicitudes', 'SolicitudesController@index');
Route::get('solicitudes/{ci}', 'SolicitudesController@create');
Route::post('solicitudes', 'SolicitudesController@store');
Route::get('editar_solicitudes/{id}', 'SolicitudesController@edit');
Route::post('editar_solicitudes/{id}', 'SolicitudesController@update');


Route::get('ficha/{id}', 'SolicitudesController@show');

//Route:get('ficha/{id}',['as'=>'fichas','SolicitudesController@show']);

Route::get('verificar/{id}', 'SolicitudesController@verificarEdit');
Route::post('verificar', 'SolicitudesController@verificarUpdate');
Route::get('aprobar/{id}', 'SolicitudesController@aprobarEdit');
Route::post('aprobar', 'SolicitudesController@aprobarUpdate');

Route::get('usuarios', 'UserController@index');
Route::get('ver_usuario/{id}', 'UserController@show');
Route::get('nuevo_usuario', 'UserController@create');
Route::post('usuarios', 'UserController@store');
Route::get('editar_usuario/{id}', 'UserController@edit');
Route::post('modificar_usuario/{id}', 'UserController@update');
Route::get('roles/{id}', 'UserController@roles');
Route::post('roles', 'UserController@rolesUpdate');


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
