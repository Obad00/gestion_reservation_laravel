<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\AssociationController;
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

Route::get('dashboard/admin', [DashboardController::class, 'index'])->name('dashboard.admin');

Route::middleware(['auth','role:super_admin'])->group(function () {
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('associations', AssociationController::class);
    Route::get('evenements/liste', [DashboardController::class , 'listeEvenements'])->name('liste.evenements.admin');

    Route::get('/association/bloquees/' , [AssociationController::class, 'listeBloquee'])->name('association.liste.bloque');

    Route::put('associations/bloque/{association}' , [AssociationController::class, 'bloquee_un_associatiation'])->name('association.bloque');
    Route::put('associations/debloque/{association}' , [AssociationController::class, 'debloquee_un_associatiation'])->name('association.debloque');

    Route::get('roles/{role}/permissions', [RoleController::class, 'assignPermissions'])->name('roles.permissions');
    Route::put('roles/{role}/permissions', [RoleController::class, 'storePermissions'])->name('roles.permissions.store');

});

require __DIR__.'/auth.php';
