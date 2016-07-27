<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model {
    protected $table='municipio';

    public function parroquias(){
        return $this->hasMany('App\Models\Parroquias','municipio_id');

    }

    public function estados(){

        return $this->belongsTo('\App\Models\Estados','estado_id');

    }


}
