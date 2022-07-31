<?php
// Start Routes for Settings 
Route::resource('api/settings',App\Http\Controllers\Api\SettingsController::class);
// End Routes for Settings 

// Start Routes for Leave Request 
Route::resource('api/leaverequest',App\Http\Controllers\Api\LeaveRequestController::class);
// End Routes for Leave Request 
?>