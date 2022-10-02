<?php
// Start Routes for Status 
Route::resource('api/status',App\Http\Controllers\Api\StatusController::class, [ 'as' => 'api' ]);
// End Routes for Status 

// Start Routes for payments 
Route::resource('api/payments',App\Http\Controllers\Api\PaymentsController::class, [ 'as' => 'api' ]);
// End Routes for payments 

// Start Routes for Settings 
Route::resource('api/settings',App\Http\Controllers\Api\SettingsController::class, [ 'as' => 'api' ]);
// End Routes for Settings 

// Start Routes for Members 
Route::resource('api/members',App\Http\Controllers\Api\MembersController::class, [ 'as' => 'api' ]);
// End Routes for Members 

// Start Routes for Salary 
Route::resource('api/salary',App\Http\Controllers\Api\SalaryController::class, [ 'as' => 'api' ]);
// End Routes for Salary 

// Start Routes for Salary Elements 
Route::resource('api/salaryelements',App\Http\Controllers\Api\SalaryElementsController::class, [ 'as' => 'api' ]);
// End Routes for Salary Elements 
?>