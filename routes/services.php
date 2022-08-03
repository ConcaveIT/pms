<?php
// Start Routes for Project 
Route::resource('api/project',App\Http\Controllers\Api\ProjectController::class);
// End Routes for Project 

// Start Routes for Status 
Route::resource('api/status',App\Http\Controllers\Api\StatusController::class);
// End Routes for Status 
?>