{{-- All users --}}

@extends('layouts.master')
@section('title')
Assign users
@stop
@extends('layouts.navbar')
@section('content')

{{-- Users per project --}}

<form class="Users-CheckIn-Form" method="post" action="assignedusers">
      {!! csrf_field() !!}
    <div class="head-of-pojects">
        <div class="result-head-title">Project(s)</div>
        @foreach ($projects as $project)
            <div class="list-of-projects"> 
               	<div class="media-body entry--info">
	                <ul> 
	                    {{$project->id}}
	                    <li><p class="media-heading">Project title: <strong>{{$project->title}}</strong></p></li>
                     	<li><p class="media-heading">City: <strong> {{$project->city}}</strong></p></li>
	                    @if(\SidneyDobber\User\AEUser::authorize('users'))
	                       <a href="editproject/{{$project->id}}"><span class="glyphicon glyphicon-cog" ></span></a>
	                       {{-- <a class="show-users-list"><span class="glyphicon glyphicon-user" ></span></a> --}}
	                       <div class="item"><input type="checkbox" class="checkbox" value="{{$project->id}}" name="project" ></div>
	                    @endif
	                </ul>
               	</div>
            </div>{{-- end of "list-of-projects" --}}
        @endforeach
    </div>
    <div class="all-users-list">
  {{--   @foreach($users as $user)  --}}
  @if(Auth::check())
        <div class="assign-members">   
           	<div class="member--details">
                <p>Name: <strong>{{Auth::user()->firstname}} {{ Auth::user()->surname }}</strong></p>
                <p>Tel: <strong>{{Auth::user()->tel}}</strong></p>

              	<div class="member--checkin">
					<div class="checkbox  assign-day-option">
					  <label><input type="checkbox" name="day[]" class="singleday example" value="Single">Single day</label>
					</div>
					<div class="checkbox assign-day-option">
					  <label><input type="checkbox" name="day[]"  class="multidays example" value="multiple">Multiple days</label>
					</div>
					<div class="singleday-date">
						<p>Single date</p>
						<div class="input-group " id="datetimepicker">
							<input  type="date" name="singledate" class="form-control" />
		                    <span class="input-group-addon">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>
		                </div>
		            </div>
					<div class="multidays-date assign-date-option ">
						<p>begin date</p>
						<div class="input-group " id="datetimepicker">
							<input  type="date" name="begindate" class="form-control" />
		                    <span class="input-group-addon">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>
	                    </div>
	                    <p>end date</p>
						<div class="input-group " id="datetimepicker">
							<input  type="date" name="enddate" class="form-control" />
		                    <span class="input-group-addon">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>
	                    </div>
	                </div>

	                <div class="final-assign-option">
	                    <div class="checkbox ">
                  			<label>
		                    <input  type="checkbox"  value="{{Auth::user()->id}}" id="" name="user" checked class="CheckIn"/> 
		                    {{-- <p class="CheckboxStatus">Check me in for: </p>  --}}
		                	</label>
						</div>
					</div>
                    <div class="button-wrapper">     
					    <button class="btn btn-primary button" id="checkin" type="submit">Check in</button>
					</div>
				</div>
        	</div>
        </div>
   @endif    
  {{--   @endforeach  --}}
   	</div>

</form>
@stop
{{-- 	@foreach($users as $user)
		<tr>
			@foreach ($user->projects as $project)
			<div class="assign-members">   
				<div class="member--details">
					{{$project->title}} {{--Hier komt de if statement, die kijkt of project title gelijk is aan title(input)--}}
				  {{--  <p>{{$user->firstname[0]}}.{{ $user->surname }}</p>
					<a href=""><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
			        <p hidden >{{$user->email}}	</p></a>
			        <p>{{$user->tel}}</p>
			 	</div>
			</div><!--End of user-->
		    @endforeach
		</tr>
	@endforeach --}}