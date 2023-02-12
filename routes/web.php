<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JuegosController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('juegos_fisicos',[ App\Http\Controllers\JuegosController::class, 'juegosFisicosIndex'])->name('juegos.fisicos.index');
Route::get('juegos_digitales',[App\Http\Controllers\JuegosController::class, 'juegosDigitalesIndex'])->name('juegos.digitales.index');
Route::get('juego/{id}',[App\Http\Controllers\JuegosController::class, 'juegoDetalle'])->name('juegos.detalle');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('addCart',[App\Http\Controllers\CartController::class, 'addCart'])->name('add.cart');

});

require __DIR__.'/auth.php';
