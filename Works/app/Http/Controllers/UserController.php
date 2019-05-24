<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
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
        $users = User::where('id', '!=', Auth::id())->get();
        $data = array(
            '$users' => $users,
        );

        return view('user.index')->with('users', $users);
    }

    public function edit($user_id)
    {
        $user = User::find($user_id);
        $roles = DB::table('role')->pluck('name', 'id');
        $data = array(
            'user'=>$user,
            'roles' => $roles
        );
        return view('user.edit')->with($data);
    }

    public function update(Request $request, $id)
    {

        $user = User::find($id);
        $user->role_id = $request->input('role_id');
        $user->save();


        return redirect('/user');
    }


}
