<?php

namespace App\Http\Controllers;

use App\Role;
use App\Task;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::orderBy('name','asc')->paginate(5);
        $users = User::get();
        $role = Role::find(User::find(Auth::id())->role_id);

        return view('task.index')->with(['tasks' => $tasks, 'role' => $role, 'users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:task',
            'name_english' => 'required|unique:task',
            'description' => 'required',
            'type' => 'required'

        ]);

        $task = new Task;
        $task->name = $request->input('name');
        $task->description = $request->input('description');
        $task->name_english = $request->input('name_english');
        $task->type = $request->input('type');
        $task->professor_id = Auth::id();
        $task->save();


        return redirect('/task');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        if(User::find($task->professor_id))
        $professor = User::find($task->professor_id);
        else
            $professor = 0;
        $data = array(
            'task' => $task,
            'professor' => $professor,
        );
        return view('task.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        $data = array(
            'task'=>$task,
        );
        return view('task.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'name_english' => 'required',
            'description' => 'required',
            'type' => 'required'

        ]);

        $task = Task::find($id);
        $task->name = $request->input('name');
        $task->description = $request->input('description');
        $task->name_english = $request->input('name_english');
        $task->type = $request->input('type');
        $task->professor_id = Auth::id();
        $task->save();


        return redirect('/task');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect('/task');
    }
    public function apply()
    {
        $tasks = DB::table('task')->where('user_id', null)->pluck('name', 'id');
        $data = array(
            'tasks'=>$tasks,
        );
        return view('task.apply')->with($data);
    }

    public function createApplication(Request $request)
    {
        $this->validate($request, [
            'first_choice' => 'required',
        ]);
        $user_id = Auth::id();
        $first = $request->input('first_choice');
        $second = $request->input('second_choice');
        $third = $request->input('third_choice');
        $fourth = $request->input('fourth_choice');
        $fifth = $request->input('fifth_choice');

        DB::table('task_user')->insert([['task_id' => $first, 'user_id' => $user_id, 'priority' => 1] ]);
        if($second != null)
            DB::table('task_user')->insert([['task_id' => $second, 'user_id' => $user_id, 'priority' => 2] ]);
        if($third != null)
            DB::table('task_user')->insert([['task_id' => $third, 'user_id' => $user_id, 'priority' => 3], ]);
        if($fourth != null)
            DB::table('task_user')->insert([['task_id' => $fourth, 'user_id' => $user_id, 'priority' => 4], ]);
        if($fifth != null)
            DB::table('task_user')->insert([ ['task_id' => $fifth, 'user_id' => $user_id, 'priority' => 5], ]);

        return redirect('/task');
    }

    public function approve($task_id, $user_id)
    {
        $priority = DB::table('task_user')->where([
            ['task_id', $task_id],
            ['user_id', $user_id],
        ])->get();
        if($priority[0]->priority == 1)
        {
        $task = Task::find($task_id);
        $task->user_id = $user_id;
        $task->save();
        }
        return redirect('/home');
    }

}
