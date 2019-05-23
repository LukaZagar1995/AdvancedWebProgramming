@extends('layout.base')

@section('content')
    <div class="custom-control-inline">
    <h1>Projects</h1>
    <a class="btn btn-success" href="/project/create" role="button" style="vertical-align: center">Create Project</a>
    </div>
    @if(count($projects) > 0)
        @foreach($projects as $project)
            <div class="card card-body bg-light">
                <h3><a href="/project/{{$project->id}}">{{$project->name}}</a></h3>
                <small>{{$project->description}}</small>
            </div>
            @endforeach
        {{$projects->links()}}
    @else
        <p>No projects found!</p>
    @endif
@endsection