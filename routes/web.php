<?php

use App\Http\Controllers\BatchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MatiController;
use App\Http\Controllers\PakanController;
use App\Http\Controllers\PanenController;
use App\Http\Controllers\TimbangController;
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

Route::get('/', [HomeController::class, "show"]);

Route::get('/batch-{ke}', [BatchController::class, 'show']);
Route::get('/tambah-batch', [BatchController::class, 'tambah']);
Route::post('/tambah-batch', [BatchController::class, 'insertBatch']);
Route::get('/tambah-jenis-ayam', [BatchController::class, 'tambahJenisAyam']);
Route::post('/tambah-jenis-ayam', [BatchController::class, 'insertJenisAyam']);


Route::get("/panen-{ke}", [PanenController::class, 'show']);
Route::post("/panen-{ke}", [PanenController::class, 'insertPanen']);

Route::get("/mati-{ke}", [MatiController::class, 'show']);
Route::post("/mati-{ke}", [MatiController::class, 'insertMati']);

Route::get("/timbang-{ke}", [TimbangController::class, 'show']);
Route::post("/timbang-{ke}", [TimbangController::class, 'insertTimbang']);

Route::get("/beri-pakan-{ke}", [PakanController::class, 'show']);
Route::post("/beri-pakan-{ke}", [PakanController::class, 'insertPakan']);

