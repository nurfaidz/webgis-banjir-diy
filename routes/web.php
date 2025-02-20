<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Guest
Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('pages.dashboards.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('flood-zone')->group(function () {
        Route::get('/', [\App\Http\Controllers\FloodZoneController::class, 'index'])->name('flood-zones.index');
//        Route::post('/', [\App\Http\Controllers\FloodZoneController::class, 'store'])->name('flood-zones.store');
//        Route::get('/create', [\App\Http\Controllers\FloodZoneController::class, 'create'])->name('flood-zones.create');
//        Route::get('/{floodZone}/edit', [\App\Http\Controllers\FloodZoneController::class, 'edit'])->name('flood-zones.edit');
//        Route::patch('/{floodZone}', [\App\Http\Controllers\FloodZoneController::class, 'update'])->name('flood-zones.update');
//        Route::delete('/{floodZone}', [\App\Http\Controllers\FloodZoneController::class, 'destroy'])->name('flood-zones.destroy');
    });

    Route::prefix('flood-area')->group(function () {
        Route::get('/', [\App\Http\Controllers\FloodAreaController::class, 'index'])->name('flood-areas.index');
//        Route::get('/create', [\App\Http\Controllers\FloodAreaController::class, 'create'])->name('flood-areas.create');
//        Route::post('/', [\App\Http\Controllers\FloodAreaController::class, 'store'])->name('flood-areas.store');
//        Route::get('/{floodArea}/edit', [\App\Http\Controllers\FloodAreaController::class, 'edit'])->name('flood-areas.edit');
//        Route::patch('/{floodArea}', [\App\Http\Controllers\FloodAreaController::class, 'update'])->name('flood-areas.update');
//        Route::delete('/{floodArea}', [\App\Http\Controllers\FloodAreaController::class, 'destroy'])->name('flood-areas.destroy');
    });

    Route::prefix('weather')->group(function() {
        Route::get('/', [\App\Http\Controllers\WeatherController::class, 'index'])->name('weather.index');
    });

    Route::prefix('admin')->group(function() {
        Route::get('/', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    });
});

require __DIR__.'/auth.php';
