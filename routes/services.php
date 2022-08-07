<?php
// Start Routes for Status 
Route::resource('api/status',App\Http\Controllers\Api\StatusController::class, [ 'as' => 'api' ]);
// End Routes for Status 
?>