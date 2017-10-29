@extends('layouts.nav')

@section('content')

<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('users') }}"></a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('users') }}">View All Users</a></li>
            <li><a href="{{ URL::to('users/create') }}">Create a User</a>
        </ul>
    </nav>

    <h1>All the Users</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Is Admin?</td>
            <td></td>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->first_name }}</td>
                <td>{{ $value->last_name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->is_admin }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- show the user (uses the show method found at GET /users/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('users/' . $value->id) }}">Show this user</a>

                    <!-- edit this user (uses the edit method found at GET /users/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('users/' . $value->id . '/edit') }}">Edit this user</a>

                    <!-- delete the user (uses the destroy method DESTROY /users/{id} -->
                    <a class="btn btn-small btn-danger" href="{{ URL::to('users/' . $value->id . '/destroy') }}">Delete this user</a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>

@stop

