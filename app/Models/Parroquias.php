<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parroquias extends Model {

	protected $table='parroquia';


    static function parroquias(){

        $estao=Parroquias::all()->toArray();

        foreach($estao as $esta) {

            $pow[$esta['id']]=$esta['nombre'];

        }

        return $pow;



    }




}
