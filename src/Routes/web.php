<?php
/**
 * Created by PhpStorm.
 * User: sanjayam
 * Date: 07/Dec/2016
 * Time: 11:01 AM
 */

Route::group(['middleware' => ['web']], function () {
    Route::group(['prefix' => 'auth', 'namespace' => 'SlimAuth\Http\Controllers'], function () {
        Route::get('login', [
            'as' => 'auth.login',
            'uses' => 'LoginController@index'
        ]);
    });
});