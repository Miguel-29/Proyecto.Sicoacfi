<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\activosController;
use App\Http\Controllers\ambientesController;
use App\Http\Controllers\profesoresController;
use App\Http\Controllers\reporteController;

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

Route::middleware(['my_auth', 'auth:sanctum', 'verified'])->group( function () {
    Route::get('/', function () {
        return view('index');
    })->name('home');
    Route::get('logout')->name('logout');
    // Route::get('/',[activosController::class,'index'])->name('activos.index');

    Route::get('activos',[activosController::class,'index'])->name('activos.index');
    Route::get('activos/key/{id}',[activosController::class,'indexKey'])->name('activosKey.index');
    Route::get('activos/create',[activosController::class,'create'])->name('activos.create');
    Route::post('activos',[activosController::class,'store'])->name('activos.store');
    Route::get('activos/edit/{id}',[activosController::class,'edit'])->name('activos.edit');
    Route::put('activos{id}',[activosController::class,'update'])->name('activos.update');
    Route::put('activos/environ/{id}',[activosController::class,'updateEnviro'])->name('activos.updateEnviro');
    Route::put('activos/teacher/{id}',[activosController::class,'updateTeacher'])->name('activos.updateTeacher');
    Route::delete('activos/{id}',[activosController::Class,'delete'])->name('activos.delete');
    
    Route::get('activos/bajas',[activosController::class,'indexBajas'])->name('bajasActivos.index');
    Route::get('activos/restaurar/{id}',[activosController::class,'restoreAsset'])->name('bajasActivos.restore');
    // Route::delete('activos/{id}',[activosController::Class,'deletes'])->name('bajasActivos.delete');

    Route::get('profesores',[ProfesoresController::class,'index'])->name('profesores.index');
    Route::get('profesores/create',[ProfesoresController::class,'create'])->name('profesores.create');
    Route::post('profesores',[ProfesoresController::class,'store'])->name('profesores.store');
    Route::get('profesores/edit/{id}',[ProfesoresController::class,'edit'])->name('profesores.edit');
    Route::put('profesores{id}',[ProfesoresController::class,'update'])->name('profesores.update');
    Route::delete('profesores/{id}',[ProfesoresController::Class,'delete'])->name('profesores.delete');

    Route::get('aulas',[AmbientesController::class,'index'])->name('aulas.index');
    Route::get('aulas/create',[AmbientesController::class,'create'])->name('aulas.create');
    Route::post('aulas',[AmbientesController::class,'store'])->name('aulas.store');
    Route::get('aulas/edit/{id}',[AmbientesController::class,'edit'])->name('aulas.edit');
    Route::put('aulas{id}',[AmbientesController::class,'update'])->name('aulas.update');
    Route::delete('aulas/{id}',[AmbientesController::Class,'delete'])->name('aulas.delete');

    Route::get('activos/tecnologia',[activosController::class,'showtecnhology'])->name('showtecnhology.index');
    Route::get('activos/muebles',[activosController::class,'showfurniture'])->name('showfurniture.index');
    
    Route::get('reportes',[reporteController::class,'index'])->name('reportes.index');
    Route::get('reportes/activos',[reporteController::class,'download'])->name('reportes.descarga');
    Route::get('reportes/bajas',[reporteController::class,'downloadDown'])->name('reportesbajas.descarga');
});





