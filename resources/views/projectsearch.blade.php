@extends('layouts.master')

@section('title')
  Search
@stop
@extends('layouts.navbar')
@section('content')
   <div class="content-holder">

      <img class="find-icons"  src="http://s1.postimg.org/9gj09mn5r/findproject.png" />

      <form class="search-form" method="post" >
         {!! csrf_field() !!} 
         
         <div class="item-search-project ">
            <label for="project-name">Project title</label>
            <input class="input-field" name="title" type="text" placeholder="Project title" required>
         </div>
         <div class="button-wrapper">     
            <button class="btn btn-primary button" type="submit">Search</button>
         </div>
      </form>
</div>    <!--End of content-holder-->
@stop