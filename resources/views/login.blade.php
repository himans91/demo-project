@extends('layouts.master')

@section('title')
  Login
@stop
@section('content')

<div id="page-index" class="container">
   @if($errors->has())
      @foreach ($errors->all() as $error)
      <div class="alert alert-danger" role="alert">
         <div>{{ $error }}</div>
      </div>
     @endforeach
   @endif
   <form class="login-form" method="post" action"{{ url('auth/login') }} ">
      <p><h4><strong>Search</strong></h4><p>
      {!! csrf_field() !!}
      <div class="login-form-item">
         <div class="login-item-content">
            <label for="email">e-mail</label>
            <input class="input-field" name="email" type="text" value="" placeholder="Email">
         </div>
      </div>
      <div class="login-form-item">
         <div class="login-item-content">
            <label for="password">password</label>
            <input class="input-field" name="password" type="password" placeholder="Password">
         </div>
      </div>
      <div class="button-wrapper">     
         <button class="btn btn-primary button" type="submit">login</button>
            <div class="register-url">
               <a href="{{ url('register') }}">Register</a>
            </div>
            <div class="forgot-password">
               <a href="{{ url('requestpassword') }}">forgot your password</a>
            </div>
      </div>
   </form>
</div>    <!--End of container-->
@stop