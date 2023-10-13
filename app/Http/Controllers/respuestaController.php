<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class respuestaController extends Controller
{
    //
    public function index(){
        return response()->json([
            "succes"=>true,
            "data"=>"HOLA, SOY WASAUSKY",
            "message"=>"registro encontrado",
            "cantidad"=>1
        ]);
    }
}
