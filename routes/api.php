<?php

use App\Http\Controllers\UsersController;

use App\Http\Controllers\CommentController;
use App\Http\Controllers\VarkTestController;

use App\Http\Controllers\PersonalityTestController;
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

Route::post('create-user', [UsersController::class, 'store']);// endpoint para crear usuario cuando realiza uno de los dos test

// #################################################################################

Route::get('get-vark-questions', [VarkTestController::class, 'getQuestions']);
Route::get('read-user-vark-test', [VarkTestController::class, 'show']);

Route::post('send-user-vark-test', [VarkTestController::class, 'store']);

Route::get('get-vark-test-by-type', [VarkTestController::class, 'getVarkTestByType']);//test por tipo endpoint con parametro varkType
Route::get('get-all-vark-test', [VarkTestController::class, 'getAllVarkTest']); //todos los test endpoint sin parametros

Route::get('get-user-vark-test-file-to-pdf', [VarkTestController::class, 'exportVarkTest']);// exportar test a pdf (request email)
Route::get('get-all-vark-test-file-to-pdf', [VarkTestController::class, 'exportAllVarkTest']);// exportar todos los test en un pdf (sin request sin parametros)
Route::get('get-vark-test-by-type-file-to-pdf', [VarkTestController::class, 'exportVarkTestByType']);//  exportar por tipo de test (request varkType {visual, aural, read, kinesthetic})

// Route::get('get-user-vark-test-file-to-excel', [VarkTestController::class, 'exportVarkTestToExcel']);// esportar test a excel (request email)

// ####################################################################################################

Route::get('get-personalities-questions', [PersonalityTestController::class, 'getPersonalities']);
Route::get('get-personality-main-char', [PersonalityTestController::class, 'getMainCharacteristics']);
Route::get('get-personality-main-dangers', [PersonalityTestController::class, 'getMainDangers']);
Route::get('get-personality-main-suggestions', [PersonalityTestController::class, 'getMainSuggestions']);

Route::post('send-user-personality-test', [PersonalityTestController::class, 'store']);

Route::get('get-user-personality-test-to-pdf', [PersonalityTestController::class, 'show']); //test individual endpoint con parametro email
Route::get('get-personality-test-by-type-to-pdf', [PersonalityTestController::class, 'getPersonalityTestByType']);//test por tipo endpoint con parametro personalityType
Route::get('get-all-personality-test-to-pdf', [PersonalityTestController::class, 'getAllPersonalityTest']); //todos los test endpoint sin parametros

// ####################################################################################################

Route::post('send-comments', [CommentController::class, 'store']);
Route::get('get-comments-file', [CommentController::class, 'exportPDF']);//exportar archivo pdf de comentarios

// ################################################## endpoints para dashboards #############################################
// ################# varktest ######################
route::get('get-total-vark-test', [VarkTestController::class, 'getTotalVarkTest']); //request none
route::get('get-count-vark-test-by-type', [VarkTestController::class, 'getCountVarkTestByType']); //request varkType{visual,aural,read,kinesthetic}
// #################################################

// ################# personalitytest ###############
route::get('get-total-personality-test', [PersonalityTestController::class, 'getTotalPersonalityTest']); //request none
route::get('get-count-personality-test-by-type', [VarkTestController::class, 'getCountPersonalityTestByType']); //request personalityTypeObtained = {Técnico Analítico, Controlador, Apoyo, Social}
// #################################################
