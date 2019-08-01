@extends('layout')

@section('content')

<div class="row">
    <div class="col-lg-18 ">

        <form action="{{route ('todo.save', ['id=$todo->id'])}}" method="post">
            {{ csrf_field() }}

            <input type="text" name="todo" value="{{$todo->todo}}" placeholder="Create a new Todo">
            

        </form>
        
   
    </div>

    </div>


@stop