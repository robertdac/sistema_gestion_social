<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recepcion extends Model {

    protected $table='recepcion';
    public $timestamps = false;


    static function recepcion(){

        $estao=Recepcion::all()->toArray();

        $pow[]='SELECCIONE..';
        foreach($estao as $esta) {

            $pow[$esta['id']]=$esta['nombre'];

        }

        return $pow;



    }


}
