@extends('layout')

@section('content')

    <div class="row">

        <div class="col-lg-6 col-lg-offset-3">

            <form action="/create/todo" method="post">

                {{ csrf_field() }}
                <input type="text" name="todo" class="form-control input-lg" placeholder="Create a new Todo">


            </form>
            
            
        </div>

    </div>

    <hr>

    @foreach($todos as $todo)

        {{ $todo->todo }}   <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger">Delete Todo</a>

        <hr>

    @endforeach

@stop