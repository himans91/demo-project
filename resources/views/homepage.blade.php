@extends('layouts.master')

@section('title')
   Homepage
@stop
@extends('layouts.navbar')
@section('content') 
   <div class="overflow">
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
               <div class="item-day-bar">
                  @if ($currentDay === "Monday")
                     <label>{{$currentDay}}</label>
                     @else 
                     <label>Monday</label>
                  @endif
                  <div class="item-user-bar">
                  {{--    <label>User</label> --}}

                  @foreach($project->users as $users)
                     <div class="list-of-users">
                        <div class="list-entry">    
                     {{--    @if($today > $users->single_date && $today < $users->end_date) --}}
                           <div class="media-body entry--info">
                              <p class="media-heading">{{$users->firstname}} {{$users->surname}} </p>
                              <p class="media-heading">{{$users->tel}}</p>
                           </div>
                          {{--  @else 
                           <p class="media-heading">No users for today</p>
                           @endif --}}
                        </div><!--End of user-->
                     </div><!--End of user-->
                 @endforeach 
                  </div><!--End of user-list-->
                  <div class="item-day-bar">
                     @if ($currentDay === "Tuesday")
                        <label>{{$currentDay}}</label>
                        @else 
                        <label>Tuesday</label>
                     @endif
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
                  <div class="item-day-bar">
                     @if ($currentDay === "Wednesday")
                        <label>{{$currentDay}}</label>
                        @else 
                        <label>Wednesday</label>
                     @endif
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
                  <div class="item-day-bar">
                     @if ($currentDay === "Thursday")
                        <label>{{$currentDay}}</label>
                        @else 
                        <label>Thursday</label>
                     @endif
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
                  <div class="item-day-bar">
                     @if ($currentDay === "Friday")
                        <label>{{$currentDay}}</label>
                        @else 
                        <label>Friday</label>
                     @endif
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
               </div> <!--End of header-users-->
            </div> <!--End of header-day-->
            @endif
            @endforeach
         </div> <!--End of header-project-->
      </div> <!--End of item-->
   </div>  
@stop