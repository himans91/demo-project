@extends('layouts.master')
@section('title')
Project search result
@stop
@extends('layouts.navbar')
@section('content')

   @if($projects->isEmpty())
   <div class="alert alert-danger" role="alert">Nothing found!<a href="{{ url('projectsearch') }}"> Try Again</a></div>
      @else 
      <div class="head-of-pojects">
         <div class="result-head-title">Project(s)</div>
         @foreach ($projects as $project)
               <div class="list-of-projects"> 
                  <div class="media-body entry--info">
                     <Ul> 
                        <li><p class="media-heading"><strong>Project-title:</strong> {{$project->title}}</p></li>
                        <li><p class="media-heading"><strong>Telephone:</strong> {{$project->telephone}}</p></li>
                        <li><p class="media-heading"><strong>City:</strong> {{$project->city}}</p></li>
                        <a href="editproject/{id}"><span class="glyphicon glyphicon-cog" ></span></a>
                        <a class="show-users-list"><span class="glyphicon glyphicon-user" ></span></a>
                        <span class="glyphicon glyphicon-minus hideproject"></span>
                     </ul>
                  </div>
               </div>  {{-- end of "list-of-projects" --}}
            </div>
         @endforeach
   @endif
   <div class="all-users-list">
      @foreach($users as $user) 
         <div class="assign-members">   
            <div class="member--details">
               <p hidden="true">{{$user->id}} </p>
               <p><strong><h4>{{$user->firstname}} {{ $user->surname }}</h4></strong></p>
               <p><span class="glyphicon glyphicon-envelope"></span> {{$user->email}} </p>
               <p><span class="glyphicon glyphicon-earphone"></span> {{$user->tel}}</p>
               <div class="member--checkin">
                  <input type="checkbox" value=" " name="assignuser" class="CheckIn"/> <p class="CheckboxStatus">Check me in for</p>
               </div>
            </div>
         </div><!--End of user-->
      @endforeach 
      <form class="login-form" method="post" action"">
            <div class="button-wrapper">     
               <button class="btn btn-primary button" type="submit">Check in</button>
            </div>
      </form>
   </div>

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