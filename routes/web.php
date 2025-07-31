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

//Rutas para el administrador - usuarios enfermeros
Route::get('/admin/enfermeros', [App\Http\Controllers\EnfermeroController::class, 'index'])->name('admin.enfermeros.index')->middleware('auth');
Route::get('/admin/enfermeros/create', [App\Http\Controllers\EnfermeroController::class, 'create'])->name('admin.enfermeros.create')->middleware('auth');
Route::post('/admin/enfermeros/create', [App\Http\Controllers\EnfermeroController::class, 'store'])->name('admin.enfermeros.store')->middleware('auth');
Route::get('/admin/enfermeros/{id}', [App\Http\Controllers\EnfermeroController::class, 'show'])->name('admin.enfermeros.show')->middleware('auth');
Route::get('/admin/enfermeros/{id}/edit', [App\Http\Controllers\EnfermeroController::class, 'edit'])->name('admin.enfermeros.edit')->middleware('auth');
Route::put('/admin/enfermeros/{id}', [App\Http\Controllers\EnfermeroController::class, 'update'])->name('admin.enfermeros.update')->middleware('auth');
Route::get('/admin/enfermeros/{id}/confirm-delete', [App\Http\Controllers\EnfermeroController::class, 'confirmDelete'])->name('admin.enfermeros.confirmDelete')->middleware('auth');
Route::delete('/admin/enfermeros/{id}', [App\Http\Controllers\EnfermeroController::class, 'destroy'])->name('admin.enfermeros.destroy')->middleware('auth');

//Rutas para el administrador - usuarios pacientes
Route::get('/admin/pacientes', [App\Http\Controllers\PacienteController::class, 'index'])->name('admin.pacientes.index')->middleware('auth');
Route::get('/admin/pacientes/create', [App\Http\Controllers\PacienteController::class, 'create'])->name('admin.pacientes.create')->middleware('auth');
Route::post('/admin/pacientes/create', [App\Http\Controllers\PacienteController::class, 'store'])->name('admin.pacientes.store')->middleware('auth');
Route::get('/admin/pacientes/{id}', [App\Http\Controllers\PacienteController::class, 'show'])->name('admin.pacientes.show')->middleware('auth');
Route::get('/admin/pacientes/{id}/edit', [App\Http\Controllers\PacienteController::class, 'edit'])->name('admin.pacientes.edit')->middleware('auth');
Route::put('/admin/pacientes/{id}', [App\Http\Controllers\PacienteController::class, 'update'])->name('admin.pacientes.update')->middleware('auth');
Route::get('/admin/pacientes/{id}/confirm-delete', [App\Http\Controllers\PacienteController::class, 'confirmDelete'])->name('admin.pacientes.confirmDelete')->middleware('auth');
Route::delete('/admin/pacientes/{id}', [App\Http\Controllers\PacienteController::class, 'destroy'])->name('admin.pacientes.destroy')->middleware('auth');