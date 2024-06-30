<?php

use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\UserController;
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


Route::middleware(['auth','role:super_admin'])->group(function () {
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('associations', AssociationController::class);
    Route::resource('utilisateurs', UserController::class);


    Route::get('dashboard/admin', [DashboardController::class, 'index'])->name('dashboard.admin');

    Route::get('evenements/liste', [DashboardController::class , 'listeEvenements'])->name('liste.evenements.admin');

    // association
    Route::get('/association/bloquees/' , [AssociationController::class, 'listeBloquee'])->name('association.liste.bloque');

    Route::put('associations/bloque/{association}' , [AssociationController::class, 'bloquee_un_associatiation'])->name('association.bloque');
    Route::put('associations/debloque/{association}' , [AssociationController::class, 'debloquee_un_associatiation'])->name('association.debloque');


// User lamda
    Route::get('/utilisateur/bloquees/' , [UserController::class, 'listeUserBloquee'])->name('utilisateurs.liste.bloque');

    Route::put('utilisateurs/bloque/{utilisateur}' , [UserController::class, 'bloquee_un_user'])->name('utilisateurs.bloque');
    Route::put('utilisateurs/debloque/{utilisateur}' , [UserController::class, 'debloquee_un_user'])->name('utilisateurs.debloque');


    Route::get('roles/{role}/permissions', [RoleController::class, 'assignPermissions'])->name('roles.permissions');
    Route::put('roles/{role}/permissions', [RoleController::class, 'storePermissions'])->name('roles.permissions.store');

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
    Route::get('evenementSupprimer/{id}', 'destroy');
    Route::get('evenementModifier/{id}', 'edit');
    Route::post('/evenementmodifierTraitement/{id}' , 'update')->name('evenementmodifierTraitement');
   });
