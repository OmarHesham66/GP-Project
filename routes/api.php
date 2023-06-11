<?php

use App\Http\Controllers\api\ApiNutritionController;
use App\Http\Controllers\api\ApiStatusController;
use App\Http\Controllers\api\ApiWorkoutController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\TestApiController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::group([
////    'middleware' => 'api',
//    'prefix' => 'auth'
//], function ($router) {
//
//
//});



Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

//Route::get('/users',[TestApiController::class,'index']);





Route::group([
    'middleware' => 'jwt.verify',
], function ($router) {
//    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
    Route::get('/show-nutrition-system',[ApiNutritionController::class,'apiBuildNitritionSystem']);
    Route::get('/show-workout-system',[ApiWorkoutController::class,'apiBuildWorkoutSystem']);
    Route::get('/show-status',[ApiStatusController::class,'apiShowStatus']);
});
