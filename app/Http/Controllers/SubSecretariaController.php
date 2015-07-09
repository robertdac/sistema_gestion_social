<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Secretaria;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use \App\Models\Sub_secretaria;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SubsecretariaController extends Controller {



	public function index(Request $request)	{


		$name = $request->input('lolo');

		//dd($name);
		//$secretaria=Sub_secretaria::find(1)->secretaria();
//$secretaria=Sub_secretaria::with('secretaria')->where('descripcion','like', '%SUB-%')->get();
		//$secretaria=Sub_secretaria::with('secretaria')->get();
		//dd($secretaria);

		if(trim($name) != ""  ){

			$nombre=Input::get('lolo');

			$secretaria=\App\Models\Sub_secretaria::where('descripcion','like','%'.$name.'%')->paginate(10);

			return view('sub_secretaria.index',['secretaria'=>$secretaria]);

		}

		$secretaria=\App\Models\Sub_secretaria::with('secretaria')->paginate(10);
		$secretaria->setPath('subsecretaria');


			return view('sub_secretaria.index',['secretaria'=>$secretaria]);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		$secretaria= \App\Models\Secretaria::all()->lists('descripcion','id');

		return view('sub_secretaria.nueva_subsecretaria',['secretaria'=>$secretaria]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$rules =array(

			'descripcion'=>'required',
			'secretaria'=>'required'

		);
		$validator = Validator::make(Input::all(),$rules);

		if($validator->fails()){

			return Redirect::to('nueva_subsecretaria/')
				->withErrors($validator);


		}else{

			$secretaria= new \App\Models\Sub_secretaria();
			$secretaria->descripcion = Input::get('descripcion');
			$secretaria->idsecretaria = Input::get('secretaria');
			$secretaria->save();

			Session::flash('mensaje','Se Ha Registrado Una Nueva Sub-secretaria');
			return Redirect::to('subsecretaria');

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
		$subsecretaria=\App\Models\Sub_secretaria::find($id);
		$secretaria= \App\Models\Secretaria::all()->lists('descripcion','id');

		return view('sub_secretaria.editar_subsecretaria',['secretaria'=>$secretaria,'subsecretaria'=>$subsecretaria]);

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

			'subsecretaria'=>'required',
			'secretaria'=>'required',
			'estatus'=>'required'


		);
		$validator = Validator::make(Input::all(),$rules);

		if($validator->fails()){

			return Redirect::to('editar_subsecretaria/'.$id)
				->withErrors($validator);

		}else{

			$secretaria=\App\Models\Sub_secretaria::find($id);
			$secretaria->descripcion= Input::get('subsecretaria');
			$secretaria->idsecretaria= Input::get('secretaria');
			$secretaria->estatus= Input::get('estatus');
			$secretaria->save();


			Session::flash('mensaje','Se Ha actualizado el tipo de sub-secretaria correctamente');
			return Redirect::to('subsecretaria');



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
