<?php
// Start Routes for Members Module 
Route::resource('api/members',App\Http\Controllers\Api\MembersController::class);
// End Routes for Members Module

// Start Routes for Members Module Orders 
Route::resource('api/clients',App\Http\Controllers\Api\ClientsController::class);
// End Routes for Members Module Orders

// Start Routes for Projects 
Route::resource('api/project',App\Http\Controllers\Api\ProjectController::class);
// End Routes for Projects 

// Start Routes for Micro Packages 
Route::resource('api/micropackagesf',App\Http\Controllers\Api\MicroPackagesfController::class);
// End Routes for Micro Packages 
?>