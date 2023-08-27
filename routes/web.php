<?php

use App\Http\Controllers\WorkController;
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
    return view('welcome');
});

Route::group(['prefix' => 'works', 'as' => 'works.'], function () {
    Route::get('/', [WorkController::class, 'index'])->name('index');
    Route::post('/store', [WorkController::class, 'store'])->name('store');
});
