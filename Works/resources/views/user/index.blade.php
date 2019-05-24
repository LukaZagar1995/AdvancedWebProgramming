@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Users</div>
                        <table class="table table-striped">
                            <tr>
                                <th>User name</th>
                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td><a href="/user/{{$user->id}}/edit" class="btn btn-primary">Edit</a></td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
