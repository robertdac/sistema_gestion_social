<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfiles extends Model {

	protected  $table='perfiles';



    public function usuarios (){

        return $this->hasMany('\App\User','id_perfil');


    }







    static function perfiles(){

        $estao=Perfiles::all()->toArray();

        $pow['']='SELECCIONE...';
        foreach($estao as $esta) {

            if($esta['id'] <> 1   ){

            $pow[$esta['id']]=$esta['nombre'];

        }
        }

        return $pow;



    }


}
