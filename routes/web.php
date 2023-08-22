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

Route::get('/work', [WorkController::class, 'index'])->name('work');
//Route::post('/work', [WorkController::class, 'store'])->name('work.store');
Route::post('/confirm', [WorkController::class, 'store'])->name('confirm');
