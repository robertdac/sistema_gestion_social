<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model {


    protected $table='secretaria';
    public $timestamps = false;



    public function Subsecretaria(){

       return $this->hasMany('\App\Models\Sub_secretaria','idsecretaria');

    }










}
