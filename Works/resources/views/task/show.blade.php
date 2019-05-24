@extends('layouts.app')

@section('content')
    <a href="/task" class="btn btn-default">Go Back</a>
    <h1>{{$task->name}}</h1>
    <div class="card">
        <div class="card-body">
            <h2>Professor:</h2>
            <h3>{{$professor->name}}</h3>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4>Description:</h4>
            <p>{{$task->description}}</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4>Task's English name::</h4>
            <p>{{$task->name_english}}</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4>Type:</h4>
            <p>{{$task->type}}</p>
        </div>
    </div>
    <div class="row" style="margin-left: 0px">
        @if(Auth::user()->id == $task->professor_id)
        <a href="/task/{{$task->id}}/edit" class="btn btn-primary">Edit Task</a>

            {!!Form::open(['action' => ['TaskController@destroy', $task->id], 'method' => 'POST', 'align' => 'right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    </div>
@endsection