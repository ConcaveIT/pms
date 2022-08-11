<?php
// Start Routes for Status 
Route::resource('status',App\Http\Controllers\StatusController::class);
// End Routes for Status

// Start Routes for Department 
Route::resource('department',App\Http\Controllers\DepartmentController::class);
// End Routes for Department

// Start Routes for Member 
Route::resource('member',App\Http\Controllers\MemberController::class);
// End Routes for Member

// Start Routes for User Accounts 
Route::resource('useraccounts',App\Http\Controllers\UserAccountsController::class);
// End Routes for User Accounts

// Start Routes for Task Report 
Route::resource('taskreport',App\Http\Controllers\TaskReportController::class);
// End Routes for Task Report
?>