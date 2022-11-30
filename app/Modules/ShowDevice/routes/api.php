<?php

Route::group(['module' => 'ShowDevice', 'middleware' => ['api'], 'namespace' => 'App\Modules\ShowDevice\Controllers'], function() {

    Route::resource('ShowDevice', 'ShowDeviceController');

});
