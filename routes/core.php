<?php

    // GET	/photos	index	photos.index
    // GET	/photos/create	create	photos.create
    // POST	/photos	store	photos.store
    
    // GET	/photos/{photo}	show	photos.show
    // GET	/photos/{photo}/edit	edit	photos.edit
    // PUT/PATCH	/photos/{photo}	update	photos.update
    // DELETE	/photos/{photo}	destroy	photos.destroy


    Route::resource('/module',App\Http\Controllers\ModuleGeneratorController::class);
    Route::post('/build-module',[App\Http\Controllers\ModuleGeneratorController::class],'buildModule');
    

?>