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

Route::controller(EvenementController::class)->group(function (){
    Route::get('create/Evenement', 'create');
    Route::post('create/Evenement/traitement', 'store');
    Route::get('index/Evenement', 'affichageevenement')->name('evenements.index');
   });
