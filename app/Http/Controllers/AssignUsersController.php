<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class AssignUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        
        //dd($users);
        // $data = array('users' => $users);
        return view('assignusers', compact('users'));
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
        // // $input = Request::all('assignuser');
        // // $id = User::get('id')
        
        // // $new = new ProjectUsers;
        // // $input[''] = Carbon::now();

        // // ProjectUsers::create($input);

        // // return redirect('homepage');

        // $user_checked = Request::all('user');

        // $projectuser = ProjectUser::all()
        // // $projectuser = new ProjectUser;

        // // $user_checked[''] = Carbon::now();

        // // ProjectUser::create($user_checked);

        // return view('projectsearch', compact($projectuser));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$users = App\User::find();

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
