<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Telefonos extends Model {

	protected  $table="telefonos";

    public function tipoTelefono(){

        return $this->belongsTo('\App\Models\TipoTelefonos','id_tipo_telefono');


    }



}
