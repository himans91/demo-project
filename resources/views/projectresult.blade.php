@extends('layouts.master')
@section('title')
  Search
@stop
@extends('layouts.navbar')
@section('content')


   @if($projects->isEmpty())
   <div class="alert alert-danger" role="alert">Nothing found!<a href="{{ url('projectsearch') }}"> Try Again</a></div>
      @else 
         @foreach ($projects as $project)
            <div class="head-of-pojects" >
               <div class="result-head-title">Search Result</div>
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

               <p><strong><h4>{{$user->firstname}} {{ $user->surname }}</h4></strong></p>
               <p><span class="glyphicon glyphicon-envelope" > </span> {{$user->email}} </p>
               <p><span class="glyphicon glyphicon-earphone" > </span> {{$user->tel}}</p>
               <div class="member--checkin">
                  <input type="checkbox" class="CheckIn"/> <p class="CheckboxStatus">Check me in for</p>
               </div>
            </div>
         </div><!--End of user-->
      @endforeach 
   </div>

@stop