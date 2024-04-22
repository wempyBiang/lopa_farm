<?php

use App\Http\Controllers\BatchController;
use App\Http\Controllers\MatiController;
use App\Http\Controllers\PanenController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/batch', [BatchController::class, 'show']);

Route::get("/panen", [PanenController::class, 'show']);

Route::get("/mati", [MatiController::class, 'show']);
