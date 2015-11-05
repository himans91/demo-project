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

        public function show()
    {
        $title = Input::get('title');
        $projects = Project::where('title', 'LIKE', '%' . $title . '%')->get();     
        $data = array('projects' => $projects);
        return view('projectresult', $data);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateTaskRequest  $request
     * @return Response
     */




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
