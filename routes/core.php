<?php

    // GET	/photos	index	photos.index
    // GET	/photos/create	create	photos.create
    // POST	/photos	store	photos.store
    
    // GET	/photos/{photo}	show	photos.show
    // GET	/photos/{photo}/edit	edit	photos.edit
    // PUT/PATCH	/photos/{photo}	update	photos.update
    // DELETE	/photos/{photo}	destroy	photos.destroy


    Route::resource('/module',App\Http\Controllers\ModuleGeneratorController::class);
    Route::post('/build-module/{id}',[App\Http\Controllers\ModuleGeneratorController::class,'buildModule'])->name('module.build');
    Route::get('/database-columns/{databasename}',[App\Http\Controllers\ModuleGeneratorController::class,'getDatabaseColumns'])->name('database.columns');
    Route::get('/database-relation-options',[App\Http\Controllers\ModuleGeneratorController::class,'getDatabaseRelationOptions'])->name('database.relation.options');
    
    Route::get('/create-migration',[App\Http\Controllers\ModuleGeneratorController::class,'createMigration'])->name('module.create.migration');
    Route::post('/generate-migration',[App\Http\Controllers\ModuleGeneratorController::class,'generateMigration'])->name('module.generate.migration');

    Route::post('/api-login',[App\Http\Controllers\ModuleGeneratorController::class,'apiLogin'])->name('module.api.login');
    
    

?>