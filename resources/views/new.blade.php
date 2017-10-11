@extends('layouts.nav')

@section('content')

    <div class="col-lg-4 col-lg-10">
        <div class="todo-container">
            <div class="panel-heading">
                <div class="fullname todo-header text-center">
                    <h2><i class="fa fa-check-square-o"></i>  New Task </h2>
                </div>
                <div class="panel-body container text-center">
                    <div class="row">
                        {{ Form::open() }}
                        <div class="col-lg-2">
                            @foreach($errors->all() as $error)
                                <p class="error">{{ $error }}</p>
                            @endforeach
                            <input type="text" class="form-control" name="name" placeholder="What to do next?" />
                        </div>
                        <div class="col-lg-2">
                            <button type="button" class="btn btn-round-green btn-primary">Create</button>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
