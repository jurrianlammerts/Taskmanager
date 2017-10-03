@extends('layouts.main')

@section('content')

    <h1>Your Items <small>(<a href="new">New task</a>)</small></h1>

    <ul>

        @foreach($items as $item)
            <li>
                {{ Form::open() }}

                        <input type="hidden" name="id" value="{{ $item->id }}">

                        <input
                                id="task_checkbox"
                                type="checkbox"
                                onclick="document.getElementById('task_checkbox').submit();"

                                {{ $item->done ? 'checked' : '' }}
                        />

                    {{ $item->name }}

                {{ Form::close() }}
            </li>
        @endforeach
    </ul>
@stop
