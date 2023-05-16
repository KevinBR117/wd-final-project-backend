<?php


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

Route::get('get-personalities', [PersonalityController::class, 'getPersonalities']);
Route::post('send-personality-test', [PersonalityTestController::class, 'store']);
route::get('read-personality-test', [VarkTestController::class, 'show']);
// Route::post('create-usuario', [UsersController::class, 'store']);


