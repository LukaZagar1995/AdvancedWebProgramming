@extends('layouts.app')

@section('content')
    <div class="custom-control-inline">
        <h1>Subjects</h1>
        @if($role->name == 'Admin')
            <a class="btn btn-default" href="/user" role="button" style="vertical-align: center">User List </a>
        @endif
        @if($role->name == 'Professor')
        <a class="btn btn-default" href="/task/create" role="button" style="vertical-align: center">Create Subject</a>
            @endif

        @if($role->name == 'Student')
            <a class="btn btn-default" href="/task/apply" role="button" style="vertical-align: center">Apply Subjects</a>
        @endif
    </div>
    @if(count($tasks) > 0)
        @foreach($tasks as $task)
            <div class="card card-body bg-light">
                <h3><a href="/task/{{$task->id}}">{{$task->name}}</a></h3>
                @foreach($users as $user)
                    @if($user->id == $task->professor_id)
                <h3>Professor:{{$user->name}}</h3>
                    @endif
                @endforeach
                <small>{{$task->description}}</small>
            </div>
        @endforeach
        {{$tasks->links()}}
    @else
        <p>No subjects found!</p>
    @endif
@endsection