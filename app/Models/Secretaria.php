<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model {


    protected $table='secretaria';
    public $timestamps = false;



    public function Subsecretaria(){

        $this->hasMany('\App\Models\Sub_secretaria','idsecretaria');

    }




    static function secretaria(){

        $estao=Secretaria::all()->toArray();

        $pow['']='SELECCIONE...';
        foreach($estao as $esta) {

            $pow[$esta['id']]=$esta['descripcion'];

        }

        return $pow;



    }





}
