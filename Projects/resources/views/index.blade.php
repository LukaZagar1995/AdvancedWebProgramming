@extends('layout.base')

@section('content')
    <div class="jumbotron text-center">
    <h1 >Projects</h1>
    <p >Welcome to Advanced Web Programming exercise LV3/4</p>
    <div >
        <input type="image" src="{{ asset('images/project.png') }}" onclick="window.location.href ='{{ url('/project') }}'" alt="Project image"/><br>
    </div>
    </div>
    @endsection