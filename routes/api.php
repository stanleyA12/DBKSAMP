<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\respuestaController;
use App\Http\Controllers\PaisController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get("/ejecutar",[respuestaController::class,"index"]);

Route::post("/nuevo",[PaisController::class,"crearPais"]);

Route::get("/obtener",[PaisController::class,"obtener"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
