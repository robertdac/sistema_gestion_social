<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recomendaciones extends Model {

	protected $table='recomendaciones';
    public $timestamps=false;


    public function solicitudes()
    {
        return $this->belongsto('App\Models\Solicitudes', 'id_solicitud');

    }

  public function usuarios()
    {
        return $this->belongsto('App\User', 'id_usuarios');

    }





}
