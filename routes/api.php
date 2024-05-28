<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\WordController;
use App\Http\Controllers\Api\LoginController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('login', [AuthController::class, 'login']);
// Route::post('test/login', [LoginController::class, 'login_test']);

Route::group(
    ['middleware' => 'auth:sanctum'],
    function () {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::apiResource('words', WordController::class)->except('show');
    }
);
