<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/profile/{user}', [ProfileController::class, 'show'])->name('profile.show');

require __DIR__.'/auth.php';

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('admin.dashboard');

    Route::get('workouts', [HomeController::class, 'workoutsIndex'])->name('admin.workouts.index');
    Route::get('workouts/create', [HomeController::class, 'workoutsCreate'])->name('admin.workouts.create');
    Route::post('workouts', [HomeController::class, 'workoutsStore'])->name('admin.workouts.store');
    Route::get('workouts/{workout}/edit', [HomeController::class, 'workoutsEdit'])->name('admin.workouts.edit');
    Route::put('workouts/{workout}', [HomeController::class, 'workoutsUpdate'])->name('admin.workouts.update');
    Route::delete('workouts/{workout}', [HomeController::class, 'workoutsDestroy'])->name('admin.workouts.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/workouts', [HomeController::class, 'showAllWorkouts'])->name('workouts.all');
    Route::post('/favorites/add/{workout}', [HomeController::class, 'addFavorite'])->name('favorites.add');
    Route::delete('/favorites/remove/{workout}', [HomeController::class, 'removeFavorite'])->name('favorites.remove');
    Route::get('/favorites', [HomeController::class, 'showFavorite'])->name('favorites.show');
});

