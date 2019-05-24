@extends('layouts.app')

@section('content')
    <h1>Create subject</h1>
    {{ Form::open(['action' => 'TaskController@store', 'method' => 'POST']) }}
    <div class="form-group">
        {{Form::label('name', 'Subject Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Subject Name'])}}
    </div>
    @if($errors->has('name'))
        <div class="alert alert-danger">
            {{$errors->first('name')}}
        </div>
    @endif

    <div class="form-group">
        {{Form::label('name_english', 'Subject Name in English')}}
        {{Form::text('name_english', '', ['class' => 'form-control', 'placeholder' => 'Subject Name in English'])}}
    </div>
    @if($errors->has('name_english'))
        <div class="alert alert-danger">
            {{$errors->first('name_english')}}
        </div>
    @endif
    <div class="form-group">
        {{Form::label('description', 'Subject Description')}}
        {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Subject Description'])}}
    </div>
    @if($errors->has('description'))
        <div class="alert alert-danger">
            {{$errors->first('description')}}
        </div>
    @endif
    <div class="form-group">
        {{Form::label('type', 'List of Types')}}
        {{ Form::select('type', array('Preddiplomski', 'Strucni', 'Diplomski'), null, ['class' => 'form-control'])  }}
    </div>

    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}


@endsection