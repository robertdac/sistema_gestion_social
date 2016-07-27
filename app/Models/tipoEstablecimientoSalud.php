<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tipoEstablecimientoSalud extends Model
{
    protected $table = "tipoEstablecimientoSalud";

    public $timestamps = false;


    public function establecimientoSalud()
    {
         return $this->hasMany('App\Models\establecimientoSalud','tipo_id');

    }


}
