<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\HomeController;
use Database\Seeders\ComicSeeder;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::resource('comics', ComicController::class); 

// Rotta per visualizzare la lista dei dc comics
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

// Rotta per avere la pagina del form
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

// Rotta per salvare i dati sul Database
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

// Rotta per modificare i dati di un DC comic
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');

// Rotta per elminare un DC comic
Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');

// Rotta per l'update di un DC comic
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');

// Rotta per visualizzare i dettagli del singolo dc comic
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');
