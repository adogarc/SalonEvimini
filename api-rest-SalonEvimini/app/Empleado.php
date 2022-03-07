<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table='empleados';
    protected $primaryKey = 'idemplado'; //IMPORTANTE AGREGAR SI LA COLUMNA DE LA TABLA NO SE LLAMA SOLO ID

    //relacion de muchos a uno

    public function cita(){
        return $this->belongsTo('App\Cita','idcita');
    }
}
