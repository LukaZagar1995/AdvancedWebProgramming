<?php

namespace App\Http\Controllers;

use App\Role;
use App\Task;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tasks = DB::table('task')->where('professor_id', Auth::id())->get();
        $subjects = array();
        foreach ($tasks as $taske)
        {
            $task = Task::find($taske->id);
            $subjects[][$task->name] = $task->users()->get();

        }
        $studentApplications[] = array();
        $role = Role::find(User::find(Auth::id())->role_id);
        if( $role->id == 2 ) {
            $student = User::find(Auth::id());
            $studentApplications = $student->tasks()->get();
        }
        $data = array(
            'tasks' => $tasks,
            'subjects' => $subjects,
            'role' => $role,
            'studentApplications' => $studentApplications,
        );

        return view('home')->with($data);
    }
}
