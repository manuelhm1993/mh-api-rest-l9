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

// Verbos HTTP
//
// GET: devolver información
Route::get('/test', function () {
    return 'Hola Manuel';
});

// POST: enviar información
Route::post('/usuario/{name}', function ($name) {
    return "Datos enviados: \n- Nombre: $name";
});

// PUT: actualizar información
Route::put('/usuario/{name}', function ($name) {
    return "Datos actualizados put: \n- Nombre: $name";
});

// PATCH: actualizar información de forma parcial
Route::patch('/usuario/{name}', function ($name) {
    return "Datos actualizados patch: \n- Nombre: $name";
});

// DELETE: eliminar información
Route::delete('/usuario/{id}', function ($id) {
    return "Datos eliminados: \n- Id: $id";
});
