<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class establecimientoSalud extends Model
{

    protected $table = "establecimientosSalud";
    public $timestamps = false;


    public function tipoEstablecimiento()
    {

        return $this->belongsTo('\App\Models\tipoEstablecimientoSalud','tipo_id');


    }


}
