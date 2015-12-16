@extends('layouts.master')

@section('title')
  Add project
@stop
@extends('layouts.navbar')
@section('content')
  <div class ="content-holder">

    <p>Add project</p>
    <div class="registration-form">
        <form id="AddProductForm" form method="POST" action="/addproject/store">
            {!! csrf_field() !!}
            <label for="title">Title</label>
            <input  class="input-field" name="title" type="text" id="title" required >
            <label for="tel">Telephone</label>
            <input class="input-field" name="telephone" pattern="[0-9]{8}" type="text" id="tel" required >
            <label for="street">Locatie</label>
            <select  class="form-control select-intern-extern" id="selection"> 
              <option value="intern" name="0">Intern</option>
              <option value="extern" name="1">Extern</option>
            </select>
            <div class="extern-location">
              <label for="street">Street</label>
              <input  class="input-field" name="street" type="text" id="street" required >
              <label for="Zipp-code">Zipp code</label>
              <input class="input-field" name="zippcode" type="" id="zippcode" required >
              <label for="tel">City</label>
              <input  class="input-field" name="city" type="text" id="city" required >
            </div>
            <label for="startdate">Start date</label>
            <div class="input-group date"  id='datetimepicker'>
              <input type="date" name="startdate"  class="form-control startdate" required/>
              <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
              </span>
            </div>
            <label for="enddate">End date</label>
            <div class="input-group  end-date" id="datetimepicker">
              <input  type="date" name="enddate"  class="form-control" />
              <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
              </span>
            </div>
            <button id="submit" class="btn btn-primary button" type="submit" >Add </button>
        </form>   
    </div><!--end of registration-form-->
  </div>
@stop