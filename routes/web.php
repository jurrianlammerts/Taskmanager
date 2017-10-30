<?php

Route::group(['middleware' => ['web']], function() {
    // Deze routes zijn alleen toegankelijk als je bent ingelogd
    Route::group(['middleware' => ['auth']], function() {
        Route::get('/', array(
            'as' => 'home',
            'uses' => 'ItemController@getIndex'
        ));

        Route::get('/list', array(
            'as' => 'todo',
            'uses' => 'ItemController@getIndex'
        ));

        Route::post('/list', array(
            'as' => 'todo',
            'uses' => 'ItemController@postIndex'
        ));

        Route::get('/new', array(
            'as' => 'new',
            'uses' => 'ItemController@getNew'
        ));
        
        Route::post('new', array(
            'uses' => 'ItemController@postNew'
        ));
        
        Route::get('/delete/{item}', array(
            'as' => 'delete',
            'uses' => 'ItemController@getDelete'
        ));

        Route::get('/logout', array(
            'as' => 'logout',
            'uses' =>'AuthController@getLogout'
        ));

        Route::resource('/users', 'UserController');
        Route::get('users', 'UserController@index');


    //Route::post('/users/{id}/destroy', array(
    //    'as' => 'users',
    //    'uses' => 'UserController@destroy'
    //));

        Route::group(['middleware' => ['admin']], function() {
            Route::post('admin', 'UserController@update');
            Route::get('/admin', 'UserController@getIndex');
        });

    });

    /**
     * AUTH
     */
    Route::get('/login', array(
        'as' => 'login',
        'uses' => 'AuthController@getLogin'
    ));

    Route::post('login', array(
        'uses' => 'AuthController@postLogin'
    ));

    Route::post('/signup', array(
        'as' => 'signup',
        'uses' => 'UserController@postSignUp'
    ));

    Route::get('/signup', function () {
        return view('signup');
    });
});




