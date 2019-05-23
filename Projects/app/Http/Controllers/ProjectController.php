<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function index()
    {
        $projects = Project::orderBy('id','asc')->paginate(5);
        return view('project.index')->with('projects',$projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('id', '!=', Auth::id())->get()->pluck('name', 'id');
        return view('project.create')->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'name' => 'required|unique:project',
           'price' => 'required',
           'description' => 'required',
           'start_time' => 'required',
           'end_time' => 'required',
            'done_jobs' => 'nullable'

        ]);

        $project = new Project;
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->price = $request->input('price');
        $project->done_jobs = $request->input('done_jobs');
        $project->start_time = $request->input('start_time');
        $project->user_id = auth()->user()->id;
        $project->end_time = $request->input('end_time');
        $project->save();

        if($request->users_id != null)
       {
           foreach ($request->users_id as $user_id)
           {
               $user = User::find($user_id);
               $project->workingOn()->attach($user);
           }
       }

        return redirect('/project');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        $leader = User::find($project->user_id);
        $workers = $project->workingOn()->get();
        $data = array(
            'project' => $project,
            'leader' => $leader,
            'workers' => $workers
        );
        return view('project.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        $users = User::where('id', '!=', Auth::id())->get()->pluck('name', 'id');
        $data = array(
            'project'=>$project,
            'users' => $users
        );
        return view('project.edit')->with($data);
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
            'price' => 'required',
            'description' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'done_jobs' => 'nullable'

        ]);

        $project = Project::find($id);
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->price = $request->input('price');
        $project->done_jobs = $request->input('done_jobs');
        $project->start_time = $request->input('start_time');
        $project->end_time = $request->input('end_time');
        if($request->users_id != null)
        {
            foreach ($request->users_id as $user_id)
            {
                $user = User::find($user_id);
                $project->workingOn()->attach($user);
            }
        }

        $project->save();

        return redirect('/project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect('/project');
    }
}
