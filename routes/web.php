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

Route::get('/batch-{id}', [BatchController::class, 'show']);
Route::get('/tambah-batch', [BatchController::class, 'tambah']);
Route::post('/tambah-batch', [BatchController::class, 'insertBatch']);
Route::get('/tambah-jenis-ayam', [BatchController::class, 'tambahJenisAyam']);
Route::post('/tambah-jenis-ayam', [BatchController::class, 'insertJenisAyam']);


Route::get("/panen-{id}", [PanenController::class, 'show']);
Route::post("/panen-{id}", [PanenController::class, 'insertPanen']);

Route::get("/mati-{id}", [MatiController::class, 'show']);
Route::post("/mati-{id}", [MatiController::class, 'insertMati']);

Route::get("/timbang-{batchId}", [TimbangController::class, 'show']);
Route::post("/timbang-{batchId}", [TimbangController::class, 'insertTimbang']);

Route::get("/beri-pakan-{batchId}", [PakanController::class, 'show']);
Route::post("/beri-pakan-{batchId}", [PakanController::class, 'insertPakan']);

