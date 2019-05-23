LV 3/4 Guide
=============

Step 1: Setting up database
---------
1) Used XAMPP and Apache to create my database locally.
2) Created virtual host so that i don't have to wright long address in web browser. I had to change two files, first one is
    httpd-vhosts.conf located in xampp/apache/conf/extra folder. 
    ```sh
    <VirtualHost *:80>
    	 DocumentRoot "C:\AdvancedWebProgramming\Projects\public"
    	 ServerName advanced.local
    
    	<Directory "C:\AdvancedWebProgramming\Projects\public">
    		 Options All
    		 AllowOverride All
    		 Require all granted
    	 </Directory>
    </VirtualHost>
    ```
   Second one was hosts file in Windows/System32/driver/etc folder.
    ```sh
   127.0.0.1    advanced.local
     ```
   Now I could open project from web browser entering advanced.local/.
3) Database parameters are located at .env file.
   ```sh
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=null
     DB_DATABASE=projects
     DB_USERNAME=root
     DB_PASSWORD=null
       ```
 Step 2: Designing the layout
 ---------
 1) Laravel uses .blade.php for its layout and I made base layout that i extend through all other layouts.
 My base layout is called base.blade.php. In there is located navbar that contains logic behind showing Login and Register links.
 I can add content to base layout with sections.
    ```sh
    <div class="container">
            @yield('content')
        </div>
    ```
 2) In my other views I extend base layout
     ```sh
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
      ```
 Step 3: Routing
 ----------
 1) All of my routes are located in /routes folder in web.php file. 
 2) First I added PageController for some pages and called with function
    ```sh
    Route::get('/', 'PageController@index');
    ```
    That function is stored in PageController and its called index()
    ```sh
     public function index()
        {
            return view('index');
        }
     ```  
 3) Routing views for model Project are made in similar way. First model is made with artisan command,
 and then model controller and then routes for that model. 
    ```sh
    //In treminal
    php artisan make:model Project
    php artisan make:controller -resource ProjectController 
    
    //In /routes/web.php
    Route::resource('project', 'ProjectController');
    ```
    From there I created view for every CRUD operation. I used help of Laravel Collective that
    uses forms as "code" which is transferred to HTML.
 4) Later in project I added auth functionality with artisan and restricted access to users that are
 not logged in.
 
 Step 4: Migrations
 ---------
 1) Migrations are located in database folder and they are containing all setup needed for database.
 With artisan I made model Project and he created migration for that model. I filled migration with attributes
 and some dummy data
 2) Migrations holds 5 projects and one user. User credentials are
 E-mail: lzagar@etfos.hr
  and password: adminadmin
 
 Step 5: CRUD
 -------
 1) Create functionality is first that I made. It uses forms for easier writing of code 
 and speeding up that process. 
    ```sh
     <h1>Create project</h1>
        {{ Form::open(['action' => 'ProjectController@store', 'method' => 'POST']) }}
            <div class="form-group">
                {{Form::label('name', 'Project Name')}}
                {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Project Name'])}}
            </div>
        @if($errors->has('name'))
                <div class="alert alert-danger">
                    {{$errors->first('name')}}
                </div>
            @endif
    ```
    Also it checks for errors and displaying them if there is some
 2) Read functionality is basically getting all data from database and showing it to the user.
     ```sh
    public function index()
     {
         $projects = Project::orderBy('id','asc')->paginate(5);
         return view('project.index')->with('projects',$projects);
     }
     ```
     Also there is option to see all details from project
     ```sh
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
      ```
 3) Update is more or less like Create with exception that some users can't update all data.
    ```sh
    <div class="form-group">
            {{Form::label('name', 'Project Name')}}
            @if(Auth::user()->id == $project->user_id)
            {{Form::text('name', $project->name, ['class' => 'form-control', 'placeholder' => 'Project Name'])}}
                @else
                {{Form::text('name', $project->name, ['class' => 'form-control', 'placeholder' => 'Project Name', 'readonly' => 'true'])}}
            @endif
        </div>
        @if($errors->has('name'))
            <div class="alert alert-danger">
                {{$errors->first('name')}}
            </div>
        @endif
     ```
 4) Delete can only user that created project and it is permanently erased.
 
 Step 6: Displaying users projects and projects that he is part of
 ------
 1) List of project can be found when user is logged in and press nav link with his name on in top right corner
 2) Projects are separated in two.
 3) Database uses pivot table for saving information  about users that work on project.
    ```sh
    public function index()
     {
         $user_id = auth()->user()->id;
         $user = User::find($user_id);
         $workingOn = $user->onProjects()->get();
         $data = array(
             'projects' => $user->projects,
             'workingOn' => $workingOn
         );
         return view('home')->with($data);
        }
      ```
     
 
        