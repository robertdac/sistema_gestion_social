<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    protected $table = 'personas';
    //protected $primaryKey = 'cedula';
    public $timestamps = false;


    public function  beneficiario_discapacidad()
    {
        $this->hasMany('\App\Models\BeneficiarioDiscapacidad', 'id_beneficiario');
    }


    public function solicitud()
    {
        return $this->hasMany('\App\Models\Solicitudes', 'id_beneficiario');

    }


    public function ocupacion()
    {

        return $this->belongsTo('App\Models\Ocupacion', 'id_ocupacion');


    }

    public function estado()
    {
        return $this->belongsTo('App\Models\Estados', 'id_estado');


    }


    public function municipio()
    {
        return $this->belongsTo('App\Models\Municipios', 'id_municipio');


    }

    public function parroquia()
    {
        return $this->belongsTo('App\Models\Parroquias', 'id_parroquia');


    }

    public function edoCivil()
    {
        return $this->belongsTo('App\Models\EdoCivil', 'id_edocivil');


    }


}
