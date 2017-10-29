<?php

namespace todoapp\Http\Controllers;

use todoapp\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function getIndex()
    {
        if ($user = Auth::user()) {
            // get all the users
            $users = User::all();

            // load the view and pass the users
            return view('users.index')->with('users', $users);

        } else {
            return Redirect('/login');
        }
    }

    public function create()
    {
        // load the create form (app/views/users/create.blade.php)
        return view('users.create');
    }

    public function store(Request $request)
    {
        // validation rules
        $validatedData = $request->validate([
            'first_name' => 'required|max:255|alpha',
            'last_name' => 'required|max:255|alpha',
            'username' => 'required|unique:users,username|max:255',
            'email' => 'required|unique:users,email|email|max:255',
            'password' => 'required|max:255'
        ]);

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
    }

    public function show($id)
    {
        // get the user
        $user = User::find($id);

        // show the view and pass the user to it
        return view('users.show')->with('user', $user);
    }

    public function edit($id)
    {
        // get the user
        $user = User::find($id);

        // show the edit form and pass the user
        return View('users.edit')->with('user', $user);
    }

    public function update(Request $request)
    {
        // validate
        $validatedData = $request->validate([
            'first_name' => 'required|max:255|alpha',
            'last_name' => 'required|max:255|alpha',
            'username' => 'required|unique:users,username|max:255',
            'email' => 'required|unique:users,email|email|max:255',
            'password' => 'required|max:255'
        ]);

        if (!$validatedData) {
            return Redirect::route('users')->withErrors($validatedData);
        } else {
            $username = $request['username'];
            $email = $request['email'];
            $first_name = $request['first_name'];
            $last_name = $request['last_name'];
            $password = bcrypt($request['password']);
            $is_admin = $request['is_admin'];

            $user = new User();
            $user->first_name = $first_name;
            $user->last_name = $last_name;
            $user->username = $username;
            $user->email = $email;
            $user->password = $password;
            $user->is_admin =

            $user->save();

        }

        // redirect
        Session::flash('message', 'Successfully updated user!');
        return Redirect::route('users');

    }

    public function destroy($id)
    {
        // delete
        $user = User::find($id);
        $user->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the user!');
        return Redirect::to('Users');
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

}
