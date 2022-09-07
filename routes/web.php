<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ArtistExhibitionController;
use App\Http\Controllers\ArtistWorkController;
use App\Http\Controllers\Auth\AdminArtistController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::prefix('artists')->group(function() {
    Route::get('/', [ArtistController::class, 'index'])->name('artists.index');
    Route::get('{artist}',[ArtistController::class, 'show'])->name('artists.show'); 
    Route::get('{artist}/works/{work}', [ArtistWorkController::class, 'show'])->name('artists.works.show');
    Route::get('{artist}/exhibitions/{exhibition}',[ArtistExhibitionController::class, 'show'])->name('artists.exhibitions.show');
});

Route::prefix('exhibitions')->group(function(){
    Route::get('/', [ExhibitionController::class, 'index'])->name('exhibitions.index');
    Route::get('{exhibition}', [ExhibitionController::class, 'show'])->name('exhibitions.show');
});

Route::prefix('admin')->middleware('auth')->group(function () {
        Route::get('dashboard', [AdminController::class, 'index']);
        Route::get('artists', AdminArtistController::class);
});
