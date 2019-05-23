@extends('layout.base')

@section('content')
    <h1>Create project</h1>
    {{ Form::open(['action' => ['ProjectController@update', $project->id], 'method' => 'POST']) }}
    <div class="form-group">
        {{Form::label('name', 'Project Name')}}
        {{Form::text('name', $project->name, ['class' => 'form-control', 'placeholder' => 'Project Name'])}}
    </div>
    @if($errors->has('name'))
        <div class="alert alert-danger">
            {{$errors->first('name')}}
        </div>
    @endif
    <div class="form-group">
        {{Form::label('description', 'Project Description')}}
        {{Form::textarea('description', $project->description, ['class' => 'form-control', 'placeholder' => 'Project Description'])}}
    </div>
    @if($errors->has('description'))
        <div class="alert alert-danger">
            {{$errors->first('description')}}
        </div>
    @endif
    <div class="form-group">
        {{Form::label('price', 'Project Price')}}
        {{Form::number('price', $project->price, ['class' => 'form-control', 'placeholder' => 'Project Price'])}}
    </div>
    @if($errors->has('price'))
        <div class="alert alert-danger">
            {{$errors->first('price')}}
        </div>
    @endif
    <div class="form-group">
        {{Form::label('done_jobs', 'Project\'s Done Jobs')}}
        {{Form::textarea('done_jobs', $project->done_jobs, ['class' => 'form-control', 'placeholder' => 'Project\'s Done Jobs'])}}
    </div>
    <div class="form-group">
        {{Form::label('user_id', 'Available Workers')}}
        {{ Form::select('users_id[]', $users, null, ['class' => 'form-control', 'multiple' => 'true'])  }}
    </div>

    <div class="form-group">
        {{Form::label('start_time', 'Project\'s Start Date')}}
        {{Form::date('start_time', $project->start_time, ['class' => 'form-control', 'placeholder' => 'Project\'s Start Date'])}}
    </div>
    @if($errors->has('start_time'))
        <div class="alert alert-danger">
            {{$errors->first('start_time')}}
        </div>
    @endif
    <div class="form-group">
        {{Form::label('end_time', 'Project\'s End Date')}}
        {{Form::date('end_time', $project->end_time, ['class' => 'form-control', 'placeholder' => 'Project\'s End Date'])}}
    </div>
    @if($errors->has('end_time'))
        <div class="alert alert-danger">
            {{$errors->first('end_time')}}
        </div>
    @endif
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}


@endsection