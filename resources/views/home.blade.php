@extends('layouts.nav')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="todo-container">
                    <div class="panel-heading">
                        <div class="fullname todo-header text-center">
                            <h2><i class="fa fa-check-square-o"></i>  Todos <small>(<a href="{{ URL::route('new') }}">New task</a>)</small></h2>
                        </div>
                        @foreach($items as $item)

                            <div class="panel-body">
                                <div class="todo-list-wrap">
                                    <ul class="todo-list">

                                        <label class="checkbox">
                                            {{ Form::open([
                                                'id' => "todo-form--{$item->id}",
                                                'url' => '/tick',
                                                'method' => 'POST'
                                            ]) }}
                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                                <input type="hidden" name="owner_id" value="{{ $item->owner_id }}">
                                                <input
                                                        id="task_checkbox"
                                                        type="checkbox"
                                                        {{ $item->done ? 'checked' : '' }}
                                                        onclick="document.getElementById('todo-form--{{$item->id}}').submit()"
                                                />
                                                <label class="{{ $item->done ? 'checked' : null }}">{{ e($item->name) }}</label> (<a href="{{ URL::route('delete', $item->id) }}">x</a>)
                                            {{ Form::close() }}
                                        </label>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="todo-container">
                    <div class="panel-heading">
                        <div class="fullname todo-header text-center">
                            <h2><i class="fa fa-bar-chart"></i>  Habits</h2>
                        </div>
                        <div class="panel-body">
                            <ul class="todo-list">
                                <h5><i class="fa fa-hand-peace-o"></i>  Positivity</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                        70%
                                    </div>
                                </div>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <ul class="todo-list">
                                <h5><i class="fa fa-heartbeat"></i>  Health</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:25%">
                                        25%
                                    </div>
                                </div>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <ul class="todo-list">
                                <h5><i class="fa fa-cutlery"></i>  Eating Healty</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                        60%
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="todo-container">
                    <div class="panel-heading">
                        <div class="fullname todo-header text-center">
                            <h2><i class="fa fa-"></i>  New List</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@stop
