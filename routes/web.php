<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\lpk_controller;



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
    return view('welcome');
});

Route::get('/lpk',[lpk_controller::class,'index']);
Route::get('/rekap-umum',[lpk_controller::class,'index2']);
Route::get('/rekap-umum-add',[lpk_controller::class,'create']);
Route::post('/rekap-umum',[lpk_controller::class,'store']);
Route::get('/rekap-umum-edit/{id}',[lpk_controller::class,'edit']);
Route::put('/rekap-umum/{id}',[lpk_controller::class, 'update']);
