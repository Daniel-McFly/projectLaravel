<?php

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

Route::get('/listar-maquinas', [\App\Http\Controllers\MachinesController::class, 'index']);

Route::get('/visualizar-maquinas/{id}', [\App\Http\Controllers\MachinesController::class, 'show']);
