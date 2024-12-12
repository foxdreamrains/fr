<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
#FRANCHISE
use App\Http\Controllers\NameQuotientController;
use App\Http\Controllers\NQCertificateController;
use App\Http\Controllers\ConsultActivtyController;
use App\Http\Controllers\UmrohController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\ChracterReaderController;


Route::get('', function () {
    return view('auth.login');
});

Route::get('profile', [ProfileController::class, 'index'])->name('profiles')->middleware(['auth', 'verified']);

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('news', [NewsController::class, 'index'])->name('news')->middleware(['auth', 'verified']);

## FRANCHISE
Route::get('namequotient', [NameQuotientController::class, 'index'])->name('namequotient')->middleware(['auth', 'verified']);
Route::get('nqcertificate', [NQCertificateController::class, 'index'])->name('nqcertificate')->middleware(['auth', 'verified']);
Route::get('consultactivty', [ConsultActivtyController::class, 'index'])->name('consultactivty')->middleware(['auth', 'verified']);
Route::get('umroh', [UmrohController::class, 'index'])->name('umroh')->middleware(['auth', 'verified']);
Route::get('training', [TrainingController::class, 'index'])->name('training')->middleware(['auth', 'verified']);
Route::get('chracterreader', [ChracterReaderController::class, 'index'])->name('chracterreader')->middleware(['auth', 'verified']);

Route::group(['middleware' => ['role:super-admin|admin']], function() {

    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::get('permissions.{permissionId}.delete', [App\Http\Controllers\PermissionController::class, 'destroy']);

    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::get('roles.{roleId}.delete', [App\Http\Controllers\RoleController::class, 'destroy']);
    Route::get('roles.{roleId}.give-permissions', [App\Http\Controllers\RoleController::class, 'addPermissionToRole']);
    Route::put('roles.{roleId}.give-permissions', [App\Http\Controllers\RoleController::class, 'givePermissionToRole']);

    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::get('users.{userId}.delete', [App\Http\Controllers\UserController::class, 'destroy']);

});

require __DIR__.'/auth.php';
