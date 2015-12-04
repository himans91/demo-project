@extends('layouts.master')

@section('title')
  Edit user
@stop
@extends('layouts.navbar')
@section('content')
    <div class="content-holder">    
        <p>Edit users</p>
        <div class="registration-form">
            <form method="POST" action="{{ $id }}">
                {!! csrf_field() !!}
                <label for="email">Email</label>
                <input class="input-field" name="email" type="text" value="{{ $email }}" readonly id="email" placeholder="email" >
                <label for="firstname">Firstname</label>
                <input class="input-field" name="firstname" value="{{ $firstname }}" type="text" id="firstname" placeholder="firstname">
                <label for="surname">Surname</label>
                <input class="input-field" name="surname" value="{{ $surname }}" type="text" id="tel" placeholder="Surname">
                <label for="tel">Tel</label>
                <input class="input-field" name="tel" value="{{ $tel }}" type="text" id="tel" placeholder="Telephone">
                <label for="tel">User-role</label>
                <input class="input-field" name="userrole" value="{{ $userrole }}" type="text" id="userrole" readonly>
                <button id="submit"  class="btn btn-primary button" type="submit">Save </button>
            </form>   
        </div><!--end of registration-form-->
    </div><!--end of content-->
@stop