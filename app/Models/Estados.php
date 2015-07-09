<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Estados extends Model {

protected $table="estado";


    public function municipios(){

      return $this->hasMany('App\Models\Municipios','estado_id');


    }







/*    static function estados(){

        $estao=Estados::all()->toArray();

        foreach($estao as $esta) {

            $pow[$esta['id']]=$esta['nombre'];

        }

        return $pow;



    }*/


}
