<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\activosController;
use App\Http\Controllers\ambientesController;
use App\Http\Controllers\profesoresController;

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



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('/');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group( function () {
    Route::get('/', function () {
        return view('index');
    });
    Route::get('activos',[activosController::class,'index'])->name('activos.index');
    Route::get('activos/create',[activosController::class,'create'])->name('activos.create');
    Route::post('activos',[activosController::class,'store'])->name('activos.store');
    Route::get('activos/edit/{id}',[activosController::class,'edit'])->name('activos.edit');
    Route::put('activos{id}',[activosController::class,'update'])->name('activos.update');

    Route::get('activos/bajas',[activosController::class,'indexBajas'])->name('bajasActivos.index');

    Route::get('profesores',[ProfesoresController::class,'index'])->name('profesores.index');
    Route::get('profesores/create',[ProfesoresController::class,'create'])->name('profesores.create');
    Route::post('profesores',[ProfesoresController::class,'store'])->name('profesores.store');
    Route::get('profesores/edit/{id}',[ProfesoresController::class,'edit'])->name('profesores.edit');
    Route::put('profesores{id}',[ProfesoresController::class,'update'])->name('profesores.update');

    Route::get('aulas',[AmbientesController::class,'index'])->name('aulas.index');
    Route::get('aulas/create',[AmbientesController::class,'create'])->name('aulas.create');
    Route::post('aulas',[AmbientesController::class,'store'])->name('aulas.store');
    Route::get('aulas/edit/{id}',[AmbientesController::class,'edit'])->name('aulas.edit');
    Route::put('aulas{id}',[AmbientesController::class,'update'])->name('aulas.update');

    Route::get('categorias',[activosController::class,'categorias'])->name('categorias.index');

    Route::get('reportes',[activosController::class,'reportes'])->name('reportes.index');
});





