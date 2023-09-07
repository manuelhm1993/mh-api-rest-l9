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

// Verbos HTTP                                    -> CRUD
//
// GET: devolver información                      -> R
Route::get('/test', function () {
    return 'Hola Manuel';
});

// POST: enviar información                       -> C
Route::post('/usuario/{name}', function ($name) {
    return "Datos enviados: \n- Nombre: $name";
});

// PUT: actualizar información                    -> U
Route::put('/usuario/{name}', function ($name) {
    return "Datos actualizados put: \n- Nombre: $name";
});

// PATCH: actualizar información de forma parcial -> U
Route::patch('/usuario/{name}', function ($name) {
    return "Datos actualizados patch: \n- Nombre: $name";
});

// DELETE: eliminar información                   -> D
Route::delete('/usuario/{id}', function ($id) {
    return "Datos eliminados: \n- Id: $id";
});

// Ejercicio RANDOM
Route::get('/random/{min}/{max}', function ($min, $max) {
    // Número aleatorio en el rango especificado
    $numero_aleatorio = rand($min, $max);

    // Array con los datos de la respuesta
    $data = ['numero_aleatorio' => $numero_aleatorio];

    // Status de respuesta
    $status = 200;

    return response()->json($data, $status);
});
