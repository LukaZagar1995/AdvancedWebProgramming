@extends('layouts.app')

@section('content')
    <h1>Create subject</h1>
    {{ Form::open(['action' => ['TaskController@update', $task->id], 'method' => 'POST']) }}
    <div class="form-group">
        {{Form::label('name', 'Subject Name')}}
        {{Form::text('name', $task->name, ['class' => 'form-control', 'placeholder' => 'Subject Name'])}}
    </div>
    @if($errors->has('name'))
        <div class="alert alert-danger">
            {{$errors->first('name')}}
        </div>
    @endif

    <div class="form-group">
        {{Form::label('name_english', 'Subject Name in English')}}
        {{Form::text('name_english', $task->name_english, ['class' => 'form-control', 'placeholder' => 'Subject Name in English'])}}
    </div>
    @if($errors->has('name_english'))
        <div class="alert alert-danger">
            {{$errors->first('name_english')}}
        </div>
    @endif
    <div class="form-group">
        {{Form::label('description', 'Subject Description')}}
        {{Form::textarea('description', $task->description, ['class' => 'form-control', 'placeholder' => 'Subject Description'])}}
    </div>
    @if($errors->has('description'))
        <div class="alert alert-danger">
            {{$errors->first('description')}}
        </div>
    @endif
    <div class="form-group">
        {{Form::label('type', 'List of Types')}}
        @if($task->type == 'Preddiplomski')
        {{ Form::select('type', array('Preddiplomski', 'Stručni', 'Diplomski'), 0, ['class' => 'form-control'])  }}
            @elseif($task->type == 'Strucni')
            {{ Form::select('type', array('Preddiplomski', 'Stručni', 'Diplomski'), 1, ['class' => 'form-control'])  }}
            @else
            {{ Form::select('type', array('Preddiplomski', 'Stručni', 'Diplomski'), 2, ['class' => 'form-control'])  }}
            @endif

    </div>


    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {{ Form::close()}}


@endsection