<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coordinacion extends Model {

	protected  $table='coordinacion';
    public $timestamps = false;



    public function subsecretaria(){

        return $this->belongsTo('\App\Models\Sub_secretaria','idsubsecretaria');

    }





    static function coordinacion(){

        $estao=Coordinacion::all()->toArray();

        $pow['']='SELECCIONE...';

        foreach($estao as $esta) {

            $pow[$esta['id']]=$esta['nombre'];

        }

        return $pow;



    }




}
