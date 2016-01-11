@extends('layouts.master')
@section('title')
Project search result
@stop
@extends('layouts.navbar')
@section('content')

<div class="content-holder">
   @if($projects->isEmpty())
      <div class="alert alert-danger" role="alert">Nothing found!<a href="{{ url('projectsearch') }}"> Try Again</a></div>
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
                    @if ($today > $project->startdate && $today < $project->enddate )
                     <li><p class="media-heading">Status: <strong>Work in progress</strong></p></li>
                     @elseif ($today > $project->enddate)
                     <li><p class="media-heading">Status: <strong>Finished</strong></p></li>
                    @endif
                  </ul>
               </div>
            </div>{{-- end of "list-of-projects" --}}
         @endforeach
      </div>
   @endif
</div>
@stop