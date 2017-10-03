@extends('layouts.main)

@section('content')

    <h1>Create New Task</h1>

    {{ Form::open() }}
        <input type="text" name="name" placeholder="The name of your task" />
        <input type="submit" value="Create" />
    {{ Form::close() }}

@stop,
