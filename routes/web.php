<?php

use App\Http\Controllers\AdminExhibitionController;
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
// Route::post('/wooow', [ArtistWorkController::class, 'store'])->name('artist.work.store');
// Route::post('/wooow', function () {
//     return request();
// });

Route::prefix('artists')->group(function () {
    Route::get('/', [ArtistController::class, 'index'])->name('artists.index');
    Route::get('{artist}', [ArtistController::class, 'show'])->name('artists.show');
    Route::get('{artist}/works/{work}', [ArtistWorkController::class, 'show'])->name('artists.works.show');
    Route::get('{artist}/exhibitions/{exhibition}', [ArtistExhibitionController::class, 'show'])->name('artists.exhibitions.show');
});

Route::prefix('exhibitions')->group(function () {
    Route::get('/', [ExhibitionController::class, 'index'])->name('exhibitions.index');
    Route::get('{exhibition}', [ExhibitionController::class, 'show'])->name('exhibitions.show');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::prefix('artist')->group(function () {
        Route::get('list', [AdminArtistController::class, 'index'])->name('artist.list');
        Route::get('create', [AdminArtistController::class, 'create'])->name('artist.create');
        Route::post('create', [AdminArtistController::class, 'store'])->name('artist.store');
        Route::post('work/create', [ArtistWorkController::class, 'store']);
        Route::get('{artist}/work/create', [ArtistWorkController::class, 'create'])->name('artist.work.create');
        Route::get('{artist}', [AdminArtistController::class, 'show'])->name('admin.artist.show');
    });
    Route::prefix('exhibition')->group(function () {
        Route::get('list', [AdminExhibitionController::class, 'index'])->name('exhibition.list');
        Route::get('create', [AdminExhibitionController::class, 'create'])->name('exhibition.create');
        Route::post('create', [AdminExhibitionController::class, 'store'])->name('exhibition.store');
        Route::get('{exhibition}', [AdminExhibitionController::class, 'show'])->name('admin.exhibition.show');
    });
});
