<?php

Route::group(['module' => 'User', 'middleware' => ['web'], 'namespace' => 'App\Modules\User\Controllers'], function() {

    Route::get('/user', 'UserController@showUser')->name('showUser');
    //Route::post('/user', 'UserController@handelCreateUser')->name('handelCreateUser');
    Route::get('user/listuser', 'UserController@showlistuser')->name('showlistuser');
    Route::post('user/create_user','UserController@handelCreateUser')->name('handelCreateUser');
    Route::get('user/createuser', 'UserController@showCreateUser')->name('showCreateUser');
    Route::get('user/edituser/{id}', 'UserController@showEditUser')->name('showEditUser');
    Route::post('user/edituser/{id}' , 'UserController@handleedituser')->name('handleedituser');
    Route::get('user/deleteuser/{id}' , 'UserController@handleDeleteUser')->name('handleDeleteUser');
    Route::get('/user/listusersite/{id}','UserController@showlistusersite')->name('showlistusersite');

    Route::get('user/home' , 'UserController@showUserDashboard')->name('showUserDashboard');
    Route::post('user/login','UserController@handleAdminLogin')->name('handleAdminLogin');
    Route::get('user/home','UserController@showlogin')->name('showlogin');
    Route::get('user/logout', 'UserController@handleLogout')->name('handleLogout');
    Route::get('user/index2', 'UserController@index2')->name('index2');
    Route::get('user/test' , 'UserController@test')->name('test');
    Route::get('/' , 'UserController@log')->name('log');
    Route::get('user/contact', 'UserController@showcontact')->name('showcontact');
    Route::post('user/contactM', 'UserController@createcontact')->name('createcontact');
    Route::get('user/inbox' , 'UserController@showinbox')->name('showinbox');


    Route::get('user/list' , 'UserController@showlist')->name('showlist');
    //Route::get('user/dashboard', 'UserController@showdashboard')->name('showdashboard');
});
