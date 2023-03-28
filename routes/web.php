<?php

use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\BobotController;
use App\Http\Controllers\SkalaController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\RankingController;
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
    return view('index');
});

Route::resource('kriteria', KriteriaController::class);
Route::resource('alternatif', AlternatifController::class);
Route::resource('bobot', BobotController::class);
Route::resource('skala', SkalaController::class);
Route::resource('penilaian', PenilaianController::class);
Route::resource('ranking', RankingController::class);




