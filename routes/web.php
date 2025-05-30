<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\OwnerRegistrationController;
use App\Http\Controllers\Auth\TenantRegistrationController;
use App\Http\Controllers\OwnerDashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Owner\OwnerPropertyController;
use App\Http\Controllers\Owner\PropertyController;
// use App\Http\Controllers\Admin\LocationController; // Will be removed

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

// Owner Routes
Route::middleware(['auth', 'role:owner', 'ensure.owner.has.property'])->prefix('owner')->name('owner.')->group(function () {
    Route::get('/dashboard', [OwnerDashboardController::class, 'index'])->name('dashboard');
    
    // Property Management Routes for Owner
    // These routes are handled by the logic within EnsureOwnerHasProperty middleware itself
    // so they don't need the middleware applied directly to them again IF they are defined outside this group,
    // but for simplicity and to catch all owner-related routes, keeping them in this group is fine.
    // The middleware will allow access to create/store if the owner has no properties.
    Route::get('/properties/create', [OwnerPropertyController::class, 'create'])->name('properties.create');
    Route::post('/properties', [OwnerPropertyController::class, 'store'])->name('properties.store');
    // Add other owner-specific routes here (e.g., edit, update, delete properties)
    // Route::resource('properties', OwnerPropertyController::class)->except(['create', 'store']); // Example for later

    // Route untuk edit dan update properti
    Route::get('/properties/{property}/edit', [OwnerPropertyController::class, 'edit'])->name('properties.edit');
    Route::put('/properties/{property}', [OwnerPropertyController::class, 'update'])->name('properties.update');

    Route::delete('/properties/{property}', [OwnerPropertyController::class, 'destroy'])->name('properties.destroy');
});

// Admin Routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    
    // CRUD for Locations (our app's locations table) - REMOVING
    // Route::resource('locations', LocationController::class);
    
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
