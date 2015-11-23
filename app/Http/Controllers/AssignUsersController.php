<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Project;
use Input;

class AssignUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::all();
        $user = User::all();

        $data = array(
            'projects' => $project, 
            'users' => $user
            );

        return view('assignusers', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $user = User::lists('firstname', 'id');

        // return view('projectresult', compact('user'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        
        $project = Input::get('project');
        $user = Input::get('user');
        $day = Input::get('day');
        //$fullday = Input::get('is_fullday');
        $begindate =  Input::get('begindate');
        $enddate = Input::get('enddate');

        dd($project, $user, $day, $begindate, $enddate);
        $new_user()->projects()->attach($project);

        return redirect('assignusers');





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $projecttitle = Input::('option');

        // $projects = Project::where('title', 'LIKE', '%' . $title . '%')->get();     
        // $data = array(
        //     'projects' => $projects,
        // );

        // dd($data);
        // return view('assignusers', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
