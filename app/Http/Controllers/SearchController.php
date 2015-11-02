<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Project;
use DB;
use Input;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users= DB::table('users')->get()
        // dd($users);
        // return view('layouts.usersearch', compact('users'));

    }
    public function findbyfirstname(){
       //  $firstname = Input::get('firstname');
       //  $user = User::whereFirstname($firstname)->first(); 
       
       // dd($user);
     
        
        //return view('layouts.usersearch', compact( $user));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        $firstname = Input::get('firstname');
        $users = User::where('firstname', 'LIKE', '%' . $firstname . '%')->get();     
        //$users = User::where('surname', 'LIKE', '%' . $firstname . '%')->get();
        $data = array('users' => $users);
        return view('userresult', $data);
    }

    // public function display()
    // {
    //     $title = Input::get('title');
    //     $projects = Project::where('title', 'LIKE', '%' . $title . '%')->get();     
    //     $data1 = array('projects' => $projects);
    //     return view('layouts.projectsearch', $data1);
    // }


  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
