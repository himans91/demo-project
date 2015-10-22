@extends('layouts.master')

@section('title')
  Edit user
@stop
@extends('layouts.navbar')
@section('content')
<div id="page-index" class="container">
    <div class="content">
        <p>Edit users</p>
        <div class="registration-form">
            <form method="POST" action="{{ $id }}">
                {!! csrf_field() !!}
                <label for="email">Email</label>
                <input class="input-field" name="email" type="text" value="{{ $email }}" id="email" placeholder="email" >

                <label for="firstname">firstname</label>
                <input class="input-field" name="firstname" value="{{ $firstname }}" type="text" id="firstname" placeholder="firstname">

                <label for="surname">surname</label>
                <input class="input-field" name="surname" value="{{ $surname }}" type="text" id="tel" placeholder="Telephone">
                <label for="tel">tel</label>
                <input class="input-field" name="tel" value="{{ $tel }}" type="text" id="tel" placeholder="Telephone">
                <button id="submit"  class="btn btn-primary button" type="submit">Save </button>
            </form>   
        </div><!--end of registration-form-->
    </div><!--end of content-->
</div><!--end of container-->
@stop