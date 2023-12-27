<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\lpk_controller;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KegiatanPengembanganController;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('homepage');
// });

Route::get('/', [PostController::class, 'index']);
Route::get('/{slug}', [PostController::class, 'show']);

Route::get('/lpk', [lpk_controller::class, 'index']);
Route::get('/rekap-umum', [lpk_controller::class, 'index2']);
Route::get('/detail-page/{id}', [lpk_controller::class, 'detail']);
Route::get('/rekap-umum-eksport', [lpk_controller::class, 'export']);
// Route::get('/rekap-umum-eksport',[lpk_controller::class,'view_pdf']);
Route::get('/rekap-umum-add', [lpk_controller::class, 'create']);
Route::post('/rekap-umum', [lpk_controller::class, 'store']);
Route::get('/rekap-umum-edit/{id}', [lpk_controller::class, 'edit']);
Route::put('/rekap-umum/{id}', [lpk_controller::class, 'update']);
Route::delete('/rekap-umum/{id}', [lpk_controller::class, 'destroy']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/about', [AboutController::class, 'index']);

Route::get('/kegiatan-pengembangan', [KegiatanPengembanganController::class, 'index']);
Route::get('/kegiatan-pengembangan-add', [KegiatanPengembanganController::class, 'create']);
Route::post('/kegiatan-pengembangan', [KegiatanPengembanganController::class, 'store']);
