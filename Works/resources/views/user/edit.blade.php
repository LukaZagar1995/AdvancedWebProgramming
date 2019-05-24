@extends('layouts.app')

@section('content')
    <h1>Edit {{$user->name}} role</h1>
    {{ Form::open(['action' => ['UserController@update', $user->id], 'method' => 'POST']) }}
    <div class="form-group">
        {{Form::label('role_id', 'Available Roles')}}
        {{ Form::select('role_id', $roles, $user->role_id, ['class' => 'form-control'])  }}
    </div>

{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{{ Form::close() }}

@endsection