<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use DB;

class UsersController extends Controller
{
    public function index($id)
    {

        //("ds");
        $user = User::findOrFail($id); 
        // $user->firstname = "test";
        // $user->save();

        return view('edituser', $user);
       
    }


    public function edit($id, Request $request)
    {
       // dd("dsad");
        $user = User::findOrFail($id); 
        $user->update($request->all());
        return view('homepage');

    }    

    // public function update($id, Request $request)
    // {

    // }



    public function create()
    {
        return view('register');
         //return View::make('create');
    }


     /**
     * Show the form for creating a new resource
     * GET /users/{id}
     *
     * @param int $id
     * @return Response
     */

    // public function requestpassword()
    // {
    //     return view('requestpassword');
    // }

        /**
     * Show the form for creating a new resource
     * GET /users/{id}/edit
     *  
     * @param int $id
     * @return Response
     */

    
    /**
    *Store a newly created resource in storage
    *POST /users
    *@return Response
    */

    public function show(){
        
       // $user = user::find('firstname');

       // return view('users.show', compact('user'));

    }

   
    /**
    *remove the specified resource from storage
    *DELETE /users/{id}
    *@param int $id
    *@return Response
    */
    public function destroy($id){
        
    }


}
