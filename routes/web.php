<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\BusquedaController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para el módulo de empleados
Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleados.index');
Route::get('/empleados/create', [EmpleadosController::class, 'create'])->name('empleados.create');
Route::post('/empleados', [EmpleadosController::class, 'store'])->name('empleados.store');

// Rutas para el módulo de búsqueda
Route::get('/buscar', [BusquedaController::class, 'buscar'])->name('buscar');

// Más rutas para otros módulos y funcionalidades
