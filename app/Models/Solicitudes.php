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

    public function recomendaciones()
    {

        return $this->hasMany('App\Models\Recomendaciones', 'id_solicitud');

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


    /*
     Solo para el reporte del beneficiario
     */
    public function scopeReporte($query, $arre)
    {

        //05/02/2016
        //26/09/2016

     //   dd(\Carbon\Carbon::createFromFormat('d/m/Y',$arre['aprobado']['desde']));

        if ($arre['Rdesde'] <> "" && $arre['Rhasta'] <> "") {
            $desde = \Carbon\Carbon::createFromTimestamp($arre['Rdesde'])->toDateTimeString();
            $hasta = \Carbon\Carbon::createFromFormat('d/m/Y',$arre['Rhasta']);

            echo"<pre>";
            var_dump($hasta->date);
exit();

            $query->whereBetween('created_at', [$desde, $hasta]);


            /*    $query->join('recepcion','recepcion.id','=','solicitudes.id_trecepcion')
                ->where('recepcion.id',7);*/
        }

        if ($arre['aprobado']['desde'] <> "" && $arre['aprobado']['hasta'] <> "") {

            $desde1 = \Carbon\Carbon::createFromFormat('d/m/Y',$arre['aprobado']['desde']);
            $hasta2 = \Carbon\Carbon::createFromFormat('d/m/Y',$arre['aprobado']['hasta']);
            //$hasta2 = \Carbon\Carbon::parse($arre['aprobado']['hasta'])->toDateTimeString();

            //dd($desde1,$hasta2);


            $query->join('usuarios_solicitudes', 'usuarios_solicitudes.id_solicitud', '=', 'solicitudes.id')
            ->where('solicitudes.estatus', 3);
           // ->whereBetween('usuarios_solicitudes.fecha_registro', [$desde1, $hasta2]);


        }


    }


}
