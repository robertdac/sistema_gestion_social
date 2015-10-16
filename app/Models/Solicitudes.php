<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitudes extends Model
{
    protected $table = "solicitudes";

    public function usuarios()
    {
        return $this->belongsToMany('App\User', 'usuarios_solicitudes', 'id_solicitud', 'id_usuario')
            ->withPivot('estatus', 'fecha_registro');

    }

    public function socio_demografico(){

        return  $this->hasMany('App\Models\SocioDEmografico');



    }





}
