<?php
// Start Routes for Status 
Route::resource('status',App\Http\Controllers\StatusController::class);
// End Routes for Status

// Start Routes for payments 
Route::resource('payments',App\Http\Controllers\PaymentsController::class);
// End Routes for payments

// Start Routes for Settings 
Route::resource('settings',App\Http\Controllers\SettingsController::class);
// End Routes for Settings

// Start Routes for Members 
Route::resource('members',App\Http\Controllers\MembersController::class);
// End Routes for Members

// Start Routes for Salary 
Route::resource('salary',App\Http\Controllers\SalaryController::class);
// End Routes for Salary

// Start Routes for Salary Elements 
Route::resource('salaryelements',App\Http\Controllers\SalaryElementsController::class);
// End Routes for Salary Elements
?>