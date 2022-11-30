<?php

Route::group(['module' => 'Devise', 'middleware' => ['web'], 'namespace' => 'App\Modules\Devise\Controllers'], function() {

//    Route::resource('Devise', 'DeviseController');
    Route::get('/devise','DeviseController@showdevise')->name('showdevise');
    Route::post('devise','DeviseController@handelCreateDevise')->name('handelCreateDevise');
    Route::get('/devise/list_devise/','DeviseController@showlistdevise2')->name('showlistdevise2');
    Route::get('/devise/list','DeviseController@showlist')->name('showlist');

    Route::get('/devise/EditDevise/{id}', 'DeviseController@showEditDevise')->name('showEditDevise');
    Route::post('/devise/EditDevise/{id}' , 'DeviseController@handleeditdevise')->name('handleeditdevise');
    Route::get('/devise/DeleteDevise/{id}', 'DeviseController@handleDeleteDevise')->name('handleDeleteDevise');
    Route::get('devise/search' , 'DeviseController@search')->name('search');
    Route::get('/devise/EditSettings/{id}', 'DeviseController@showeditsettingsdevise')->name('showeditsettingsdevise');
    Route::post('/devise/EditSettings/{id}', 'DeviseController@handleEditSettingsDevise')->name('handleEditSettingsDevise');
    Route::get('/devise/chart','DeviseController@showchart')->name('showchart');
    Route::get('/devise/pdf','DeviseController@export_pdf')->name('export_pdf');




});
