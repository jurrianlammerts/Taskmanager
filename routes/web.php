<?php

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

Route::get('/delete/{item}', array(
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

Route::get('/admin', [
    'as' => 'admin',
    'uses' => 'UserController@getIndex',
    'middleware' => 'admin',
]);

Route::post('admin', array(
    'uses' => 'UserController@update',
));

//Route::post('/users/{id}/destroy', array(
//    'as' => 'users',
//    'uses' => 'UserController@destroy'
//));


Route::get('/signup', function () {
    return view('signup');
});

Route::post('/signup', array(
    'as' => 'signup',
    'uses' => 'UserController@postSignUp'
));

Route::resource('users', 'UserController');
