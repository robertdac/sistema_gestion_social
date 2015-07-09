<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ocupacion extends Model {

protected  $table='ocupacion';


    static function ocupacion(){

        $estao=Ocupacion::all()->toArray();

        $pow['']='SELECCIONE..';
        foreach($estao as $esta) {

            $pow[$esta['id']]=$esta['nombre'];

        }

        return $pow;



    }




}
