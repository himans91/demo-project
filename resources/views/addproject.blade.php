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
            <label for="tel">Title</label>
            <input  class="input-field" name="title" placeholder="title"  type="text" id="title" required >
            <label for="tel">Telephone</label>
            <input class="input-field" name="telephone" placeholder="telephone"  type="text" id="tel" required >
            <label for="street">Locatie</label>
            <select  class="form-control select-intern-extern" id="selection"> 
              <option value="intern" name="0">Intern</option>
              <option value="extern" name="1">Extern</option>
            </select>
            <div class="extern-location">
              <label for="street">Street</label>
              <input  class="input-field" name="street" placeholder="street" type="text" id="street" >
              <label for="Zipp-code">Zipp code</label>
              <input class="input-field" name="zippcode" placeholder="Zippcode" type="text" id="zippcode" >
              <label for="tel">City</label>
              <input  class="input-field" name="city" placeholder="Zippcode" type="text" id="city" >
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