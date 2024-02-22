<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Representative\UserController as RepresentativeUserController;
use App\Http\Controllers\User\UserController as UserUserController;
use App\Http\Controllers\Representative\CompanyController as RepresentativeCompanyController;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::view('/', 'index');

// Representative routes
Route::prefix('reps/dashboard')->group(function () {
    Route::resource('company', RepresentativeCompanyController::class)->names('rep.dash.company');
    Route::resource('recruiters', RepresentativeUserController::class)->names('rep.dash.recruiters');
});

Route::resource('users', UserUserController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
