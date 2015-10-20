<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Coordinacion extends Model {

	protected  $table='coordinacion';
    public $timestamps = false;



    public function tipo_solicitud(){
        return $this->hasMany('App\Models\TipoSolicitud','id_coordinacion');
    }


    public function subsecretaria(){

        return $this->belongsTo('\App\Models\Sub_secretaria','idsubsecretaria');

    }

    public function solicitudes()   {


        return $this->hasMany('\App\Models\Solicitudes','id_coordinaciones');


    }







}
