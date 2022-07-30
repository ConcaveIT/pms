<?php
// Start Routes for Members Module 
Route::resource('members',App\Http\Controllers\MembersController::class);
// End Routes for Members Module

// Start Routes for Members Module Orders 
Route::resource('clients',App\Http\Controllers\ClientsController::class);
// End Routes for Members Module Orders

// Start Routes for Projects 
Route::resource('project',App\Http\Controllers\ProjectController::class);
// End Routes for Projects

// Start Routes for Micro Packages 
Route::resource('micropackagesf',App\Http\Controllers\MicroPackagesfController::class);
// End Routes for Micro Packages
?>