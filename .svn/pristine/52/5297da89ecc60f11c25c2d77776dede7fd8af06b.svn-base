<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ocupacion extends Model
{

    protected $table = 'ocupacion';


    public function ingresos()
    {

        return $this->hasMany('App\Models\IngresosGrupo', 'id_ocupacion');


    }


}
