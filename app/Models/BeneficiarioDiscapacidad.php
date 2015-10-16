<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BeneficiarioDiscapacidad extends Model {

    protected $table="beneficiario_discapacidad";
    public $timestamps=false;


    public function personas(){

         return $this->belongsTo('\App\Models\Personas');


    }



}
