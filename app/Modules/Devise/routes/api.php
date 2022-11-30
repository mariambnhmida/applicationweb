<?php

Route::group(['module' => 'Devise', 'middleware' => ['api'], 'namespace' => 'App\Modules\Devise\Controllers'], function() {

    Route::resource('Devise', 'DeviseController');

});
