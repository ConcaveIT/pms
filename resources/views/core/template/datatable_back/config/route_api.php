<?php
$val_api .= "
// Start Routes for ".$module->module_title." 
Route::resource('api/{$route}',App\\Http\\Controllers\\Api\\".$controller."::class);
// End Routes for ".$module->module_title."
"; 

?>                    