<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
//use App\Http\Requests;
//use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Project;
use App\User;
use Input;
use Request;



class ProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index($id)
    {
        //("ds");
        $project = Project::findOrFail($id); 
        // $user->firstname = "test";
        // $user->save();

        return view('editproject', $project);
    }



    public function edit($id, Request $request)
    {
       // dd("dsad");
        $project = Project::findOrFail($id);    
        $project->update($request->all());

        return view('homepage');
    }  

    //Search for project
    public function show()
    {   
        $title = Input::get('title');
        $projects = Project::where('title', 'LIKE', '%' . $title . '%')->get();     
        //$projectuser = ProjectUser::where('title', 'LIKE', '%' . $title . '%')->get();
        $data = array(
            'projects' => $projects,
            'users' => User::all()
        );
        return view('projectresult', $data);
    }


    public function AssignUser($id)
    {

        $project->id = Input::get('id');
        $user->id = Input::get('id');


        $projects = new project(array(
            'id' => Project::get(4),
            'user-id' =>  User::get(9),
            ));

        $projects->save('project_user');

        dd($projects);

        // $user = User::find(1);

        

        return view('assignusers', compact($projects));



        // get project id from search function above (show)
        // user id by clicking checkbox

        //attach those by  attach function



    }
    
    public function store()
    {
    
        $input = Request::all();

        $project = new Project;

        //return $input;

        $input[''] = Carbon::now();

        Project::create($input);
        session()->flash('flash_message', 'Your project has been created.');

        return redirect('homepage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    protected function create()
    {
        return view('addproject');

    }

}
