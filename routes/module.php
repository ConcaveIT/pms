<?php
// Start Routes for Status 
Route::resource('status',App\Http\Controllers\StatusController::class);
// End Routes for Status

// Start Routes for payments 
Route::resource('payments',App\Http\Controllers\PaymentsController::class);
// End Routes for payments
?>