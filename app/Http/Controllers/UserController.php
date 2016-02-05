<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Models\opciones_perfiles;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\Secretaria;
use App\Models\Sub_secretaria;
use App\Models\Perfiles;
use App\Models\Cargos;
use App\Models\Coordinacion;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;


class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');

    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //$user=User::where('id','<>',1);
        $nemo = $request->get('lolo');
        //dd($nemo);
        $user = User::usuarios($nemo);
        //$user=User::usuarios();

        //$lolo= User::name($request->get('lolo'))->orderBY('id','DESC')->paginate();

        return view('usuarios.index', ['user' => $user]);
        //return view('usuarios.index',['user'=>$lolo]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $secretarias = Secretaria::all()->lists('descripcion', 'id');

        //dd($secretarias);

        $subsecre = Sub_secretaria::where('estatus', 1)->lists('descripcion', 'id');
        array_unshift($subsecre, 'SELECCIONE...');
        $perf = Perfiles::all()->lists('nombre', 'id');
        $cargos = Cargos::all()->lists('nombre', 'id');
        $coor = Coordinacion::all();

        return view('usuarios.nuevo_usuario',
            ['secre' => $secretarias,
                'subsecre' => $subsecre,
                'perfil' => $perf,
                'cargos' => $cargos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        $rules = array(
            'cedula' => 'required|numeric',
            'nombre' => 'required|alpha',
            'apellido' => 'required',
            'correo' => 'required|email',
            'contasena' => 'required|alpha_dash',
            'secretaria' => 'required',
            'subsecretaria' => 'required',
            'perfiles' => 'required',
            'cargo' => 'required',
            'coordinacion' => 'required'


        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return Redirect::to('nuevo_usuario/')
                ->withErrors($validator)
                ->withInput(Input::except('contasena'));

        } else {

            $usuario = new User;
            $usuario->cedula = Input::get('cedula');
            $usuario->nombres = Input::get('nombre');
            $usuario->apellidos = Input::get('apellido');
            $usuario->email = Input::get('correo');
            $usuario->password = Hash::make(Input::get('contasena'));
            $usuario->id_secretaria = Input::get('secretaria');
            $usuario->id_subsecre = Input::get('subsecretaria');
            $usuario->id_perfil = Input::get('perfiles');
            $usuario->id_cargo = Input::get('cargo');
            $usuario->id_coordinacion = Input::get('coordinacion');
            $usuario->id_estatus = 1;
            $usuario->save();

            Session::flash('mensaje', 'Se Ha Registrado Un Usuario con exito');
            return Redirect::to('usuarios');

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
        $usuarios = User::ver_usuarios($id);

        return View('usuarios.ver_usuario', ['usuario' => $usuarios]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);
        $secretarias = Secretaria::secretaria();
        $subsecre = Sub_secretaria::subsecretaria();
        $perf = Perfiles::perfiles();
        $cargos = Cargos::cargos();
        $coor = Coordinacion::coordinacion();

        return view('usuarios.editar_usuario',
            ['secre' => $secretarias,
                'subsecre' => $subsecre,
                'perfil' => $perf,
                'cargos' => $cargos,
                'coor' => $coor,
                'usuario' => $usuario
            ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {

        $rules = array(
            'cedula' => 'required|numeric',
            'nombre' => 'required|alpha',
            'apellido' => 'required',
            'correo' => 'required|email',
            'contasena' => 'required|alpha_dash',
            'secretaria' => 'required',
            'subsecretaria' => 'required',
            'perfiles' => 'required',
            'cargo' => 'required',
            'coordinacion' => 'required'

        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return Redirect::to('editar_usuario/' . $id)
                ->withErrors($validator)
                ->withInput(Input::except('contasena'));

        } else {

            $usuario = User::find($id);
            $usuario->cedula = Input::get('cedula');
            $usuario->nombres = Input::get('nombre');
            $usuario->apellidos = Input::get('apellido');
            $usuario->email = Input::get('correo');
            $usuario->password = Hash::make(Input::get('contasena'));
            $usuario->id_secretaria = Input::get('secretaria');
            $usuario->id_subsecre = Input::get('subsecretaria');
            $usuario->id_perfil = Input::get('perfiles');
            $usuario->id_cargo = Input::get('cargo');
            $usuario->id_coordinacion = Input::get('coordinacion');
            $usuario->save();


            Session::flash('mensaje', 'Se Ha actualizado el usuario correctamente');
            return Redirect::to('usuarios');


        }


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
