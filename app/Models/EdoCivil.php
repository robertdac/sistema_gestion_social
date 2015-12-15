<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EdoCivil extends Model {

    protected $table="edo_civil";



    public  function personas(){

        return $this->belongsTo('App\Models\Personas','id_edocivil');





    }



}
