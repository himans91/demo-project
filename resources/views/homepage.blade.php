@extends('layouts.master')

@section('title')
Homepage
@stop
@extends('layouts.navbar')
@section('content')
<div id="page-index" class="container">
   <div class="content">
      <div class="content-holder">
         <div class="homepagebanner"></div>   
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
               <div class="item-project-bar">
                  <label>Project</label>
                  <div class="item-day-bar">
                     <label>{{$currentDay}}</label>
                     <div class="item-user-bar">
                        <label>User</label>
                       <span class="glyphicon-user glyphicon-collapse-down" data-toggle="collapse" data-target=".list-of-users">
                        <div class="list-of-users">
                           <div class="list-entry">    
                              <div class="media-body entry--info">
                                 <p class="media-heading">Himanshu</p>
                                 <p class="media-heading">0632386556</p>
                                 <p class="media-heading">Amsterdam</p>
                              </div>
                           </div><!--End of user-->
                           <div class="list-entry">  
                              <div class="media-body entry--info">
                                 <p class="media-heading">test</p>
                                 <p class="media-heading">0632386556</p>
                                 <p class="media-heading">Utrecht</p>
                              </div>
                           </div>
                        </div><!--End of user-->
                     </div><!--End of user-list-->
                  </div> <!--End of header-users-->
               </div> <!--End of header-day-->
            </div> <!--End of header-project-->
         </div> <!--End of item-->
      </div>
   </div><!--End of content-->
</div><!--End of container-->
@stop