<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table='citas';
    protected $primaryKey = 'idcita'; //IMPORTANTE AGREGAR SI LA COLUMNA DE LA TABLA NO SE LLAMA SOLO ID

    //relacion de muchos a uno

    public function user(){
        return $this->belongsTo('App\User','iduser');
    }

    public function servicio(){
        return $this->belongsTo('App\servicio','idservicio');
    }

}
