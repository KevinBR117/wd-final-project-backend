<?php

use App\Http\Controllers\PersonalityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\VarkTestController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('create-vark-test', [VarkTestController::class, 'store']);
Route::get('read-vark-test', [VarkTestController::class, 'show']);
Route::get('get-preguntas', [PreguntaController::class, 'getPreguntas']);
Route::post('create-usuario', [UsuarioController::class, 'store']);
//route read usuario
//route update usuario
//route delete usuario

Route::get('get-personalities', [PersonalityController::class, 'getPersonalities']);


