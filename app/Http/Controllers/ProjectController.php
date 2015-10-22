<?php

namespace App\Http\Controllers;

use App\Project;
//use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Request\CreateTaskRequest;
use Carbon\Carbon;
use Request;

class ProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$projects = Project::all();
        //return $projects;
        return view('addproject');
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
      //  $input = Request::all();

       // return view('addproject');
     /*return Project::create([
            'title' => $data['title'],
            'tel' => $data['tel'],
            'street' => $data['street'],
            //'password' => bcrypt($data['password']),
           // 'tel' => $data['tel'],
        ]);*/
    }

    
}
