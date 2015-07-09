<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargos extends Model {

	protected  $table='cargos';

    static function cargos(){

        $estao=Cargos::all()->toArray();

        $pow['']='SELECCIONE...';

        foreach($estao as $esta) {

            $pow[$esta['id']]=$esta['nombre'];

        }

        return $pow;



    }




}
