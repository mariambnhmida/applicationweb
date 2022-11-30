<?php

Route::group(['module' => 'Site', 'middleware' => ['web'], 'namespace' => 'App\Modules\Site\Controllers'], function() {

    //Route::resource('Site', 'SiteController');
    Route::get('/site','SiteController@showSite')->name('showSite');
    Route::post('/site','SiteController@create')->name('create');
    Route::get('site/listsite','SiteController@showlistsite')->name('showlistsite');
    Route::get('site/editsite/{id}', 'SiteController@showeditsite')->name('showeditsite');
    Route::post('site/editsite/{id}', 'SiteController@handleEditSite')->name('handleEditSite');
    Route::get('site/deletesite/{id}', 'SiteController@deletesite')->name('deletesite');
    Route::get('/site/listsitedevise/{id}','SiteController@showListSiteDevise')->name('showListSiteDevise');
});
