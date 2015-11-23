@extends('layouts.master')
@section('title')
Project search result
@stop
@extends('layouts.navbar')
@section('content')

   @if($projects->isEmpty())
      <div class="alert alert-danger" role="alert">Nothing found!<a href="{{ url('assignusers') }}"> Try Again</a></div>
   @else 
      {!! csrf_field() !!}
      <div class="head-of-pojects">
         <div class="result-head-title">Project(s)</div>
         @foreach ($projects as $project)
            <div class="list-of-projects"> 
               <div class="media-body entry--info">
                  <ul> 
                     <li><p class="media-heading">project title: <strong>{{$project->title}}</strong></p></li>
                     <li><p class="media-heading">city: <strong> {{$project->city}}</strong></p></li>
                     <li><p class="media-heading">Tel: <strong> {{$project->telephone}}</strong></p></li>
                     <li><p class="media-heading">Status: <strong> </strong></p></li>
                  </ul>
{{--                   <div class="project-modal"> 
                     <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                       Launch 
                     </button>
                     <!-- Modal -->
                     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                       <div class="modal-dialog" role="document">
                         <div class="modal-content">
                           <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                             <h4 class="modal-title" id="myModalLabel">Project info</h4>
                           </div>
                           <div class="modal-body">
                             {{$project->title}}
                             {{$project->city}}
                              {{$project->telephone}}
                           </div>
                           <div class="modal-footer">
                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                           </div>
                         </div>
                       </div>
                     </div>
                  </div> --}}
               </div>
            </div>{{-- end of "list-of-projects" --}}
         @endforeach
      </div>
{{--       <div class="all-users-list">
         @foreach($users as $user) 
            <div class="assign-members">   
               <div class="member--details">
                  <p hidden="true">{{$user->id}} </p>
                  <p><strong><h4>{{$user->firstname}} {{ $user->surname }}</h4></strong></p>
                  <p><span class="glyphicon glyphicon-envelope"></span> {{$user->email}} </p>
                  <p><span class="glyphicon glyphicon-earphone"></span> {{$user->tel}}</p>
                  <div class="member--checkin">
                     <input type="checkbox" value="{{$user->id}}" id="" name="id" class="CheckIn"/> 
                     <p class="CheckboxStatus">Check me in for: </p>
                  </div>
               </div>
            </div><!--End of user-->
         @endforeach 
         <div class="button-wrapper">     
            <button class="btn btn-primary button" type="submit">Check in</button>
         </div>
      </div>
   </form> --}}
   @endif
{{--    @foreach($users as $user)
         <tr>
           @if($project->title === $projects) 
            @foreach ($user->projects as $project)
            
                  <div class="assign-members">   
                     <div class="member--details">
                        {{$project->title}} 
                        <p>{{$user->firstname[0]}}.{{ $user->surname }}</p>
                        <a href=""><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                        <p hidden >{{$user->email}} </p></a>
                        <p>{{$user->tel}}</p>
                     </div>
                  </div><!--End of user-->
                  
             @endforeach
             @else
                  <p>No users yet </p>  
              
 @endif
         </tr>
      @endforeach --}}
@stop