<?php

use App\Http\Controllers\RenianController;
use App\Http\Controllers\SuneduController;
use App\Http\Controllers\SusaludController;
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
    return view('welcome');
});

Route::group(['prefix' => 'renian'], function() {
    Route::get('/execute', [RenianController::class, 'execute']);
});


Route::group(['prefix' => 'susalud'], function() {
    Route::get('/execute', [SusaludController::class, 'execute']);
});


Route::group(['prefix' => 'sunedu'], function() {
    Route::get('/execute', [SuneduController::class, 'execute']);
});
