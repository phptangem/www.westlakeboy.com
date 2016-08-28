<?php

Route::group(['namespace'=>'Auth'], function(){
    /**
     * The routes require the user not  be logged in.
     */
    Route::group(['middleware'=>'guest'], function(){

        //Registration routes
        Route::get('register','AuthController@showRegistrationForm')->name('auth.register');
        Route::post('register','AuthController@register');
    });
});