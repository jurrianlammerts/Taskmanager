<?php

namespace todoapp\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use View;


class AuthController extends BaseController
{

    public function getLogin(){
        return View::make('login');
    }

    public function postLogin(){
        $rules = array('username' => 'required', 'password' => 'required');
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::route('login')->withErrors($validator);
        }

        $auth = Auth::attempt(array(
            'name' => Input::get('username'),
            'password' => Input::get('password')
        ), false);
        if(!$auth) {
            return Redirect::route('login')->withErrors(array(
                'Invalid credentials were provided.'
            ));
        }
        return Redirect::route('home');

    }
}
