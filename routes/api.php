<?php

use App\Models\User;
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
    $data = []; // Array con los datos de la respuesta
    $status = 200; // Status de respuesta

    if(!is_numeric($min) || !is_numeric($max)) {
        $data = ['Error' => 'Se esperaban valores de tipo numérico'];
        $status = 400;

        return response()->json($data, $status);
    }

    $numero_aleatorio = rand($min, $max);// Número aleatorio en el rango especificado
    $data = ['numero_aleatorio' => $numero_aleatorio];

    return response()->json($data, $status);
});

// ------------------------------------------------------------------- Versionando
//
// Endpoints: en las APIs los endpoints son los puntos de acceso o rutas
//
// La api devuelve todos los usuarios con todos sus datos
Route::get('/users', function () {
    $users = User::all();

    $data = ['users' => $users];
    $status = 200;

    return response()->json($data, $status);
});

// Permite crear un nuevo usuario con los datos de entrada
Route::post('/users', function (Request $request) {
    $user = User::create([
        'name'     => $request->name,
        'email'    => $request->email,
        'password' => bcrypt($request->password),
    ]);

    $data = ['user' => $user];
    $status = 200;

    return response()->json($data, $status);
});
