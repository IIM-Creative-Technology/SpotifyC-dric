<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtisteController;
use App\Http\Controllers\PlaylistController;
use App\Models\Artiste;
use Illuminate\Foundation\Application;
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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';




// Route::resource('album', AlbumController::class);

    Route::prefix('album')->name('album.')->group(function() {

    Route::get('/create', [AlbumController::class, 'create'])->name('create');

    Route::get('/{album}', [AlbumController::class, 'show'])->name('show');

    Route::get('/{album}/edit', [AlbumController::class, 'edit'])->name('edit');

    Route::put('/{album}', [AlbumController::class, 'update'])->name('update');

    Route::post('/', [AlbumController::class, 'store'])->name('store');

    Route::delete('/{album}', [AlbumController::class, 'destroy'])->name('destroy');

});

// Route::resource('artiste', ArtisteController::class);

Route::prefix('artiste')->name('artiste.')->group(function(){

    Route::get('/create', [ArtisteController::class, 'create'])->name('create');

    Route::get('/{artiste}', [ArtisteController::class, 'show'])->name('show');

    Route::get('/{artiste}/edit', [ArtisteController::class, 'edit'])->name('edit');

    Route::put('/{artiste}', [ArtisteController::class, 'update'])->name('update');

    Route::post('/', [ArtisteController::class, 'store'])->name('store');

    Route::delete('/{artiste}', [ArtisteController::class, 'destroy'])->name('destroy');

});


// Route::resource('playlist', PlaylistController::class);

Route::prefix('playlist')->name('playlist.')->group(function() {

    Route::get('/', [PlaylistController::class,'index'])->name('index');

    Route::get('/create', [PlaylistController::class, 'create'])->name('create');

    Route::post('/', [PlaylistController::class, 'store'])->name('store');

    Route::get('/{playlist}', [PlaylistController::class, 'show'])->name('show');

    Route::get('/{playlist}/edit', [PlaylistController::class, 'edit'])->name('edit');

    Route::put('/{playlist}/edit', [PlaylistController::class, 'update'])->name('update');


    Route::delete('/{playlist}/destroy', [PlaylistController::class, 'destroy'])->name('destroy');

});
