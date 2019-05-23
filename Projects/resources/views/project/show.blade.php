@extends('layout.base')

@section('content')
    <h1>{{$project->name}}</h1>
    <div class="card">
        <div class="card-body">
    <h2>Project Leader:</h2>
    <h3>{{$leader->name}}</h3>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h2>Working on Project:</h2>
            <h3>
                @foreach($workers as $worker)
                    {{$worker->name}}
                    @endforeach
            </h3>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
    <h4>Description:</h4>
    <p>{{$project->description}}</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
    <h4>Project's price::</h4>
    <p>{{$project->price}}€</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
    <h4>Done jobs::</h4>
    <p>{{$project->done_jobs}}</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
    <h4>Start date::</h4>
    <p>{{$project->start_time}}</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
    <h4>End date::</h4>
    <p>{{$project->end_time}}</p>
        </div>
    </div>
    <div class="row" style="margin-left: 0px">
    <a href="/project/{{$project->id}}/edit" class="btn btn-primary">Edit Project</a>
    @if(Auth::user()->id == $project->user_id)

        {!!Form::open(['action' => ['ProjectController@destroy', $project->id], 'method' => 'POST', 'align' => 'right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    @endif
    </div>
@endsection