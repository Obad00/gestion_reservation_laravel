<?php

use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Route pour permettre la gestion des associations
// Route::resource('associations', AssociationController::class);
// Route pour l'inscription de l'association
Route::get('/associations/register', [AssociationController::class, 'create'])->name('association-register');
Route::post('/associations/register', [AssociationController::class, 'register']);


Route::get('/events', [EvenementController::class, 'index'])->name('events.index');

Route::get('/events/{event}', [EvenementController::class, 'show'])->name('events.show');

Route::get('/events/{event}/reservations', [EvenementController::class, 'showReservations'])->name('events.reservations');


use App\Http\Controllers\ReservationController;

Route::post('/reservations/{reservation}/accept', [ReservationController::class, 'accept'])->name('reservations.accept');
Route::post('/reservations/{reservation}/decline', [ReservationController::class, 'decline'])->name('reservations.decline');
