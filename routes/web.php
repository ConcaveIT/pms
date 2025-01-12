<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleGeneratorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => 'core','middleware' => 'auth'], function () {
	include('core.php');
});

Route::group(['prefix' => 'module','middleware' => 'auth'], function () {
	include('module.php');
});

Route::group(['prefix' => 'service'], function () {
	include('services.php');
});

 

Auth::routes();
Route::get('/', [App\Http\Controllers\DashboardController::class, 'projectDashboard'])->name('dashboard');
Route::get('/hr-dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('hr.dashboard');

//Activity Log
Route::get('/activity-log', [App\Http\Controllers\LogController::class, 'getLog'] )->name('activity.log');


Route::get('/get-list', [App\Http\Controllers\PaymentsController::class, 'getList'] )->name('getList.list');



