@extends('layouts.master')
@section('title')
  User search result
@stop
@extends('layouts.navbar')
@section('content')
   @if($users->isEmpty())
   <div class="alert alert-danger" role="alert">Nothing found!<a href="{{ url('search') }}">Try Again</a></div>
      @else 
       <div class="head-of-pojects" >
               <div class="result-head-title">Search Result</div>
         @foreach ($users as $user)
            <div class="list-of-users ">    
               <div class="media-body entry--info">
                  <ul> 
                     <li><p class="media-heading"><strong>Name: </strong>{{$user->firstname}} {{$user->surname}}</p></li>
                     <li><p class="media-heading"><strong>Tel: </strong>{{$user->tel}}</p></li>
                     <li><p class="media-heading"><strong>email: </strong>{{$user->email}} </p></li>
                  </ul>
               </div>
            </div><!--end of 'list-of-users'-->
         </div>
         @endforeach 
   @endif
 {{--   @foreach ($Project as $project)
      <div class="list-entry">    
         <div class="media-body entry--info">
            <Ul> -
               <li><p class="media-heading">Name: {{$project->title}}</p></li>
               <li><p class="media-heading">Tel: {{$project->email}}</p></li>
               <li><p class="media-heading">email: {{$user->telephone}}</p></li>
            </ul>
         </div>
      </div>
   @endforeach  --}}

@stop