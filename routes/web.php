<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConditionerController;
use App\Http\Controllers\VentilationController;
use App\Http\Controllers\ServicesController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::resource('conditioners', ConditionerController::class);
Route::get('/ventilations', [VentilationController::class, 'index'])->name('ventilations.index');
Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
