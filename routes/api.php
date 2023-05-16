<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\VarkTest\QuestionsController;
use App\Http\Controllers\VarkTest\VarkTestController;

use App\Http\Controllers\PersonalityTest\PersonalityController;
use App\Http\Controllers\PersonalityTest\PersonalityTestController;
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

Route::get('get-questions', [QuestionsController::class, 'getQuestions']);
Route::post('send-vark-test', [VarkTestController::class, 'store']);
Route::get('read-vark-test', [VarkTestController::class, 'show']);
// exportar test a pdf (request email)
Route::get('get-vark-test-file', [VarkTestController::class, 'exportVarkTest']);
// exportar todos los test en un pdf (sin request sin parametros)
Route::get('get-all-vark-test-file', [VarkTestController::class,'exportAllVarkTest']);
// exportar por tipo de test (request varkType {visual, aural, read, kinesthetic})
Route::get('get-vark-test-by-type-file', [VarkTestController::class, 'exportVarkTestByType']);


Route::get('get-personalities', [PersonalityController::class, 'getPersonalities']);
Route::post('send-personality-test', [PersonalityTestController::class, 'store']);
route::get('read-personality-test', [VarkTestController::class, 'show']);
// Route::post('create-usuario', [UsersController::class, 'store']);

Route::post('send-comments', [CommentController::class, 'store']);
//exportar archivo pdf de comentarios
Route::get('get-comments-file', [CommentController::class, 'exportPDF']);
