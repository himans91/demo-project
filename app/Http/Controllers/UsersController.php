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

       // session()->flash('user_edited_message', 'Your profile has been edited.');
        return redirect('homepage');

    }    

    public function show(){
        
       $user = User::all();       

       return view('layouts.navbar');
    }



    public function create()
    {
        return view('register');
         //return View::make('create');
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
