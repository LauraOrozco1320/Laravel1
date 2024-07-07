<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeInstructorController;


Route::get('/',[HomeInstructorController::class,'index']);
Route::get('/aprendiz',[HomeInstructorController::class,'show'])->name('show');
Route::get('/notificacion',[HomeInstructorController::class,'create'])->name('create');
Route::get('/reportes',[HomeInstructorController::class,'store'])->name('store');
Route::get('/nombreUsuario',[HomeInstructorController::class,'edit'])->name('edit');
Route::get('/',[HomeInstructorController::class,'index'])->name('index');