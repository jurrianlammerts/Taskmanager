@extends('layouts.nav')

@section('content')

<div class="card">
    <h2 class="">Your Items <small>(<a href="{{ URL::route('new') }}">New task</a>)</small></h2>

    <ul>
        @foreach($items as $item)
            <form method="post">
                {{csrf_field()}}
                <li>
                    <input type="hidden" name="id" value="{{ $item->id }}">
                    <input type="hidden" name="owner_id" value="{{ $item->owner_id }}">

                    <input id="task_checkbox" type="checkbox" {{ $item->done ? 'checked' : '' }} onclick="this.form.submit()"/>

                    <label class="{{ $item->done ? 'checked' : null }}">{{ e($item->name) }}</label> (<a href="{{ URL::route('delete', $item->id) }}">x</a>)
                </li>
            </form>
        @endforeach
    </ul>
</div>

@stop
