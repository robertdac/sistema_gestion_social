<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class DiscapacidadController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()	{

		if(trim(Input::get('lolo')) != ""  ){

			$nombre=Input::get('lolo');

		 	$discapacidad=\App\Models\discapacidad::where('nombre','like','%'.$nombre.'%')->paginate(5);

		return view('discapacidad.index',['discapacidad'=>$discapacidad]);

		}

		$discapacidad=\App\Models\discapacidad::paginate(5);
		return view('discapacidad.index',['discapacidad'=>$discapacidad]);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('discapacidad.nueva_discapacidad');
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

			return Redirect::to('nueva_discapacidad/')
				->withErrors($validator);


		}else{

			$discapacidad= new \App\Models\discapacidad;
			$discapacidad->nombre = Input::get('nombre');
			$discapacidad->descripcion = Input::get('descripcion');
			$discapacidad->save();

			Session::flash('mensaje','Se Ha Registrado Una Nueva discapacidad');
			return Redirect::to('discapacidades');

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
		$discapacidad=\App\Models\discapacidad::find($id);
		return view('discapacidad.editar_discapacidad',['discapacidad'=>$discapacidad]);

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

			return Redirect::to('editar_discapacidad/'.$id)
				->withErrors($validator);

		}else{

			$discapacidad=\App\Models\discapacidad::find($id);
		    $discapacidad->nombre= Input::get('nombre');
		    $discapacidad->descripcion= Input::get('descripcion');
		    $discapacidad->estatus= Input::get('estatus');
			$discapacidad->save();


			Session::flash('mensaje','Se Ha actualizado el tipo de discapacidad correctamente');
			return Redirect::to('discapacidades');



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
