<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//closure
Route::get("saludo",function(){
    return "hola desde api.php";
});
Route::get("/saludo2", function(){
    return ["mensaje" => "Hola este es otro mensaje"];
});
Route::get("persona", function(){
    $p1 = [
        "nombre" => "Juan",
        "edad" => 20
    ];
    $p2 = [
        "nombre" => "Maria",
        "edad" => 25
    ];
    $p3 = [
        "nombre" => "Pedro",
        "edad" => 30
    ];
    return [$p1, $p2, $p3];
});
