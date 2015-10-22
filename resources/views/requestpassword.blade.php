@extends('layouts.master')

@section('title')
  Apply Password
@stop
@section('content')

<div id="page-index" class="container">
   <form class="login-form" method="post" action"{{ url('auth/login') }}">
      <div class="login-form-item">
         <strong></strong>
         <div class="login-item-content">
            <input class="input-field" name="u_email" type="text" placeholder="Email">
            <div class="button-wrapper">
               <button id="submit" class="btn btn-primary button" type="button">Submit </button>
            </div>
         </div>
      </div>
      
   </form>
</div>    <!--End of container-->
