<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Project;
use App\User;
use App\AssignedUser;

class Homepagecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $weekArray  = array();
        $currentDate = date('Y-m-d');                       // Gets the date of today
        $currentWeek = date('W', strtotime('2016-01-04')
        );                                                  // Gets the current weeknumber. The W will show the textual weeknumber
        $projects = Project::all();
        $users = User::all();
        $assusers = AssignedUser::all();

        // $from = Carbon::createFromDate(2014, 12, 29);    // 7 will be added to this date = 2015-01-05
        // $till = Carbon::createFromDate(2015, 01, 04);    // 7 will be addes to this date = 2015-01-11
        $i = 1;                 
        
        while ($i <= 52) {                                  //this while will loop by all 51 numbers of week
            if($currentWeek != $i) {                        // If currentweek is not equal to variable i
                // $fromdate[$i] =  $from;
                // $tilldate[$i] = $till;
                $weekArray[$i] = $i;                        // Then it will store the number into the array
            } else {                                        // Else
                $weekArray[$i] = "currentWeek";             // It will store the text currentweek into the array
            }
             $i++;   
             // $from->addDay(7);
             // $till->addDay(7);                           // After the loop the i variable will increment
        }

        // dd($weekArray);
        return view('homepage')->with('userslist', $users)->with('today', $currentDate)->with('allprojects',
         $projects)->with('currentWeek', $weekArray)->with('currentDay', date('l'))->with('assignedusers', $assusers);
    }

    // public function getassignedusers(){

    //     $users = User::lists('firstname');
    
    //     return view('homepage', compact('users'));
    // }
    
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
    public function show()
    {
       // $currentDate = date('Y-m-d'); 
       // $projects = Project::all();   

       // $projectlist= array(
       //  'projects' => $project
       //  );
       // // $startDate = Project::get('startdate');
       // // $endDate = Project::get('enddate');

       // // $dates = array(
       // //  'currrentdate' => $currentDate,
       // //  'project' => $projects
       // //  );
       // // if (($currentDate > $startDate) && ($currentDate < $endDate)) {
       // //      alert("Yes");
       // //  }toda
       // //      else {
       // //      }
       // //          alert("No");
        
      
       // return view('homepage')->with( 'today', date('Y-m-d'))->with('projects', $projectlist);
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
