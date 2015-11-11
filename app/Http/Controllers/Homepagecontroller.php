<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;

class Homepagecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Weeknumber = array(
            // '1,',
            // '2',
            // '3', 
            // '4',
            // '5'
        );

        $i = 0;
        while ($i <= 51) {
             $i++;
       $Weeknumber[] = $i;
   }

        return view('homepage', compact('Weeknumber'));
    }
    //  public function getWeeknumber()
    // {

    //     // $startdate = DB::table('projects')->get('startdate');
       
    //     $ddate = "2012-10-18";
    //     $duedt = explode("-", $ddate);
    //     $date  = mktime(0, 0, 0, $duedt[1], $duedt[2], $duedt[0]);
    //     $week  = (int)date('W', $date);
    //     return view('homepage', $date);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function projectsearch()
    {
        return view('projectsearch');
    }

    public function search()
    {
        return view('search');
    }



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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('edituser');
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
