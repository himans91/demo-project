@extends('layouts.master')

@section('title')
   Homepage
@stop
@extends('layouts.navbar')
@section('content') 
   <div class="blur-content">
      @if (Session::has('project_created_message'))      
         <div class="alert alert-success">{{ Session::get('project_created_message') }}</div>
      @endif
      <div class="content-holder">  
         <div class="item">
            <div class="week-selector">
            <label for="selectweek">Select a week</label>
               <select class="form-control" name="Weeknumber" id="sel1"> 
                  @foreach($currentWeek as $week )  
                     @if($week === "currentWeek")
                        <option selected="selected" value="" >Week: {{date('W')}}</option>
                     @else
                        <option value="" >Week: {{$week}}</option>
                     @endif
                  @endforeach
               </select>
            </div>
            @foreach($allprojects as $project)
               @if(($today > $project->startdate) && ($today < $project->enddate))
               <div class="item-project-bar">
                  <label>{{$project->title}}</label>
               {{--    @else
                  <label>No projects today</label> --}}
               <div class="item-day-bar">
                  <label>{{$currentDay}}</label>
      {{--             <div class="item-day-bar">
                  <label>{{$currentDay}}</label>
                  <div class="item-day-bar">
                  <label>{{$currentDay}}</label>
                  <div class="item-day-bar">
                  <label>{{$currentDay}}</label>
                  <div class="item-day-bar">
                  <label>{{$currentDay}}</label> --}}
                  <div class="item-user-bar">
                     <label>User</label>
                    <span class="glyphicon-user glyphicon-collapse-down" data-toggle="collapse" data-target=".list-of-users">
                        @foreach($project->users as $users)
                           <div class="list-of-users">
                              <div class="list-entry">    
                                 <div class="media-body entry--info">
                                    <p class="media-heading">{{$users->firstname}}</p>
                                    <p class="media-heading">{{$users->tel}}</p>
                                    <p class="media-heading">{{$users->city}}</p>
                                 </div>
                              </div><!--End of user-->
                           </div><!--End of user-->
                       @endforeach 
                  </div><!--End of user-list-->
               </div> <!--End of header-users-->
            </div> <!--End of header-day-->
            @endif
            @endforeach
         </div> <!--End of header-project-->
      </div> <!--End of item-->
   </div>  
@stop