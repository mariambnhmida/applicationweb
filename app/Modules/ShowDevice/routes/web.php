<?php

Route::group(['module' => 'ShowDevice', 'middleware' => ['web'], 'namespace' => 'App\Modules\ShowDevice\Controllers'], function() {

    Route::resource('ShowDevice', 'ShowDeviceController');
    Route::get('/devise/list/{id}','ShowDeviceController@showdevice1')->name('showdevice1');

});
