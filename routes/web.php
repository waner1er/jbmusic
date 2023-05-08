<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MidiPlayerController;
use App\Http\Controllers\PrestationController;
use App\Http\Controllers\ResourceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/cours', [CourseController::class, 'index'])->name('courses.index');
Route::get('/cours/{course:slug}', [CourseController::class, 'show'])->name('courses.show');

Route::get('/prestations', [PrestationController::class, 'index'])->name('prestations.index');
Route::get('/prestations/{prestation:slug}', [PrestationController::class, 'show'])->name('prestations.show');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::middleware('auth')->group(function () {

    Route::get('/resources', [ResourceController::class, 'index'])->name('resources.index');
    Route::get('/resources/{resource:name}', [ResourceController::class, 'show'])->name('resources.show');
    Route::get('/mesresources', [ResourceController::class, 'userIndex'])->name('myresources');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/songs', [MidiPlayerController::class, 'index'])->name('songs.index');
    Route::get('/songs/{song:slug}', [MidiPlayerController::class, 'show'])->name('songs.show');
});

require __DIR__.'/auth.php';
