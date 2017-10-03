<?php

Route::get('/', array(
    'as' => 'home',
    'uses' => 'HomeController@getIndex'
))->middleware('auth');

Route::post('/', array(
    'uses' => 'HomeController@postIndex'
))->middleware('web');


Route::get('/new', array(
    'as' => 'new',
    'uses' => 'HomeController@getNew'
));

Route::post('/new', array(
    'uses' => 'HomeController@postNew'
))->middleware('web');


Route::get('/login', array(
    'as' => 'login',
    'uses' => 'AuthController@getLogin'
))->middleware('guest');

Route::post('login', array(
    'uses' => 'AuthController@postLogin'
))->middleware('web');


