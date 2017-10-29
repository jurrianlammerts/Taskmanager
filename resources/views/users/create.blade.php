@extends('layouts.nav')

@section('content')

    <div class="container">

        <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('users') }}">View All Users</a></li>
                <li><a href="{{ URL::to('users/create') }}">Create a User</a>
            </ul>
        </nav>

        <h1>Create a User</h1>

        @foreach($errors->all() as $error)
            <div class="alert alert-danger alert-dismissable" role="alert">
                <span class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></span>
                <p>{{ $error }}</p>
            </div>

        @endforeach

        {{ Form::open(array('url' => 'admin')) }}

        <div class="form-content">
            <div class="form-group">
                <input type="text" name="first_name" placeholder="First Name" class="form-control ">
            </div>
            <div class="form-group">
                <input type="text" name="last_name" placeholder="Last Name" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" class="form-control ">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control ">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" class="form-control ">
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    Make admin
                    <div class="material-switch pull-right">
                        <input id="someSwitchOptionSuccess" name="is_admin" type="checkbox"/>
                        <label for="someSwitchOptionSuccess" class="label-success"></label>
                    </div>
                </li>
            </ul>
        </div>

        {{ Form::submit('Create the User!', array('class' => 'btn btn-lg btn-primary btn-rounded')) }}

        {{ Form::close() }}

    </div>
</body>
</html>

@stop
