<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coordinacion extends Model {

	protected  $table='coordinacion';
    public $timestamps = false;



    public function subsecretaria(){

        return $this->belongsTo('\App\Models\Sub_secretaria','idsubsecretaria');

    }





}
