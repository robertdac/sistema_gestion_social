<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sub_secretaria extends Model {

 protected  $table='subsecretaria';
    public $timestamps = false;


    public function coordinacion(){
       return $this->hasMany('App\Models\Coordinacion','idsubsecretaria');

    }


    public function secretaria(){

        return $this->belongsTo('\App\Models\Secretaria','idsecretaria');

    }



}
