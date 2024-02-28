<?php


use App\Http\Controllers\Admin\JobOfferController as AdminJobOfferController;
use App\Http\Controllers\Admin\RoleController as AdminRoleController;
use App\Http\Controllers\Admin\SectorController as AdminSectorController;
use App\Http\Controllers\Admin\CompanyController as AdminCompanyController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Recruiter\JobOfferController as RecruiterJobOfferController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Representative\UserController;
use App\Http\Controllers\User\JobOfferController;
use App\Models\JobOffer;

use App\Http\Controllers\Auth\RegisteredUserController;
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


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::resource('sectors', AdminSectorController::class)->names('admin.sectors');
    Route::resource('users', AdminUserController::class)->names('admin.users');
    Route::resource('companies', AdminCompanyController::class)->names('admin.companies');
    Route::resource('roles', AdminRoleController::class)->names('admin.roles');
    Route::resource('joboffers', AdminJobOfferController::class)->names('admin.joboffers');
});

Route::prefix('recruiter')->group(function () {
    Route::resource('joboffers', RecruiterJobOfferController::class)->names('recruiter.joboffers');
});

Route::get('/joboffers/search', [JobOfferController::class, 'search'])->name('joboffers.search');


Route::prefix('recruteur')->group(function () {
});

Route::get('/', [JobOfferController::class , 'index'])->name('home');
Route::get('/home', [JobOfferController::class , 'index'])->name('home');

// Route::get('/', function () {
//     return view('index');
// })->name('home');

// Route::get('/home', function () {
//     return view('index');
// })->name('home');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    // user routes
    Route::resource('users', UserUserController::class);
    // Representative routes
    Route::prefix('reps/dashboard')->group(function () {
        Route::resource('company', RepresentativeCompanyController::class)->names('rep.dash.company');
        Route::resource('recruiters', RepresentativeUserController::class)->names('rep.dash.recruiters');
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
