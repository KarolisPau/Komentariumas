<?php

use App\Http\Controllers\PlakatasController;
use App\Http\Controllers\KomentarasController;
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

Route::get('/', [PlakatasController::class, 'index']);

Route::get('/dashboard', [PlakatasController::class, 'index'])
   ->middleware(['auth'])->name('dashboard');

Route::get('/login', function () {
    return view('auth.login')->name('login');
});

Route::get('/Plakatai', [PlakatasController::class, 'showtop'])
   ->middleware(['auth'])->name('topPlakatai');

Route::get('/plakatas/{id}', [PlakatasController::class, 'show'])
   ->middleware(['auth'])->name('showPlakatas');

Route::post('/plakatas/{id}', [KomentarasController::class, 'store'])
   ->middleware(['auth'])->name('Komentuoti');

Route::get('/Plakatai/Sukurti', [PlakatasController::class, 'createPoster'])
   ->middleware(['auth'])->name('createPoster');

Route::post('/Plakatai/Sukurti', [PlakatasController::class, 'store'])
   ->middleware(['auth'])->name('sukurtiPlakata');

   
Route::get('/Komentarai', [KomentarasController::class, 'index'])
   ->middleware(['auth'])->name('topKomentarai');

Route::get('/Populiariausi', [PlakatasController::class, 'showPop'])
   ->middleware(['auth'])->name('pop');



Route::get('/vartotojas/nustatymai', [VartotojasController::class, 'settings'])
   ->middleware(['auth'])->name('settings');

require __DIR__.'/auth.php';


