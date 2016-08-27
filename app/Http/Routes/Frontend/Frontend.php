<?php

/**
 * Frontend controllers
 */
Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::get('test', 'FrontendController@test')->name('frontend.test');