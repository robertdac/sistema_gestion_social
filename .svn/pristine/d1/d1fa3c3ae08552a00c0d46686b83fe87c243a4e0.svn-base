<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TipoAtencionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()	{

		if(trim(Input::get('lolo')) != ""  ){

			$nombre=Input::get('lolo');

			$tipo_atencion=\App\Models\TipoAtencion::where('nombre','like','%'.$nombre.'%')->paginate(5);

			return view('tipoAtencion.index',['tipoAtencion'=>$tipo_atencion]);

		}

		$tipo_atencion=\App\Models\TipoAtencion::paginate(5);
		return view('tipoAtencion.index',['tipoAtencion'=>$tipo_atencion]);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tipoAtencion.nuevo_tipo_atencion');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$rules =array(
			'nombre'=>'required',
			'descripcion'=>'required'

		);
		$validator = Validator::make(Input::all(),$rules);

		if($validator->fails()){

			return Redirect::to('nueva_tipo_atencion/')
				->withErrors($validator);


		}else{

			$tipo_atencion= new \App\Models\TipoAtencion;
			$tipo_atencion->nombre = Input::get('nombre');
			$tipo_atencion->descripcion = Input::get('descripcion');
			$tipo_atencion->save();

			Session::flash('mensaje','Se Ha Registrado Un Nuevo tipo atencion');
			return Redirect::to('tipo_atencion');

		}


	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tipo_atencion=\App\Models\TipoAtencion::find($id);
		return view('tipoAtencion.editar_tipo_atencion',['tipoAtencion'=>$tipo_atencion]);

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$rules =array(
			'nombre'=>'required',
			'descripcion'=>'required',
			'estatus'=>'required'


		);
		$validator = Validator::make(Input::all(),$rules);

		if($validator->fails()){

			return Redirect::to('editar_tipo_atencion/'.$id)
				->withErrors($validator);

		}else{

			$tipo_atencion=\App\Models\TipoAtencion::find($id);
			$tipo_atencion->nombre= Input::get('nombre');
			$tipo_atencion->descripcion= Input::get('descripcion');
			$tipo_atencion->estatus= Input::get('estatus');
			$tipo_atencion->save();


			Session::flash('mensaje','Se Ha actualizado el tipo de atencion correctamente');
			return Redirect::to('tipo_atencion');



		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
