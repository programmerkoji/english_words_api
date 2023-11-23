<?php

use App\Http\Controllers\WordController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    \Log::info("Laravel Log TEST!");

    return view('welcome');
});

Route::resource('words', WordController::class)
->middleware('auth')->except(['show']);

Route::prefix('words')->
    middleware('auth')->group(function(){
    Route::patch('answerMemoryUpdate/{word}', [WordController::class, 'answerMemoryUpdate'])->name('words.answerMemoryUpdate');
});

require __DIR__.'/auth.php';
