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

Route::view("/home","home")->name("home");
Route::view("/","ingreso")->name("ingreso");
Route::view("/registro","registro")->name("registro");
Route::view("/generar_rdi","generar_rdi")->name("generar_rdi");


