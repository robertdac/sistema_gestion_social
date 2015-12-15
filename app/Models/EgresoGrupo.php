<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EgresoGrupo extends Model {

	protected  $table="egreso_grupo";
	public  $timestamps= false;


	public function solicitudes(){

		return $this->belongsto('App\Models\Solicitudes','id_solicitud');



	}



}
