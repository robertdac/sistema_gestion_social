<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EdoCivil extends Model {

    protected $table="edo_civil";

static function all_edo_civil(){

    $estao=EdoCivil::all()->toArray();

    foreach($estao as $esta) {

    $pow[$esta['id']]=$esta['descripcion'];

    }

return $pow;



}
}
