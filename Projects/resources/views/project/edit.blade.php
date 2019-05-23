@extends('layout.base')

@section('content')
    <h1>Edit project</h1>
    {{ Form::open(['action' => ['ProjectController@update', $project->id], 'method' => 'POST']) }}
    <div class="form-group">
        {{Form::label('name', 'Project Name')}}
        @if(Auth::user()->id == $project->user_id)
        {{Form::text('name', $project->name, ['class' => 'form-control', 'placeholder' => 'Project Name'])}}
            @else
            {{Form::text('name', $project->name, ['class' => 'form-control', 'placeholder' => 'Project Name', 'readonly' => 'true'])}}
        @endif
    </div>
    @if($errors->has('name'))
        <div class="alert alert-danger">
            {{$errors->first('name')}}
        </div>
    @endif
    <div class="form-group">
        {{Form::label('description', 'Project Description')}}
        @if(Auth::user()->id == $project->user_id)
        {{Form::textarea('description', $project->description, ['class' => 'form-control', 'placeholder' => 'Project Description'])}}
            @else
            {{Form::text('description', $project->description, ['class' => 'form-control', 'placeholder' => 'Project Description', 'readonly' => 'true'])}}
        @endif
    </div>
    @if($errors->has('description'))
        <div class="alert alert-danger">
            {{$errors->first('description')}}
        </div>
    @endif
    <div class="form-group">
        {{Form::label('price', 'Project Price')}}
        @if(Auth::user()->id == $project->user_id)
            {{Form::textarea('price', $project->description, ['class' => 'form-control', 'placeholder' => 'Project Price'])}}
        @else
            {{Form::text('price', $project->description, ['class' => 'form-control', 'placeholder' => 'Project Price', 'readonly' => 'true'])}}
        @endif
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
        @if(Auth::user()->id == $project->user_id)
            {{ Form::select('users_id[]', $users, null, ['class' => 'form-control', 'multiple' => 'true'])  }}
        @else
            {{ Form::select('users_id[]', $users, null, ['class' => 'form-control', 'multiple' => 'true', 'readonly' => 'true'])  }}
        @endif
    </div>

    <div class="form-group">
        {{Form::label('start_time', 'Project\'s Start Date')}}
        @if(Auth::user()->id == $project->user_id)
            {{Form::textarea('start_time', $project->description, ['class' => 'form-control', 'placeholder' => 'Project\'s Start Date'])}}
        @else
            {{Form::text('start_time', $project->description, ['class' => 'form-control', 'placeholder' => 'Project\'s Start Date', 'readonly' => 'true'])}}
        @endif
    </div>
    @if($errors->has('start_time'))
        <div class="alert alert-danger">
            {{$errors->first('start_time')}}
        </div>
    @endif
    <div class="form-group">
        {{Form::label('end_time', 'Project\'s End Date')}}
        @if(Auth::user()->id == $project->user_id)
            {{Form::textarea('end_time', $project->description, ['class' => 'form-control', 'placeholder' => 'Project\'s End Date'])}}
        @else
            {{Form::text('end_time', $project->description, ['class' => 'form-control', 'placeholder' => 'Project\'s End Date', 'readonly' => 'true'])}}
        @endif
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