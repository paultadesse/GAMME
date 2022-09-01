<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ExhibitionController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Home');
});


Route::prefix('artists')->group(function() {
    Route::get('/', [ArtistController::class, 'index'])->name('artists.index');
    Route::get('{artist}',[ArtistController::class, 'show'])->name('artists.show');
    // don't forget to create view for artist work 
    Route::get('{artist}/works/{work}',[WorkController::class, 'show'])->name('artists.works.show');
    Route::get('{artist}/exhibitions/{exhibition}',[ExhibitionController::class, 'show'])->name('artists.exhibitions.show');
});
