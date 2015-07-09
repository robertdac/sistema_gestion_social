<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RecepcionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()	{

		if(trim(Input::get('lolo')) != ""  ){

			$nombre=Input::get('lolo');

			$recepcion=\App\Models\Recepcion::where('nombre','like','%'.$nombre.'%')->paginate(5);

			return view('recepcion.index',['recepcion'=>$recepcion]);

		}

		$recepcion=\App\Models\Recepcion::paginate(5);
		return view('recepcion.index',['recepcion'=>$recepcion]);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('recepcion.nueva_recepcion');
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

			return Redirect::to('nueva_recepcion/')
				->withErrors($validator);


		}else{

			$recepcion= new \App\Models\recepcion;
			$recepcion->nombre = Input::get('nombre');
			$recepcion->descripcion = Input::get('descripcion');
			$recepcion->save();

			Session::flash('mensaje','Se Ha Registrado Una Nueva recepcion');
			return Redirect::to('recepcion');

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
		$recepcion=\App\Models\Recepcion::find($id);
		return view('recepcion.editar_recepcion',['recepcion'=>$recepcion]);

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

			return Redirect::to('editar_recepcion/'.$id)
				->withErrors($validator);

		}else{

			$recepcion=\App\Models\Recepcion::find($id);
			$recepcion->nombre= Input::get('nombre');
			$recepcion->descripcion= Input::get('descripcion');
			$recepcion->estatus= Input::get('estatus');
			$recepcion->save();


			Session::flash('mensaje','Se Ha actualizado el tipo de recepcion correctamente');
			return Redirect::to('recepcion');



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
