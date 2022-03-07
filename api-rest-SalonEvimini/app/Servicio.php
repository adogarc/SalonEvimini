<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table='servicios';
    protected $primaryKey = 'idservicio'; //IMPORTANTE AGREGAR SI LA COLUMNA DE LA TABLA NO SE LLAMA SOLO ID

    public function cita(){
        return $this->belongsTo('App\Cita','idcita');
    }
}
