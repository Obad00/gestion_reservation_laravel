<?php

use App\Http\Controllers\AssociationController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AssociationAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ReservationController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;

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


Route::resource('evenements', EvenementController::class);
Route::resource('associations', AssociationController::class);


Route::middleware(['auth','role:super_admin|admin|association'])->prefix('admins')->group(function () {

    Route::resource('roles', RoleController::class)->middleware( 'permission:view roles');
    Route::resource('permissions', PermissionController::class)->middleware( 'permission:view permissions');
    Route::resource('utilisateurs', UserController::class)->middleware( 'permission:bloque utilisateurs');
    Route::get('liste/', [AdminController::class,'index'])->middleware( 'permission:bloque utilisateurs');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.admin')->middleware( 'permission:view permissions');

    Route::get('evenementsss/liste', [DashboardController::class , 'listeEvenements'])->name('liste.evenements.admin')->middleware( 'permission:edit evenements');

    // association
    Route::get('/association/bloquees/' , [AssociationAdminController::class, 'listeBloquee'])->name('association.liste.bloque')->middleware( 'permission:bloque evenements');

    Route::put('associations/bloque/{association}' , [AssociationAdminController::class, 'bloquee_un_associatiation'])->name('association.bloque');
    Route::put('associations/debloque/{association}' , [AssociationAdminController::class, 'debloquee_un_associatiation'])->name('association.debloque');

// User lamda
    Route::get('liste/', [AdminController::class,'index'])->middleware( 'permission:bloque utilisateurs');

    Route::get('/utilisateur/bloquees/' , [UserController::class, 'listeUserBloquee'])->name('utilisateurs.liste.bloque')->middleware( 'permission:bloque utilisateurs');

    Route::put('utilisateurs/bloque/{utilisateur}' , [UserController::class, 'bloquee_un_user'])->name('utilisateurs.bloque')->middleware( 'permission:bloque utilisateurs');
    Route::put('utilisateurs/debloque/{utilisateur}' , [UserController::class, 'debloquee_un_user'])->name('utilisateurs.debloque')->middleware( 'permission:bloque utilisateurs');


    // User admin
    Route::get('/admin/bloquees/' , [AdminController::class, 'listeAdminBloquee'])->name('admins.liste.bloque')->middleware( 'permission:bloque utilisateurs');
    Route::get('liste/', [AdminController::class,'index'])->name('admins.index')->middleware( 'permission:bloque utilisateurs');


    Route::get('roles/{role}/permissions', [RoleController::class, 'assignPermissions'])->name('roles.permissions')->middleware( 'permission:view permissions');
    Route::put('roles/{role}/permissions', [RoleController::class, 'storePermissions'])->name('roles.permissions.store');

});

// User Lamda
Route::prefix('user')->group(function ()
 {

    Route::get('inscrite',[UserController::class, 'inscrite'])->name('inscrite.user');




});
require __DIR__.'/auth.php';

//Route pour permettre la gestion des associations
// Route::resource('associations', AssociationController::class);
// Route pour l'inscription de l'association



Route::get('/inscription' ,  [AssociationController::class,'inscription']);

Route::controller(EvenementController::class)->group(function (){
    Route::get('create/Evenement', 'create');
    Route::post('create/Evenement/traitement', 'store');
    Route::get('ù', 'affichageevenement')->name('evenements.index');
    Route::get('evenementSupprimer/{id}', 'destroy');
    Route::get('evenementModifier/{id}', 'edit');
    Route::post('/evenementmodifierTraitement/{id}' , 'update')->name('evenementmodifierTraitement');
    Route::get('detailEvenement/{id}' , 'show');
    Route::get('/bloquees' , 'listeUserBloquee');
    
    // Route::put('utilisateurs/bloque/{utilisateur}' , [UserController::class, 'bloquee_un_user'])->name('utilisateurs.bloque');
    // Route::put('utilisateurs/debloque/{utilisateur}' , [UserController::class, 'debloquee_un_user'])->name('utilisateurs.debloque');

   });
Route::controller(ReservationController::class)->group(function (){
   Route::get('/reservation' , 'listeReservation');

});
