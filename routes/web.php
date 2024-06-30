<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::middleware(['auth','role:super_admin|admin'])->group(function () {
    Route::resource('roles', RoleController::class)->middleware( 'permission:view roles');
    Route::resource('permissions', PermissionController::class)->middleware( 'permission:view permissions');
    Route::resource('associations', AssociationController::class)->middleware( 'permission:view permissions');
    Route::resource('utilisateurs', UserController::class)->middleware( 'permission:bloque utilisateurs');
    Route::resource('admins', AdminController::class)->middleware( 'permission:bloque utilisateurs');


    Route::get('dashboard/admin', [DashboardController::class, 'index'])->name('dashboard.admin')->middleware( 'permission:view permissions');

    Route::get('evenements/liste', [DashboardController::class , 'listeEvenements'])->name('liste.evenements.admin')->middleware( 'permission:edit evenements');

    // association
    Route::get('/association/bloquees/' , [AssociationController::class, 'listeBloquee'])->name('association.liste.bloque')->middleware( 'permission:bloque evenements');

    Route::put('associations/bloque/{association}' , [AssociationController::class, 'bloquee_un_associatiation'])->name('association.bloque');
    Route::put('associations/debloque/{association}' , [AssociationController::class, 'debloquee_un_associatiation'])->name('association.debloque');

// User lamda
    Route::get('/utilisateur/bloquees/' , [UserController::class, 'listeUserBloquee'])->name('utilisateurs.liste.bloque')->middleware( 'permission:bloque utilisateurs');

    Route::put('utilisateurs/bloque/{utilisateur}' , [UserController::class, 'bloquee_un_user'])->name('utilisateurs.bloque')->middleware( 'permission:bloque utilisateurs');
    Route::put('utilisateurs/debloque/{utilisateur}' , [UserController::class, 'debloquee_un_user'])->name('utilisateurs.debloque')->middleware( 'permission:bloque utilisateurs');


    // User admin
    Route::get('/admin/bloquees/' , [AdminController::class, 'listeAdminBloquee'])->name('admins.liste.bloque')->middleware( 'permission:bloque utilisateurs');


    Route::get('roles/{role}/permissions', [RoleController::class, 'assignPermissions'])->name('roles.permissions')->middleware( 'permission:view permissions');
    Route::put('roles/{role}/permissions', [RoleController::class, 'storePermissions'])->name('roles.permissions.store');

});

require __DIR__.'/auth.php';
