<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Project;
use Input;
use Auth;

class AssignUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentDate = date('Y-m-d'); // Gets the date of today
        //$project = Project::all();
        $project = Project::where('enddate', '>', date('Y-m-d'))->get();  
        $user = Auth::user();

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
        $singleday = Input::get('singleday');
        //$multidays = Input::get('multidays');
        $single_date = Input::get('single_date');
        $begin_date = Input::get('begin_date');
        $end_date = Input::get('end_date');

        // $data = array(
        //     'day'=> $day,
        //     'singleday' => $singleday,
        //     'begindate'=> $begindate,
        //     'enddate' => $enddate
        //     );
        //dd($project, $user, $day, $singleday, $begindate, $enddate);
        Auth::user()->projects()->attach($project, array(
            'singleday'=> $singleday,
            'single_date' => $single_date,
           // 'multidays' => $multidays,
            'begin_date'=> $begin_date,
            'end_date' => $end_date
            )); 
       // $user()->save();

        return redirect('assignusers');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show()
    // {
    //     $projecttitle = Input::('option');

    //     $projects = Project::where('title', 'LIKE', '%' . $title . '%')->get();     
    //     $data = array(
    //         'projects' => $projects,
    //     );

    //    //dd($data);
    //     return view('assignusers', $data);
    // }

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
