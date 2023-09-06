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
    return "Datos actualizados: \n- Nombre: $name";
});
