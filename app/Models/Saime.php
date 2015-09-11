<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Saime extends Model {

    //protected $connection = 'pgsql';
    //protected  $table ="tabla2";


    /**
     * Busca una cedula en la data del saime.
     *
     * @param  string $nac
     * @param int $ci
     *
    */

    static function datos($nac,$ci){


        $datos = DB::connection('pgsql')->select("SELECT saime.buscar_diex($nac,$ci)");

        /** validamos si la cedula existe*/

        ( $datos[0]->buscar_diex == "(,,,,,,,,,)" ) ?  $datos= array(NULL,'No existe el ciudadano') : $datos;

          return $datos;


    }





}
