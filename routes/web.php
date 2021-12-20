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

Route::view("/home_proyectos","home_proyectos")->name("home_proyectos");
Route::view("/home_rdi","home_rdi")->name("home_rdi");
Route::view("/","ingreso")->name("ingreso");
Route::view("/registro","registro")->name("registro");
Route::view("/generar_rdi","generar_rdi")->name("generar_rdi");
Route::view("/responder_rdi","responder_rdi")->name("responder_rdi");
Route::view("/ingreso_admin","ingreso_admin")->name("ingreso_admin");

// Rutas de Administrador

Route::view("/admin_home","admin_home")->name("admin_home");
Route::view("/admin_ingreso_proyecto","admin_ingreso_proyecto")->name("admin_ingreso_proyecto");
Route::view("/admin_proyectos","admin_proyectos")->name("admin_proyectos");
Route::view("/admin_solicitudes","admin_solicitudes")->name("admin_solicitudes");