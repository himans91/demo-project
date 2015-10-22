@extends('layouts.master')


@section('title')
  Register
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

    <main class="main">
        <div class="content">
            <p>Sign up</p>
            <div class="registration-form">
                <form form method="POST" action="/auth/register">
                    {!! csrf_field() !!}
                    <label for="email">e-mail</label>
                    <input class="input-field" name="email" type="email" id="email" placeholder="email">
                    <label for="firstname">firstname</label>
                    <input class="input-field" name="firstname" type="text" id="firstname" placeholder="firstname">
                    <label for="surname">surname</label>
                    <input class="input-field" name="surname" type="text" id="surname" placeholder="surname">
                    <label for="password">password</label>
                    <input class="input-field" name="password" type="password" id="password" placeholder="password">
                    <label for="confirm-password">confirm-password</label>
                    <input class="input-field" name="password_confirmation" type="password" id="password" placeholder="Confirm password">
                    <label for="tel">tel</label>
                    <input class="input-field" name="tel" type="text" id="tel" placeholder="telephone">
                    <button id="submit"  class="btn btn-primary button" type="submit">Register </button>
                </form>   
            </div><!--end of registration-form-->
        </div><!--end of content-->
    </main>
    <!--#include file="includes/components/footer.shtml" -->
</div><!--end of container-->
@stop