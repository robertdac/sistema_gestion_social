<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RealidadSocioeconomica extends Model
{

    protected $table = "realidad_socieconomica";


    public function solicitud()
    {
        return $this->hasMany('\App\Models\Solicitudes', 'id_realidad_socieco');

    }


}
