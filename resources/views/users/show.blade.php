@extends('layouts.nav')

@section('content')


    <div class="container">

    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('users') }}">View All Users</a></li>
            <li><a href="{{ URL::to('users/create') }}">Create a User</a>
        </ul>
    </nav>

    <h1>Showing {{ $user->username }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $user-> username}}</h2>
        <p>
            <strong>Email:</strong> {{ $user->email }}<br>
            <strong>Username:</strong> {{ $user->username }}<br>

        </p>
    </div>

</div>
</body>
</html>

@stop
