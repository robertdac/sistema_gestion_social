<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoTelefonos extends Model {

	protected $table="tipo_telefono";
    public $timestamps = false;

    public function telefonos(){

        return $this->hasMany('\App\Models\Telefonos','id_tipo_telefono');


    }





}
