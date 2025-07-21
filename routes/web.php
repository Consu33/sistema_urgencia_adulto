<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Rutas para el administrador
Route::get('/admin', [App\Http\Controllers\AdministradorController::class, 'index'])->name('admin.index')->middleware('auth');

//Rutas para el administrador - usuarios admisiones
//GET para mostrar los datos - POST para insertar los datos - PUT para actualizar los datos - DELETE para eliminar los datos
Route::get('/admin/admisiones', [App\Http\Controllers\AdminisionController::class, 'index'])->name('admin.admisiones.index')->middleware('auth');
Route::get('/admin/admisiones/create', [App\Http\Controllers\AdminisionController::class, 'create'])->name('admin.admisiones.create')->middleware('auth');
Route::post('/admin/admisiones/create', [App\Http\Controllers\AdminisionController::class, 'store'])->name('admin.admisiones.store')->middleware('auth');
Route::get('/admin/admisiones/{id}', [App\Http\Controllers\AdminisionController::class, 'show'])->name('admin.admisiones.show')->middleware('auth');
Route::get('/admin/admisiones/{id}/edit', [App\Http\Controllers\AdminisionController::class, 'edit'])->name('admin.admisiones.edit')->middleware('auth');
Route::put('/admin/admisiones/{id}', [App\Http\Controllers\AdminisionController::class, 'update'])->name('admin.admisiones.update')->middleware('auth');
Route::get('/admin/admisiones/{id}/confirm-delete', [App\Http\Controllers\AdminisionController::class, 'confirmDelete'])->name('admin.admisiones.confirmDelete')->middleware('auth');
Route::delete('/admin/admisiones/{id}', [App\Http\Controllers\AdminisionController::class, 'destroy'])->name('admin.admisiones.destroy')->middleware('auth');