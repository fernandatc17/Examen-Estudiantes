<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstitucionController;
use App\Http\Controllers\EstudianteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/institucion', [InstitucionController::class,'index'])->name('institucion.index');
Route::get('/estudiantes', [EstudianteController::class,'index'])->name('estudiantes.index');
Route::get('/estudiantes/create', [EstudianteController::class,'create'])->name('estudiantes.create');
Route::post('/estudiantes/store', [EstudianteController::class,'store'])->name('estudiantes.store');
Route::get('/estudiantes/edit/{id}', [EstudianteController::class,'edit'])->name('estudiantes.edit');
Route::post('/estudiantes/update', [EstudianteController::class,'update'])->name('estudiantes.update');
Route::get('/estudiantes/delete/{id}', [EstudianteController::class,'destroy'])->name('estudiantes.destroy');
