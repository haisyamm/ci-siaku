<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Latihan1;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckOngkirController;

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

Route::get('/',[HomeController::class, 'index']);

Route::get('/soal1', [Latihan1::class, 'index']);
Route::post('/hasil1',[Latihan1::class, 'check_hasil']);

Route::get('/ongkir',[CheckOngkirController::class, 'index']);
Route::post('/ongkir',[CheckOngkirController::class, 'check_ongkir']);
Route::get('/cities/{province_id}',[CheckOngkirController::class, 'getCities']);