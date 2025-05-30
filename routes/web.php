<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\OwnerRegistrationController;
use App\Http\Controllers\Auth\TenantRegistrationController;
use App\Http\Controllers\OwnerDashboardController;
use App\Http\Controllers\AdminDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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

// Owner Dashboard Route
Route::middleware(['auth', 'role:owner'])->group(function () {
    Route::get('/owner/dashboard', [OwnerDashboardController::class, 'index'])->name('owner.dashboard');
    // Add other owner-specific routes here
});

// Admin Dashboard Route
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    // Add other admin-specific routes here
});

// Registration routes for Owner and Tenant
Route::middleware('guest')->group(function () {
    Route::get('register/owner', [OwnerRegistrationController::class, 'create'])
        ->name('register.owner');
    Route::post('register/owner', [OwnerRegistrationController::class, 'store']);

    Route::get('register/tenant', [TenantRegistrationController::class, 'create'])
        ->name('register.tenant');
    Route::post('register/tenant', [TenantRegistrationController::class, 'store']);
});

require __DIR__.'/auth.php';
