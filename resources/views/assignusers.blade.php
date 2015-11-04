{{-- All users --}}

{{--@extends('layouts.master')
	@foreach($users as $user)
		<div class="assign-members">   
			<input type="checkbox" id="cb1" /> 
		<div class="member--details">
		    <p>{{$user->firstname[0]}}.{{ $user->surname }}</p>
			<a href=""><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
	        <p hidden >{{$user->email}}	</p></a>
	        <p>{{$user->tel}}</p>
	 	</div>
		</div><!--End of user-->
	@endforeach --}}

{{-- Users per project --}}
@foreach($users as $user)
	<tr>
		@foreach ($user->projects as $project)
		<div class="assign-members">   
			<div class="member--details">
				{{$project->title}}
			    <p>{{$user->firstname[0]}}.{{ $user->surname }}</p>
				<a href=""><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
		        <p hidden >{{$user->email}}	</p></a>
		        <p>{{$user->tel}}</p>
		 	</div>
		</div><!--End of user-->
	    @endforeach
	</tr>
@endforeach

