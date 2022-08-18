<?php
// Start Routes for Status 
Route::resource('api/status',App\Http\Controllers\Api\StatusController::class, [ 'as' => 'api' ]);
// End Routes for Status 

// Start Routes for payments 
Route::resource('api/payments',App\Http\Controllers\Api\PaymentsController::class, [ 'as' => 'api' ]);
// End Routes for payments 
?>