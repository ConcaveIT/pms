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

// Start Routes for Clients 
Route::resource('api/clients',App\Http\Controllers\Api\ClientsController::class, [ 'as' => 'api' ]);
// End Routes for Clients 

// Start Routes for Departments 
Route::resource('api/departments',App\Http\Controllers\Api\DepartmentsController::class, [ 'as' => 'api' ]);
// End Routes for Departments 

// Start Routes for Expenses 
Route::resource('api/expenses',App\Http\Controllers\Api\ExpensesController::class, [ 'as' => 'api' ]);
// End Routes for Expenses 

// Start Routes for Holidays 
Route::resource('api/holidays',App\Http\Controllers\Api\HolidaysController::class, [ 'as' => 'api' ]);
// End Routes for Holidays 

// Start Routes for Leave Requests 
Route::resource('api/leaverequests',App\Http\Controllers\Api\LeaveRequestsController::class, [ 'as' => 'api' ]);
// End Routes for Leave Requests 

// Start Routes for Member Experiences 
Route::resource('api/memberexperiences',App\Http\Controllers\Api\MemberExperiencesController::class, [ 'as' => 'api' ]);
// End Routes for Member Experiences 

// Start Routes for Projects 
Route::resource('api/projects',App\Http\Controllers\Api\ProjectsController::class, [ 'as' => 'api' ]);
// End Routes for Projects 

// Start Routes for Task Reports 
Route::resource('api/taskreports',App\Http\Controllers\Api\TaskReportsController::class, [ 'as' => 'api' ]);
// End Routes for Task Reports 

// Start Routes for Tasks 
Route::resource('api/tasks',App\Http\Controllers\Api\TasksController::class, [ 'as' => 'api' ]);
// End Routes for Tasks 

// Start Routes for Users 
Route::resource('api/users',App\Http\Controllers\Api\UsersController::class, [ 'as' => 'api' ]);
// End Routes for Users 
?>