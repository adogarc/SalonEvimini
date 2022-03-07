<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cita;
use App\Empleado;
use App\Servicio;

class PruebasController extends Controller
{
    public function testOrm(){
        $cita=Cita::all();

        foreach ($cita as $date){
            echo "<h1>".$date->idservicio."</h1>";
            echo "<h1>".$date->idempleado."</h1>";
            echo "<h1>".$date->fecha_cita."</h1>";
            echo "<h1>".$date->emailuser."</h1>";
            echo "<span>{$date->user->email}-{$date->servicio->nombreservicio}</span";
        }
        die();
}
}
