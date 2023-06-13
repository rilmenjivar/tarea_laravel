<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/crear', function () {
    return view('crear');
});

Route::get('/guardar', [App\Http\Controllers\Controller::class, 'guardar'])->name('proyectos.formdataguardar');


Route::get('/proyectos/eliminar/{id}', [App\Http\Controllers\Controller::class, 'eliminar']);

Route::get('/proyectos/actualizar/{id}', [App\Http\Controllers\Controller::class, 'actualizar']);

Route::get('/proyectos/actualizardataformulario/{id}', [App\Http\Controllers\Controller::class, 'actualizardataformulario'])->name('proyectos.formactualizardata');

Route::get('/proyectos/informepdf/{id}', [App\Http\Controllers\Controller::class, 'informepdf'])->name('proyectos.pdf');

