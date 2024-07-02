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
use App\Http\Controllers\CategorieController;
// use App\Http\Controllers\EvenementController;
// use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Auth;






// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




Route::middleware(['auth','role:super_admin|admin|association'])->prefix('admins')->group(function () {

    Route::resource('roles', RoleController::class)->middleware( 'permission:view roles');
    Route::resource('permissions', PermissionController::class)->middleware( 'permission:view permissions');
    Route::resource('utilisateurs', UserController::class)->middleware( 'permission:view permissions');
    Route::resource('category', CategorieController::class);




    Route::get('liste/', [AdminController::class,'index'])->middleware( 'permission:view permissions');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.admin')->middleware( 'permission:view permissions');

    Route::get('evenements/liste', [DashboardController::class , 'listeEvenements'])->name('liste.evenements.admin')->middleware( 'permission:edit evenements');

    // association

    Route::get('/association' , [AssociationAdminController::class, 'index'])->name('admin.associations.index')->middleware( 'permission:view permissions');
    Route::get('/association/evenements/{id}' , [AssociationAdminController::class, 'show'])->name('admin.associations.show')->middleware( 'permission:view permissions');
    Route::get('/association/bloquees/' , [AssociationAdminController::class, 'listeBloquee'])->name('association.liste.bloque')->middleware( 'permission:view permissions');

    Route::put('associations/bloque/{association}' , [AssociationAdminController::class, 'bloquee_un_associatiation'])->name('association.bloque');
    Route::put('associations/debloque/{association}' , [AssociationAdminController::class, 'debloquee_un_associatiation'])->name('association.debloque');

// User lamda
    Route::get('liste/', [AdminController::class,'index'])->middleware( 'permission:view permissions');

    Route::get('/utilisateur/bloquees/' , [UserController::class, 'listeUserBloquee'])->name('utilisateurs.liste.bloque')->middleware( 'permission:view permissions');

    Route::put('utilisateurs/bloque/{utilisateur}' , [UserController::class, 'bloquee_un_user'])->name('utilisateurs.bloque')->middleware( 'permission:view permissions');
    Route::put('utilisateurs/debloque/{utilisateur}' , [UserController::class, 'debloquee_un_user'])->name('utilisateurs.debloque')->middleware( 'permission:view permissions');


    // User admin
    Route::get('/admin/bloquees/' , [AdminController::class, 'listeAdminBloquee'])->name('admins.liste.bloque')->middleware( 'permission:view permissions');
    Route::get('liste/', [AdminController::class,'index'])->name('admins.index')->middleware( 'permission:view permissions');


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
Route::resource('associations', AssociationController::class);

// Route pour l'inscription de l'association



Route::get('/inscription' ,  [AssociationController::class,'inscription']);
Route::get('/association/dashboard' ,  [AssociationController::class,'dashboard'])->name('association.dashboard');


Route::prefix('associations')->group(function (){

    Route::controller(EvenementController::class)->group(function (){
        Route::get('create/Evenement', 'create')->name('association.evenements.create');
        Route::post('create/Evenement/traitement', 'store')->name('association.evenements.save');
        Route::get('index/Evenement', 'affichageevenement')->name('association.evenements.index');
        Route::get('evenementSupprimer/{id}', 'destroy')->name('association.evenements.destroy');
        Route::get('evenementModifier/{id}', 'edit')->name('association.evenements.edit');
        Route::post('/evenements/update/{id}' , 'update')->name('association.evenements.update');
        Route::get('detailEvenement/{id}' , 'show')->name('association.evenements.show');
        Route::get('/bloquees' , 'listeUserBloquee')->name('association.evenements.bloques');

        Route::get('/events', [EvenementController::class, 'index'])->name('events.index');


        Route::get('/events/{event}/reservations', [EvenementController::class, 'showReservations'])->name('events.reservations');


    // Route::put('utilisateurs/bloque/{utilisateur}' , [UserController::class, 'bloquee_un_user'])->name('utilisateurs.bloque');
    // Route::put('utilisateurs/debloque/{utilisateur}' , [UserController::class, 'debloquee_un_user'])->name('utilisateurs.debloque');

   });
Route::controller(ReservationController::class)->group(function (){
   Route::get('/reservationee' , 'listeReservation')->name('association.reservation');

});


});

Route::prefix('user')->group(function (){

Route::get('/associations/register', [AssociationController::class, 'create'])->name('association-register');
Route::post('/associations/register', [AssociationController::class, 'register'])->name('association-register.store');
Route::get('/inscription' ,  [AssociationController::class,'inscription']);


});



Route::post('/reservations/{reservation}/accept', [ReservationController::class, 'accept'])->name('reservations.accept');
Route::post('/reservations/{reservation}/decline', [ReservationController::class, 'decline'])->name('reservations.decline');


Route::get('/', [EvenementController::class, 'accueil'])->name('evenements.accueil');
Route::get('/pagesevenements', [EvenementController::class, 'tousevenements'])->name('evenements.index');
Route::get('/evenements/{evenement}', [EvenementController::class, 'detail'])->name('evenements.detail');
Route::post('/evenements/{evenement}/reserver', [ReservationController::class, 'store'])->middleware('auth')->name('reservations.store');
// Auth::routes();

Route::get('/reservations/confirmation/{reservation}', [ReservationController::class, 'confirmation'])->name('associations.reservations.confirmation')->middleware('auth');
Route::post('/reservations/{reservation}/confirmer', [ReservationController::class, 'confirm'])->name('reservations.confirm')->middleware('auth');
Route::post('/reservations/{reservation}/annuler', [ReservationController::class, 'cancel'])->name('reservations.cancel')->middleware('auth');
