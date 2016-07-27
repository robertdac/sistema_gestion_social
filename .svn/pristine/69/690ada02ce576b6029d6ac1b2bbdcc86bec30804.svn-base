<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Recepcion extends Model {

    protected $table='recepcion';
    public $timestamps = false;


    public function solicitudes()
    {

        return $this->hasMany('App\Models\Solicitudes', 'id_trecepcion');

    }




}
