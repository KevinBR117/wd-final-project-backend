<?php

<<<<<<< HEAD
use App\Http\Controllers\PersonalityController;
use Illuminate\Http\Request;
=======
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VarkTest\QuestionsController;
use App\Http\Controllers\VarkTest\VarkTestController;
>>>>>>> 2ac8870 (improve all the backend controllers, seeders, etc.)
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('create-vark-test', [VarkTestController::class, 'store']);
<<<<<<< HEAD
Route::get('read-vark-test', [VarkTestController::class, 'show']);
Route::get('get-preguntas', [PreguntaController::class, 'getPreguntas']);
Route::post('create-usuario', [UsuarioController::class, 'store']);
//route read usuario
//route update usuario
//route delete usuario

Route::get('get-personalities', [PersonalityController::class, 'getPersonalities']);


=======
Route::post('create-usuario', [UsersController::class, 'store']);

Route::get('read-vark-test', [VarkTestController::class, 'show']);
Route::get('get-preguntas', [QuestionsController::class, 'getQuestions']);
>>>>>>> 2ac8870 (improve all the backend controllers, seeders, etc.)
