@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My projects</div>
                @if(count($projects)>0)
                <table class="table table-striped">
                    <tr>
                        <th>Project name</th>
                        <th></th>
                        <th></th>
                    </tr>
                @foreach($projects as $project)
                    <tr>
                        <td>{{$project->name}}</td>
                        <td><a href="/project/{{$project->id}}/edit" class="btn btn-primary">Edit</a></td>
                        <td></td>
                    </tr>
                    @endforeach
                </table>
                    @endif
                </div>

                <div class="card-header">Projects I work on</div>
                @if(count($workingOn)>0)
                <table class="table table-striped">
                    <tr>
                        <th>Project name</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach($workingOn as $project)
                        <tr>
                            <td>{{$project->name}}</td>
                            <td><a href="/project/{{$project->id}}/edit" class="btn btn-success">Edit</a></td>
                            <td></td>
                        </tr>
                    @endforeach
                </table>
            @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
