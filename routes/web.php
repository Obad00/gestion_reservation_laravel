<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
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

Route::get('dashboard/a', [DashboardController::class, 'index'])->name('dashboard.index');

Route::middleware(['auth','role:super_admin'])->group(function () {
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);

    Route::get('roles/{role}/permissions', [RoleController::class, 'assignPermissions'])->name('roles.permissions');
    Route::put('roles/{role}/permissions', [RoleController::class, 'storePermissions'])->name('roles.permissions.store');

});

require __DIR__.'/auth.php';
