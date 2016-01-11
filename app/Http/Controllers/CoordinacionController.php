<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class CoordinacionController extends Controller
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
    public function index()
    {


        if (trim(Input::get('lolo')) != "") {

            $nombre = Input::get('lolo');

            $coordinacion = \App\Models\Coordinacion::with('subsecretaria')->where('nombre', 'like', '%' . $nombre . '%')->paginate(10);

            return view('coordinacion.index', ['coordinacion' => $coordinacion]);

        }
        $coordinacion = \App\Models\Coordinacion::with('subsecretaria')->paginate(2);
        $coordinacion->setPath('coordinacion');
        return view('coordinacion.index', ['coordinacion' => $coordinacion]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $subsecretaria = \App\Models\Sub_secretaria::all()->lists('descripcion', 'id');
        return view('coordinacion.nueva_coordinacion', ['secretaria' => $subsecretaria]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $rules = array(
            'nombre' => 'required',
            'abreviacion' => 'required',
            'subsecretaria' => 'required'

        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('nueva_coordinacion')
                ->withErrors($validator);

        } else {

            $coor = new \App\Models\Coordinacion;
            $coor->nombre = Input::get('nombre');
            $coor->abreviacion = Input::get('abreviacion');
            $coor->idsubsecretaria = Input::get('subsecretaria');
            $coor->save();


            Session::flash('mensaje', 'Se Ha actualizado el tipo de Coordinacion correctamente');
            return Redirect::to('coordinacion');


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

        $subsecretaria = \App\Models\Sub_secretaria::all()->lists('descripcion', 'id');
        $coordinacion = \App\Models\Coordinacion::find($id);

        return view('coordinacion.editar_coordinacion', ['coordinacion' => $coordinacion, 'subsecretaria' => $subsecretaria]);
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
            'nombre' => 'required',
            'abreviacion' => 'required',
            'sub-secretaria' => 'required',
            'estatus' => 'required',


        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return Redirect::to('editar_coordinacion/' . $id)
                ->withErrors($validator);

        } else {

            $coor = \App\Models\Coordinacion::find($id);
            $coor->nombre = Input::get('nombre');
            $coor->abreviacion = Input::get('abreviacion');
            $coor->idsubsecretaria = Input::get('sub-secretaria');
            $coor->estatus = Input::get('estatus');
            $coor->save();


            Session::flash('mensaje', 'Se Ha actualizado el tipo de Coordinacion correctamente');
            return Redirect::to('coordinacion');


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
