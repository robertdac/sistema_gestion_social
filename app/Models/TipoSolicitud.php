<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoSolicitud extends Model {

	protected $table='tipo_solicitud';


    public function coordinacion(){

        return $this->belongsTo('\App\Models\Coordinacion','id_coordinacion');

    }





}
