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
        $input = Request::all();
        $project->update($input);

        //dd($project);
       // session()->flash('project_edited_message', 'Your project has been edited.');

        return redirect('homepage');
    }  

    //Search for project
    public function show()
    {   
        $title = Input::get('title');
        $projects = Project::where('title', 'LIKE', '%' . $title . '%')->get();     
        $currentDate = date('Y-m-d');
        //$projectuser = ProjectUser::where('title', 'LIKE', '%' . $title . '%')->get();
        $data = array(
            'today' => $currentDate,
            'projects' => $projects,
            'users' => User::all()
        );
        
        return view('projectresult', $data);
    }


    public function store()
    {
    
        $input = Request::all();

        $project = new Project;

        //return $input;

        $input[''] = Carbon::now();

        Project::create($input);
        session()->flash('project_created_message', 'Your project has been created.');

        return redirect('homepage');
    }

    // public function GetProjectStatus();

    //     $project = Project::all();

    //     return()
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
