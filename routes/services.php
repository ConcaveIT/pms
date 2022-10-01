<?php
// Start Routes for Status 
Route::resource('api/status',App\Http\Controllers\Api\StatusController::class, [ 'as' => 'api' ]);
// End Routes for Status 

// Start Routes for Department 
Route::resource('api/department',App\Http\Controllers\Api\DepartmentController::class, [ 'as' => 'api' ]);
// End Routes for Department 

// Start Routes for Member 
Route::resource('api/member',App\Http\Controllers\Api\MemberController::class, [ 'as' => 'api' ]);
// End Routes for Member 

// Start Routes for User Accounts 
Route::resource('api/useraccounts',App\Http\Controllers\Api\UserAccountsController::class, [ 'as' => 'api' ]);
// End Routes for User Accounts 

// Start Routes for Task Report 
Route::resource('api/taskreport',App\Http\Controllers\Api\TaskReportController::class, [ 'as' => 'api' ]);
// End Routes for Task Report 
?>