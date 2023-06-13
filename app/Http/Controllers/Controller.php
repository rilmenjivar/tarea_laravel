<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function guardar(Request $request){
        $NombreProyecto = $request->input('NombreProyecto');
        $fuenteFondos = $request->input('fuenteFondos');
        $MontoPlanificado = $request->input('MontoPlanificado');
        $MontoPatrocinado = $request->input('MontoPatrocinado');                
        $MontoFondosPropios = $request->input('MontoFondosPropios');
        DB::insert("INSERT INTO proyectos (NombreProyecto,fuenteFondos,MontoPlanificado,MontoPatrocinado,MontoFondosPropios)
        VALUES ('$NombreProyecto','$fuenteFondos',$MontoPlanificado,$MontoPatrocinado,$MontoFondosPropios)");
        return view('crear');
        echo "guardar";
    }
}
