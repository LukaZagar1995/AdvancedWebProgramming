@extends('layouts.app')

@section('content')
    <h1>Create application for subject</h1>
    {{ Form::open(['action' => 'TaskController@createApplication', 'method' => 'POST']) }}

    <div class="form-group">
        {{Form::label('first_choice', 'First Choice')}}
        {{ Form::select('first_choice', $tasks, null, ['class' => 'form-control', 'placeholder' => 'Please select...'])  }}
    </div>
    @if($errors->has('first_choice'))
        <div class="alert alert-danger">
            {{$errors->first('first_choice')}}
        </div>
    @endif

    <div class="form-group">
        {{Form::label('second_choice', 'Second Choice')}}
        {{ Form::select('second_choice', $tasks, null, ['class' => 'form-control', 'placeholder' => 'Please select...'])  }}
    </div>

    <div class="form-group">
        {{Form::label('third_choice', 'Third Choice')}}
        {{ Form::select('third_choice', $tasks, null, ['class' => 'form-control', 'placeholder' => 'Please select...'])  }}
    </div>

    <div class="form-group">
        {{Form::label('fourth_choice', 'Fourth Choice')}}
        {{ Form::select('fourth_choice', $tasks, null, ['class' => 'form-control', 'placeholder' => 'Please select...'])  }}
    </div>

    <div class="form-group">
        {{Form::label('fifth_choice', 'Fifth Choice')}}
        {{ Form::select('fifth_choice', $tasks, null, ['class' => 'form-control', 'placeholder' => 'Please select...'])  }}
    </div>


    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    <a href="/task " class="btn btn-default">Go Back</a>
    {{ Form::close()}}


@endsection