@extends('layout.base')

@section('content')
    <h1>{{$project->name}}</h1>
    <h4>Description:</h4>
    <p>{{$project->description}}</p>
    <h4>Project's price::</h4>
    <p>{{$project->price}}€</p>
    <h4>Done jobs::</h4>
    <p>{{$project->done_jobs}}</p>
    <h4>Start date::</h4>
    <p>{{$project->start_time}}</p>
    <h4>End date::</h4>
    <p>{{$project->end_time}}</p>
    <a href="/project/{{$project->id}}/edit" class="btn btn-primary">Edit Project</a>
@endsection