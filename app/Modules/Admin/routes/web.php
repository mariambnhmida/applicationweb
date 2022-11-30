<?php

Route::group(['module' => 'Admin', 'middleware' => ['web'], 'namespace' => 'App\Modules\Admin\Controllers'], function() {

Route::resource('Admin', 'AdminController');
//Route::get('login/','AdminController@showlogin')->name('showlogin');



});
