<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nivel_instruccion extends Model {

    protected  $table="nivel_instruccion";


    public function ingresos(){

        return $this->hasMany('App\Models\Ingresos','id_nivel_instr');

    }




}
