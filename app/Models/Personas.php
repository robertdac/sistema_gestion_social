<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{

    protected $table = 'personas';
    protected $primaryKey = 'cedula';
    public $timestamps = false;


    public function  beneficiario_discapacidad()
    {
        $this->hasMany('\App\Models\BeneficiarioDiscapacidad', 'id_beneficiario');
    }


    public function solicitud()
    {
        return $this->hasMany('\App\Models\Solicitudes', 'id_beneficiario');

    }


}
