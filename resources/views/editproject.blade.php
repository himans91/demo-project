@extends('layouts.master')

@section('title')
  edit project
@stop
@extends('layouts.navbar')
@section('content')
<div id="page-index" class="container">

  @if($errors->any())
    <ul class="alert alert-danger">
      @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif
    <main class="main">
        <div class="content">
            <p>Add project</p>
            <div class="registration-form">
                <form  method="POST" action="{{ $id }}">
                    {!! csrf_field() !!}
                    <label for="title">Title</label>
                    <input  class="input-field" name="title" value="{{ $title }}" type="text" id="title" placeholder="title">
                    <label for="tel">Telephone</label>
                    <input class="input-field" name="telephone"  value="{{ $telephone }}" type="text" id="tel" placeholder="Telephone">
                    <label for="location">Locatie</label>
                    <select  class="form-control select-intern-extern" id="selection"> 
                      <option value="intern" name="intern">Intern</option>
                      <option value="extern" name="extern">Extern</option>
                    </select>
                    <div class="extern-location">
                      <label for="street">Street</label>
                      <input  class="input-field" name="street" value="{{ $street }}" type="text" id="street" placeholder="street">
                      <label for="Zipp-code">Zipp code</label>
                      <input class="input-field" name="zippcode"  value="{{ $zippcode }}" type="" id="zippcode" placeholder="Zipp code">
                      <label for="tel">City</label>
                      <input  class="input-field" name="city" value="{{ $city }}" type="text" id="City" placeholder="City">
                    </div>
                    <label for="startdate">Start date</label>
                    <div class='input-group date' id='datetimepicker2'>
                      <input   type='date'  name"startdate" value="{{ $startdate }}" class="form-control" />
                      <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                    </div>
                    <label for="enddate">End date</label>
                    <div class='input-group  end-date' id='datetimepicker2'>
                      <input  type='date' class="form-control" name="enddate" value="{{ $enddate }}"/>
                      <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                    </div>
                    <button id="submit" class="btn btn-primary button" type="submit" >Save </button>
                </form>   
            </div><!--end of registration-form-->
        </div><!--end of content-->
    </main>
</div><!--end of container-->
@stop