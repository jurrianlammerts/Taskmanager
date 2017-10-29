@extends('layouts.nav')

@section('content')


    <div class="container">

    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('users') }}">View All Users</a></li>
            <li><a href="{{ URL::to('users/create') }}">Create a User</a>
        </ul>
    </nav>

    <h1>Edit {{ $user->name }}</h1>

    {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('first_name', 'First Name') }}
        {{ Form::text('first_name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('last_name', 'Last Name') }}
        {{ Form::text('last_name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('is_admin', 'Is a Admin?') }}
        {{ Form::checkbox('is_admin', 1, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the User!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@stop
