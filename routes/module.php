<?php
// Start Routes for Status 
Route::resource('status',App\Http\Controllers\StatusController::class);
// End Routes for Status

// Start Routes for payments 
Route::resource('payments',App\Http\Controllers\PaymentsController::class);
// End Routes for payments

// Start Routes for Settings 
Route::resource('settings',App\Http\Controllers\SettingsController::class);
// End Routes for Settings

// Start Routes for Members 
Route::resource('members',App\Http\Controllers\MembersController::class);
// End Routes for Members

// Start Routes for Salary 
Route::resource('salary',App\Http\Controllers\SalaryController::class);
// End Routes for Salary

// Start Routes for Salary Elements 
Route::resource('salaryelements',App\Http\Controllers\SalaryElementsController::class);
// End Routes for Salary Elements

// Start Routes for Clients 
Route::resource('clients',App\Http\Controllers\ClientsController::class);
// End Routes for Clients

// Start Routes for Departments 
Route::resource('departments',App\Http\Controllers\DepartmentsController::class);
// End Routes for Departments

// Start Routes for Expenses 
Route::resource('expenses',App\Http\Controllers\ExpensesController::class);
// End Routes for Expenses

// Start Routes for Holidays 
Route::resource('holidays',App\Http\Controllers\HolidaysController::class);
// End Routes for Holidays

// Start Routes for Leave Requests 
Route::resource('leaverequests',App\Http\Controllers\LeaveRequestsController::class);
// End Routes for Leave Requests

// Start Routes for Member Experiences 
Route::resource('memberexperiences',App\Http\Controllers\MemberExperiencesController::class);
// End Routes for Member Experiences

// Start Routes for Projects 
Route::resource('projects',App\Http\Controllers\ProjectsController::class);
// End Routes for Projects

// Start Routes for Task Reports 
Route::resource('taskreports',App\Http\Controllers\TaskReportsController::class);
// End Routes for Task Reports

// Start Routes for Tasks 
Route::resource('tasks',App\Http\Controllers\TasksController::class);
// End Routes for Tasks

// Start Routes for Users 
Route::resource('users',App\Http\Controllers\UsersController::class);
// End Routes for Users
?>