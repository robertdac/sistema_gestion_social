<?php namespace App\Http\Controllers;

use App\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\SecretariasRequest;


class SecretariaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        if (trim(Input::get('lolo')) != "") {

            $nombre = Input::get('lolo');

            $secretaria = \App\Models\Secretaria::where('descripcion', 'like', '%' . $nombre . '%')->paginate(5);

            return view('secretaria.index', ['secretaria' => $secretaria]);

        }

        $secretaria = \App\Models\Secretaria::paginate(5);
        return view('secretaria.index', ['secretaria' => $secretaria]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('secretaria.nueva_secretaria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(SecretariasRequest $secretariasRequest)
    {

       /* $rules = array(

            'descripcion' => 'required'

        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('nueva_secretaria/')
                ->withErrors($validator);


        } else {


        }*/

            $secretaria = new \App\Models\Secretaria;
            $secretaria->descripcion =\Request::input('descripcion');
            $secretaria->save();

            Session::flash('mensaje', 'Se Ha Registrado Una Nueva secretaria');
            return Redirect::to('secretaria');

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
        $secretaria = \App\Models\Secretaria::find($id);
        return view('secretaria.editar_secretaria', ['secretaria' => $secretaria]);

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

            'descripcion' => 'required',
            'estatus' => 'required'


        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return Redirect::to('editar_secretaria/' . $id)
                ->withErrors($validator);

        } else {

            $secretaria = \App\Models\Secretaria::find($id);
            $secretaria->descripcion = Input::get('descripcion');
            $secretaria->estatus = Input::get('estatus');
            $secretaria->save();


            Session::flash('mensaje', 'Se Ha actualizado el tipo de secretaria correctamente');
            return Redirect::to('secretaria');


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
