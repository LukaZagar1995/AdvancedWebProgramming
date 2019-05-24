@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if($role->name == 'Student')
                    <div class="card">
                        <div class="card-header">My Applications</div>
                        @if(count($studentApplications)>0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Subject name</th>
                                </tr>
                                @foreach($studentApplications as $task)
                                    <tr>
                                        <td>{{$task->name}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        @endif
                    </div>
                @endif
                @if($role->name == 'Professor')
                <div class="card">
                                       <div class="card-header">My Subjects</div>
                    @if(count($tasks)>0)
                        <table class="table table-striped">
                            <tr>
                                <th>Subject name</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{$task->name}}</td>
                                    <td><a href="/task/{{$task->id}}/edit" class="btn btn-primary">Edit</a></td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>

                <div class="card-header">Students that are applied on my subjects</div>
                @if(count($subjects)>0)
                    <table class="table table-striped">
                        <tr>
                            <th></th>
                            <th>Subject</th>
                            <th>Student name</th>

                        </tr>
                        @foreach($subjects as $subject)
                            @foreach($subject as $users)
                                @foreach($users as $user)
                                    <tr>
                                        @foreach($tasks as $task)
                                                    @if($task->id == $user->pivot->task_id)
                                                        @if($task->user_id == null)
                                                        <td><a href="/task/{{$task->id}}/{{$user->id}}/approve" class="btn btn-success">Approve</a></td>
                                                            @elseif($task->user_id == $user->id)
                                                    <td>Approved</td>
                                                            @else
                                                    <td></td>
                                                        @endif
                                                    <td>{{$task->name}}</td>
                                                @endif
                                            @endforeach
                                        <td>{{$user->name}}</td>
                                    </tr>
                                @endforeach
                            @endforeach
                        @endforeach
                    </table>
                @endif
            @endif
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
