<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class respuestaController extends Controller
{
    /**
 * 
 * Descripcion de prueba para la clase de desarrollo de backend y API desarrollada por todo el equipo.
 * @return \Illuminate\Http\Response
 *
 * @OA\Get(
 *     path="/api/",
 *     tags={"ejecutar"},
 *     summary="Este es un endpoint/metodo para obtener datos y mostrar al usuario",
 *     @OA\Response(
 *         response=200,
 *         description="Se devuelven todos los registros"
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="Se devuelve todos los reistros cuando la consulta sea satisfactoria."
 *     )
 * ) 
 */
    public function index() {
        return response()->json([
            "success"=>true, 
            "data"=>"Hola, soy Stanley Portillo",
            "message"=>"Registro Encontrado",
            "ammount"=>1
        ]);
    }
}