<?php

use App\Http\Controllers\LibrosController;
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

//Route::get('/addLibro', [LibrosController::class, 'addLibro']);
Route::get('/modifyLibro', [LibrosController::class, 'modifyLibro']);
Route::get('/destroyLibro', [LibrosController::class, 'destroyLibro']);
Route::get('/showFormAddLibro', [LibrosController::class, 'showFormAddLibro']);
Route::post('/addLibroForm', [LibrosController::class, 'addLibroForm'])->name('addLibroForm');
Route::get('/showLibros', [LibrosController::class, 'showLibros']);
Route::get('/destroyLibro/{id}', [LibrosController::class, 'destroyLibro'])->name('destroyLibro');
Route::get('/modifyLibroForm/{id}', [LibrosController::class, 'modifyLibroForm'])->name('modifyLibroForm');
Route::post('/modifyLibro', [LibrosController::class, 'modifyLibro'])->name('modifyLibro');
