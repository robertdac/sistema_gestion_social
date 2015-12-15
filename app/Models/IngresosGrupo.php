<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IngresosGrupo extends Model
{

    protected $table = "ingresos_grupo";
    public $timestamps = false;


    public function solicitudes()
    {
        return $this->belongsto('App\Models\Solicitudes', 'id_solicitud');

    }

    public function parentesco()
    {
        return $this->belongsto('App\Models\parentesco', 'id_parentesco');

    }

    public function ocupacion(){
        return $this->belongsTo('App\Models\parentesco','id_ocupacion');


    }

    public function  consulta_ingresos(){

        return $this->belongsTo('App\Models\consulta_ingreso','id_ingresos');

    }

     public function nivel_instruccion(){

         return $this->belongsTo('App\Models\nivel_instruccion','id_nivel_instr');



     }






}
