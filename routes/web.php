<?php

use App\Http\Controllers\PracticeController;
use App\Http\Controllers\MoviesController;
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


// Route::get('url), [Controller::class, 'function'];
Route::get('/practice', [PracticeController::class, 'sample']);
Route::get('/practice2', [PracticeController::class, 'sample2']);
Route::get('/practice3', [PracticeController::class, 'sample3']);
Route::get('/getPractice', [PracticeController::class, 'getPractice']);
Route::get('/movies', [MoviesController::class, 'search'])->name('movie.search');
Route::get('/admin/movies', [MoviesController::class, 'index'])->name('movie.index');
Route::get('/admin/movies/create', [MoviesController::class, 'create'])->name('movie.create');
Route::post('/admin/movies/store', [MoviesController::class, 'store'])->name('movie.store');
Route::get('/admin/movies/{id}/edit', [MoviesController::class, 'edit'])->name('movie.edit');
Route::patch('/admin/movies/{id}/update', [MoviesController::class, 'update'])->name('movie.update');
Route::delete('/admin/movies/{id}/destroy', [MoviesController::class, 'destroy'])->name('movie.destroy');