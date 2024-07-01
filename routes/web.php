<?php

use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Auth;





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




Route::post('/reservations/{reservation}/accept', [ReservationController::class, 'accept'])->name('reservations.accept');
Route::post('/reservations/{reservation}/decline', [ReservationController::class, 'decline'])->name('reservations.decline');


Route::get('/evenements', [EvenementController::class, 'accueil'])->name('evenements.accueil');
Route::get('/pagesevenements', [EvenementController::class, 'tousevenements'])->name('evenements.index');
Route::get('/evenements/{evenement}', [EvenementController::class, 'detail'])->name('evenements.detail');
Route::post('/evenements/{evenement}/reserver', [ReservationController::class, 'store'])->middleware('auth')->name('reservations.store');
// Auth::routes();

Route::get('/reservations/confirmation/{reservation}', [ReservationController::class, 'confirmation'])->name('associations.reservations.confirmation')->middleware('auth');
Route::post('/reservations/{reservation}/confirmer', [ReservationController::class, 'confirm'])->name('reservations.confirm')->middleware('auth');
Route::post('/reservations/{reservation}/annuler', [ReservationController::class, 'cancel'])->name('reservations.cancel')->middleware('auth');

// Formulaire de création d'un événement
Route::get('/evenements/create', [EvenementController::class, 'create'])->name('evenements.create');

// Route pour enregistrer un nouvel événement (post)
Route::post('/evenements', [EvenementController::class, 'store'])->name('evenements.store');