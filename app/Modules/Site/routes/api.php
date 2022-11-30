<?php

Route::group(['module' => 'Site', 'middleware' => ['api'], 'namespace' => 'App\Modules\Site\Controllers'], function() {

    Route::resource('Site', 'SiteController');

});
