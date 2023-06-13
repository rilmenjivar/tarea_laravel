<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use PDF;

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



public function actualizar($id) {
    $proyectos = DB::select("SELECT * FROM Proyectos WHERE id=$id");
    return view('actualizar', 
                [
                'id' => $proyectos[0]->id,
                'NombreProyecto' => $proyectos[0]->NombreProyecto,
                'fuenteFondos' => $proyectos[0]->fuenteFondos,
                'MontoPlanificado' => $proyectos[0]->MontoPlanificado,
                'MontoPatrocinado' => $proyectos[0]->MontoPatrocinado,
                'MontoFondosPropios' => $proyectos[0]->MontoFondosPropios
                ],
            );
}


public function actualizardataformulario($id, Request $request) {
    $NombreProyecto = $request->input('NombreProyecto');
    $fuenteFondos = $request->input('fuenteFondos');
    $MontoPlanificado = $request->input('MontoPlanificado');
    $MontoPatrocinado = $request->input('MontoPatrocinado');                
    $MontoFondosPropios = $request->input('MontoFondosPropios');
    DB::update("UPDATE proyectos SET NombreProyecto='$NombreProyecto',fuenteFondos='$fuenteFondos',MontoPlanificado=$MontoPlanificado,MontoPatrocinado=$MontoPatrocinado,MontoFondosPropios=$MontoFondosPropios WHERE id = $id");
    return redirect('/');
}


public function eliminar($id) {
    DB::delete("DELETE FROM Proyectos WHERE id = $id");
    return redirect('/');
}



}