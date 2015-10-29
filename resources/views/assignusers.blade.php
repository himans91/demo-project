@extends('layouts.master')
@foreach($users as $user)
  <div class="assign-members">    
         <div class="member--details">
		    <p >{{$user->firstname}}</p>
            <p >{{$user->email}}	</p>
            <p >{{$user->tel}}</p>
         </div>
   </div><!--End of user-->
@endforeach