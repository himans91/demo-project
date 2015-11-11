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
    public function index(){

        $defaultweek = date('W'); // Gets default week number
        // $defaultday = date('l');

        $Weeknumber = array(
            'defaultweek'=> $defaultweek,
           'defaultday'=> $defaultday
            );

        $i = 0;                 
        while ($i <= 51) {      /* this while will loop by all 51 numbers of week*/
             $i++;              /* Will increment by one after the loop*/
        $Weeknumber[] = $i;     /* Will Add the number into the array */
        }

        return view('homepage', compact('Weeknumber'));
    }
    
    // public function getdate(){
       
    //     $defaultday = date('l');

    //     $day = array(
    //         'defaultday'=>$defaultday);

    //      return view('homepage', compact('day'));
    // }


    //     // public function GetProjectUsers(){

    //         $start_date = '2007-03-24';
    //         $end_date = '2009-06-26';

    //         print_r(year_month($start_date, $end_date));


    //         //Returns an array containing the years, months and days between two dates
    //         function year_month($start_date, $end_date)
    //         {
    //             $begin = new DateTime( $start_date );
    //             $end = new DateTime( $end_date);
    //             $end->add(new DateInterval('P1D')); //Add 1 day to include the end date as a day
    //             $interval = new DateInterval('P1W'); //Add 1 week
    //             $period = new DatePeriod($begin, $interval, $end);
    //             $aResult = array();
    //             foreach ( $period as $dt )
    //             {
    //                 $aResult[$dt->format('Y')][$dt->format('F')][] = "Week ".$dt->format('W');
    //             }

    //             return view('homepage' compact($aResult));
    //         }
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
