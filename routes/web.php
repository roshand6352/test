<?php

use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\LoginController;
use App\Http\Controllers\Web\PageController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Web\ServiceController;
use App\Http\Controllers\Web\SignupController;
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

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('contact-us', [PageController::class, 'contactUs'])->name('contact-us');
Route::get('become-a-provider', [PageController::class, 'becomeAProvider'])->name('become-a-provider');
Route::get('new', [PageController::class, 'new'])->name('new');
Route::get('service', [ServiceController::class, 'index'])->name('service');
Route::get('service-detail/{id}', [ServiceController::class, 'show'])->name('service-detail');
Route::get('customer-login', [SignupController::class, 'customerLogin'])->name('customer-login');
Route::get('customer-signup', [SignupController::class, 'customerSignup'])->name('customer-signup');
Route::post('customer-signup-store', [SignupController::class, 'customerSignupStore'])->name('customer-signup-store');
Route::post('provider-signup-store', [SignupController::class, 'providerSignupStore'])->name('provider-signup-store');
Route::get('provider-signup', [SignupController::class, 'providerSignup'])->name('provider-signup');
Route::get('provider-login', [SignupController::class, 'providerLogin'])->name('provider-login');
Route::post('provider-login-check', [LoginController::class, 'providerLoginCheck'])->name('provider-login-check');
Route::post('customer-login-check', [LoginController::class, 'customerLoginCheck'])->name('customer-login-check');
Route::get('provider-dashboard', [DashboardController::class, 'providerDashboard'])->name('provider-dashboard');
Route::get('customer-dashboard', [DashboardController::class, 'customerDashboard'])->name('customer-dashboard');
Route::get('my-profile-sp', [ProfileController::class, 'myProfileSp'])->name('my-profile-sp');
Route::get('my-profile-c', [ProfileController::class, 'myProfileC'])->name('my-profile-c');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
