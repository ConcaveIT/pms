<?php
// Start Routes for Settings 
Route::resource('settings',App\Http\Controllers\SettingsController::class);
// End Routes for Settings

// Start Routes for Leave Request 
Route::resource('leaverequest',App\Http\Controllers\LeaveRequestController::class);
// End Routes for Leave Request
?>