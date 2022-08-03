<?php
// Start Routes for Project 
Route::resource('project',App\Http\Controllers\ProjectController::class);
// End Routes for Project

// Start Routes for Status 
Route::resource('status',App\Http\Controllers\StatusController::class);
// End Routes for Status
?>