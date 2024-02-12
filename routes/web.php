<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PublicationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


/*--------------------------------------
get   :lecture
post  :ajouter
put   :modification compléte
patch :modification partielle
delete:supprimer


connect
options
-----------------------------------------
*/



Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/publications/search', [PublicationController::class, 'search'])->name('publication.search');
Route::resource('publication',PublicationController::class);
