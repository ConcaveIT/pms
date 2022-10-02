<?php

    // GET	/photos	index	photos.index
    // GET	/photos/create	create	photos.create
    // POST	/photos	store	photos.store
    
    // GET	/photos/{photo}	show	photos.show
    // GET	/photos/{photo}/edit	edit	photos.edit
    // PUT/PATCH	/photos/{photo}	update	photos.update
    // DELETE	/photos/{photo}	destroy	photos.destroy


    Route::resource('/module',App\Http\Controllers\ModuleGeneratorController::class);
    Route::any('/build-module/{id}',[App\Http\Controllers\ModuleGeneratorController::class,'buildModule'])->name('module.build');

    Route::resource('/sidemenu',App\Http\Controllers\SideMenuController::class);
    Route::get('/sidemenu/edit/{any?}',[App\Http\Controllers\SideMenuController::class,'edit']);
    Route::get('/sidemenu-bulk-create',[App\Http\Controllers\SideMenuController::class,'bulkCreate']);
    Route::get('/sidemenu/destroy/{any?}',[App\Http\Controllers\SideMenuController::class,'destroy']);

    Route::get('/menu/icon',[App\Http\Controllers\SideMenuController::class,'getIcons']);
    Route::post('menu/save',[App\Http\Controllers\SideMenuController::class,'store']);
    Route::post('menu/saveorder',[App\Http\Controllers\SideMenuController::class,'postSaveorder']);

    Route::get('/database-columns/{databasename}',[App\Http\Controllers\ModuleGeneratorController::class,'getDatabaseColumns'])->name('database.columns');
    Route::get('/database-relation-options',[App\Http\Controllers\ModuleGeneratorController::class,'getDatabaseRelationOptions'])->name('database.relation.options');
    
    Route::get('/create-migration',[App\Http\Controllers\ModuleGeneratorController::class,'createMigration'])->name('module.create.migration');
    Route::post('/generate-migration',[App\Http\Controllers\ModuleGeneratorController::class,'generateMigration'])->name('module.generate.migration');

    Route::post('/api-login',[App\Http\Controllers\ModuleGeneratorController::class,'apiLogin'])->name('module.api.login');
    
    

?>