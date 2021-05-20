<?php

use App\Http\Controllers\PlakatasController;
use App\Http\Controllers\KomentarasController;
use App\Http\Controllers\VartotojasController;
use App\Http\Controllers\MemesController;
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


Route::get('/memeapi', [MemesController::class, 'images'])
->middleware(['auth'])->name('ApiForma');

Route::get('/memesave', [MemesController::class, 'htmlrequestas'])
  ->middleware(['auth'])->name('bandymas');


Route::get('/Plakatai', [PlakatasController::class, 'showtop'])
   ->middleware(['auth'])->name('topPlakatai');

Route::get('/plakatas/{id}', [PlakatasController::class, 'show'])
   ->middleware(['auth'])->name('showPlakatas');

Route::post('/plakatas/{id}', [KomentarasController::class, 'store'])
   ->middleware(['auth'])->name('Komentuoti');

Route::get('/Plakatai/Sukurti', [PlakatasController::class, 'kurimoForma'])
   ->middleware(['auth'])->name('plakatoForma');

Route::post('/Plakatai/Sukurti', [PlakatasController::class, 'store']) 
   ->middleware(['auth'])->name('sukurtiPlakata');

   
Route::get('/Komentarai', [KomentarasController::class, 'index'])
   ->middleware(['auth'])->name('topKomentarai');

Route::get('/Populiariausi', [PlakatasController::class, 'showPop'])
   ->middleware(['auth'])->name('pop');
//route grupe

Route::get('/vartotojas/nustatymai', [VartotojasController::class, 'settings'])
   ->middleware(['auth'])->name('settings');

   Route::get('/phpinfo', function() {
      return phpinfo();
  });

  
   /*

   ApiForma

    API Routes

   */
  Route::group(array('prefix' => 'api/v1', 'before' => 'auth.basic'), function()
{
    Route::resource('pages', 'PagesController', array('only' => array('index', 'store', 'show', 'update', 'destroy')));
    Route::resource('users', 'UsersController');
});

require __DIR__.'/auth.php';


