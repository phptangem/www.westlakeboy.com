<?php
Route::group(['middleware'=>'web'],function(){
    /**
     * Frontend Routes
     * Namespace indicate folder structure
     */
    Route::group(['namespace'=>'Frontend'], function(){
        include(__DIR__.'/Routes/Frontend/Frontend.php');
    });
});

