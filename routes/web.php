<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\PasswordsController;
use App\Http\Controllers\EventsController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/pulpit', function () {
//     return view('dashboard.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(DashboardController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/pulpit', 'index')->name('dashboard');
});

Route::controller(NotesController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/notatki', 'index')->name('notes');
    Route::get('/notatki/dodaj', 'create')->name('notes.add');
    Route::get('/notatki/{note}', 'edit')->name('notes.edit');
    
    Route::delete('/notatki/{note}', 'destroy')->name('notes.destroy');
    Route::patch('/notatki/{note}', 'update')->name('notes.update');
    Route::post('/notatki/nowa', 'store')->name('notes.store');
});

Route::controller(PasswordsController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/zapisane-dane', 'index')->name('passwords');
});

Route::controller(EventsController::class)->middleware(['auth', 'verified'])->group(function() {
    Route::get('/wydarzenia', 'index')->name('events');

    Route::get('/wydarzenia/dodaj', 'create')->name('events.add');

    Route::post('/wydarzenia/nowe', 'store')->name('events.store');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
