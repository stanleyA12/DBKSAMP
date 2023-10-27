<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;

class PaisController extends Controller
{
    //

    public function crearPais(Request $request){
        $Pais = new Pais();
        $Pais->nombre_pais = $request-> nombre;
        $Pais->save();

        return response()->json([
            "success"=>true,
            "message"=>"",
            "data"=> "Se creo el resgistro con id: ".$Pais->id,
            "cantidad" => 1
        ]);
    }

    public function obtener(){
        $Pais = new Pais();

        $datos = $Pais::All();

        return response()->json([
            "success"=>true,
            "message"=>"",
            "data"=> $datos,
            "cantidad" => 1
        ]);
    }
}
