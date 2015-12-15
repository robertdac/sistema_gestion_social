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

    public function socio_demografico()
    {

        return $this->hasMany('App\Models\SocioDemografico', 'id_solicitud');

    }

    public function ingresos_grupo()
    {

        return $this->hasMany('App\Models\IngresosGrupo', 'id_solicitud');


    }

    public function egresos_grupo()
    {

        return $this->hasMany('App\Models\EgresoGrupo', 'id_solicitud');


    }


    public function  parentesco()
    {
        return $this->hasManyThrough('App\Models\parentesco', 'App\Models\IngresosGrupo', 'id_solicitud', 'id_parentesco');

    }


    public function coordinacion()
    {
        return $this->belongsTo('App\Models\Coordinacion', 'id_coordinaciones');

    }

    public function tipoSolicitud()
    {
        return $this->belongsTo('App\Models\TipoSolicitud', 'id_tsolicitud');
    }

    public function recepcion()
    {
        return $this->belongsTo('App\Models\Recepcion', 'id_trecepcion');

    }

    public function  beneficiario()
    {

        return $this->belongsTo('App\Models\Personas', 'id_beneficiario');

    }

    public function  solicitante()
    {

        return $this->belongsTo('App\Models\Personas', 'id_solicitante');

    }

    public function estatus()
    {
        return $this->belongsTo('App\Models\Estatus', 'id_estatus');

    }


}
