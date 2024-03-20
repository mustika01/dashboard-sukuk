<?php

use App\Http\Controllers\EarlyRedemptionMenuController;
use App\Http\Controllers\EmailBlastMenuController;
use App\Http\Controllers\EmailBlastrMenuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderMenuController;
use App\Http\Controllers\ParameterMenuController;
use App\Http\Controllers\RegistrationMenuController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vuexy', function () {
    return view('vuexy');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(RegistrationMenuController::class)->group(function () {
    Route::get('/upload-data-reason', 'viewUploadDataReason')->name('view-upload-data-reason');
    Route::get('/download-data-reason', 'viewDownloadDataReason')->name('view-download-data-reason');
    Route::get('/data-master', 'viewDataMaster')->name('view-data-master');
});

Route::controller(OrderMenuController::class)->group(function () {
    Route::get('/detail-data-order', 'viewDetailDataOrder')->name('view-detail-data-order');
});

Route::controller(EarlyRedemptionMenuController::class)->group(function () {
    Route::get('/detail-data-redemption', 'viewDetailDataRedemption')->name('view-detail-data-redemption');
});

Route::controller(EmailBlastMenuController::class)->group(function () {
    Route::get('/owner-confirmation-email', 'viewOwnerConfirmationEmail')->name('view-owner-confirmation-email');
    Route::get('/email-information', 'viewEmailInformation')->name('view-email-information');
});

Route::controller(ParameterMenuController::class)->group(function () {
    Route::get('/input-job-parameter', 'viewInputJobParameter')->name('view-input-job-parameter');
    Route::get('/input-city-code', 'viewInputCityCode')->name('view-input-city-code');
});

Route::controller(MenuController::class)->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});
