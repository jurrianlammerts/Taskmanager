<?php

namespace todoapp\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use todoapp\User;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function postIndex()
    {
        return view('signup');
    }

    public function postSignUp (Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|max:255|alpha',
            'last_name' => 'required|max:255|alpha',
            'username' => 'required|unique:users,username|max:255',
            'email' => 'required|unique:users,email|email|max:255',
            'password' => 'required|max:255'
        ]);

        if (!$validatedData) {
            return Redirect::route('signup')->withErrors($validatedData);
        } else {
            $username = $request['username'];
            $email = $request['email'];
            $first_name = $request['first_name'];
            $last_name = $request['last_name'];
            $password = bcrypt($request['password']);

            $user = new User();
            $user->first_name = $first_name;
            $user->last_name = $last_name;
            $user->username = $username;
            $user->email = $email;
            $user->password = $password;

            $user->save();

            return redirect()->back();
        }

    }

    public function postSignIn (Request $request) {

    }
}
