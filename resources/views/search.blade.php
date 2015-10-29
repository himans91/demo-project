@extends('layouts.master')

@section('title')
  Search
@stop
@extends('layouts.navbar')
@section('content')
<div id="page-index" class="container">
   <div class="content">
      <p><h4><strong>Search</strong></h4><p>
      <form class="search-form" method="post" >
         {!! csrf_field() !!} 
         <select class="form-control" id="selection"> 
            <option value="user">User</option>
            <option value="project">Project</option>
         </select>
         {{-- <div class="item-search-project is-inactive">
            <label for="project-name">Project title</label>
            <input class="input-field" name="title" type="text" placeholder="Project title">
         </div> --}}
         <div class="item-search-user">
            <label for="user">User name</label>
            <input class="input-field" name="firstname" type="text" placeholder="First name">
         </div>
         <div class="button-wrapper">     
               <button class="btn btn-primary button" type="submit">Search</button>
         </div>
      </form>
   </div><!--End of content-->
</div>    <!--End of container-->
@stop