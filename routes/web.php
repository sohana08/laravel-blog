<?php


Route::get('/','UsersController@index');

Route::get('/technology','UsersController@technology');

Route::get('/signup','UsersController@signup');

Route::post('/','UsersController@store');


