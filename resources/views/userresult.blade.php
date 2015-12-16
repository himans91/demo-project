@extends('layouts.master')

@section('title')
  User search result
@stop
@extends('layouts.navbar')
@section('content')

<div class="content-holder">
   @if($users->isEmpty())
         <div class="alert alert-danger" role="alert">Nothing found!<a href="{{ url('search') }}">Try Again</a></div>
         @else 
         <div class="head-of-pojects" >
            <div class="result-head-title">User(s)</div>
            @foreach ($users as $user)
               <div class="list-of-users ">    
                  <div class="media-body entry--info">
                     <ul> 
                        <li><p class="media-heading">Name: <strong>{{$user->firstname}} {{$user->surname}}</strong></p></li>
                        <li><p class="media-heading">Tel: <strong>{{$user->tel}}</strong></p></li>
                        <li><p class="media-heading">Email: <strong>{{$user->email}} </strong> </p></li>
                        @foreach ($user->projects as $user)
{{--                           @if ($user->single_date === $today | $user->begin_date > $today  && $user->end_date < $today )
                            <li><p class="media-heading">Status: <strong>Working on{{$user->title}} </strong></p></li>
                          @else
                            <li><p class="media-heading">Status: <strong>No projects</strong></p></li>
                          @endif --}}
                        @endforeach
                        <li><p class="media-heading">Locatie: <strong>{{$user->city}} </strong></p></li>
                     </ul>
                  </div>
               </div><!--end of 'list-of-users'-->
            @endforeach
         </div>
   @endif
</div>
@stop