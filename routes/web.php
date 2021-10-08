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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/encuestas', [App\Http\Controllers\EncuestasController::class, 'index'])->name('encuestas.index');
Route::get('/encuestas/create', [App\Http\Controllers\EncuestasController::class, 'create'])->name('encuestas.create');
Route::post('/encuestas/store', [App\Http\Controllers\EncuestasController::class, 'store'])->name('encuestas.store');
Route::get('/encuestas/edit/{id}', [App\Http\Controllers\EncuestasController::class, 'edit'])->name('encuestas.edit');
Route::put('/encuestas/update/{id}', [App\Http\Controllers\EncuestasController::class, 'update'])->name('encuestas.update');
Route::delete('/encuestas/delete/{id}', [App\Http\Controllers\EncuestasController::class, 'delete'])->name('encuestas.delete');

