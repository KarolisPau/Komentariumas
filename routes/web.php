<?php

use App\Http\Controllers\PlakataiController;
use App\Http\Controllers\KomentaraiController;
use App\Http\Controllers\VartotojasController;
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
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/login', function () {
    return view('auth.login')->name('login');
});

Route::get('/Plakatai', [PlakataiController::class, 'show'])
   ->middleware(['auth'])->name('topPlakatai');

Route::get('/Plakatai/Sukurti', [PlakataiController::class, 'createPoster'])
   ->middleware(['auth'])->name('createPoster');

Route::post('/Plakatai/Sukurti', [PlakataiController::class, 'imagePreview'])
   ->middleware(['auth'])->name('imagePreview');

Route::get('/Komentarai', [KomentaraiController::class, 'show'])
   ->middleware(['auth'])->name('topKomentarai');

Route::get('/Populiariausi', [PlakataiController::class, 'showPop'])
   ->middleware(['auth'])->name('pop');

Route::get('/vartotojas/nustatymai', [VartotojasController::class, 'settings'])
   ->middleware(['auth'])->name('settings');

require __DIR__.'/auth.php';


