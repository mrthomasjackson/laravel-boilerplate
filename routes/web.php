<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return redirect('/login');
});

Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => 'role:Administrator'], function () {

        Route::get('/admin', 'AdminController@index');

        Route::group(['middleware' => 'permission:Manage Users'], function () {
            Route::get('/admin/users', 'UserController@index');
            Route::post('/admin/users', 'UserController@store');
            Route::get('/admin/users/{id}', 'UserController@show');
            Route::put('/admin/users/{id}', 'UserController@update');
            Route::delete('/admin/users/{id}', 'UserController@destroy');
        });

        Route::group(['middleware' => 'permission:Manage Roles'], function () {
            Route::get('/admin/roles', 'RoleController@index');
            Route::post('/admin/roles', 'RoleController@store');
            Route::get('/admin/roles/{id}', 'RoleController@show');
            Route::put('/admin/roles/{id}', 'RoleController@update');
            Route::delete('/admin/roles/{id}', 'RoleController@destroy');
        });

        Route::group(['middleware' => 'permission:Manage Permissions'], function () {
            Route::get('/admin/permissions', 'PermissionController@index');
            Route::post('/admin/permissions', 'PermissionController@store');
            Route::get('/admin/permissions/{id}', 'PermissionController@show');
            Route::put('/admin/permissions/{id}', 'PermissionController@update');
            Route::delete('/admin/permissions/{id}', 'PermissionController@destroy');
        });

    });

});