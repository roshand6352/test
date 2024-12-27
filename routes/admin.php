<?php

use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PasswordController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceProviderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-check', [LoginController::class, 'loginCheck'])->name('login-check');
Route::post('send-mail', [PasswordController::class, 'sendMail'])->name('send-mail');
Route::get('reset-password/{token}', [PasswordController::class, 'resetPassword'])->name('reset-password');
Route::post('reset-password-submit', [PasswordController::class, 'resetPasswordSubmit'])->name('reset-password-submit');
Route::group(['middleware' => ['auth:admin', 'adminCheck']], function () {
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('my-profile', [ProfileController::class, 'index'])->name('my-profile');
    Route::post('updateProfile', [ProfileController::class, 'updateProfile'])->name('updateProfile');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('change-panel-mode/{id}', [HomeController::class, 'changePanelMode'])->name('change-panel-mode');
    Route::get('/change-password', [PasswordController::class, 'index'])->name('change-password');
    Route::post('update-password', [PasswordController::class, 'updatePassword'])->name('update-password');
    Route::get('change-locale/{id}', [HomeController::class, 'changeLocale'])->name('change-locale');

    Route::resource('page', PageController::class);
    Route::get('get-page-list', [PageController::class, 'getPageList'])->name('get-page-list');
    Route::get('page/status/{id}/{status}', [PageController::class, 'changeStatus'])->name('page.status.change');
//    Route::post('multiple-page-delete', [PageController::class, 'multiplePageDelete'])->name('multiple-page-delete');

    Route::resource('service', ServiceController::class);
    Route::get('get-service-list', [ServiceController::class, 'getServiceList'])->name('get-service-list');
    Route::get('service/status/{id}/{status}', [ServiceController::class, 'changeStatus'])->name('service.status.change');

    Route::resource('customer', CustomerController::class);
    Route::get('get-customer-list', [CustomerController::class, 'getCustomerList'])->name('get-customer-list');
    Route::get('customer/status/{id}/{status}', [CustomerController::class, 'changeStatus'])->name('customer.status.change');

    Route::resource('service-provider', ServiceProviderController::class);
    Route::get('get-service-provider-list', [ServiceProviderController::class, 'getCustomerList'])->name('get-service-provider-list');
    Route::get('service-provider/status/{id}/{status}', [ServiceProviderController::class, 'changeStatus'])->name('service-provider.status.change');

    Route::resource('role', RoleController::class);
    Route::get('get-role-list', [RoleController::class, 'getRoleList'])->name('get-role-list');

    /* Permission Routes */
    Route::resource('permission', PermissionController::class);
    Route::get('get-permission-list', [PermissionController::class, 'getPermissionList'])->name('get-permission-list');
});
