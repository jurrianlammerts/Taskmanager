<?php

Route::bind('task', function ($value, $route) {
    return todoapp\Item::where('id', $value)->first();
});

Route::get('/', array(
    'as' => 'home',
    'uses' => 'ItemController@getIndex'
));

Route::get('/list', array(
    'as' => 'todo',
    'uses' => 'ItemController@getIndex'
))->middleware('auth');

Route::post('/list', array(
    'as' => 'todo',
    'uses' => 'ItemController@postIndex'
))->middleware('web');

Route::get('/new', array(
    'as' => 'new',
    'uses' => 'ItemController@getNew'
));
Route::post('new', array(
    'uses' => 'ItemController@postNew'
))->middleware('web');

Route::get('/delete/{task}', array(
    'as' => 'delete',
    'uses' => 'ItemController@getDelete'
));


Route::get('/login', array(
    'as' => 'login',
    'uses' => 'AuthController@getLogin'
));

Route::post('login', array(
    'uses' => 'AuthController@postLogin'
))->middleware('web');

Route::get('/logout', array(
    'as' => 'logout',
    'uses' =>'AuthController@getLogout'
));


Route::get('/signup', [
    'as' => 'signup',
    'uses' => 'UserController@postIndex'
]);

Route::post('signup', array(
    'uses' => 'UserController@postSignUp'
));
