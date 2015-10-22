@extends('layouts.master')

@section('title')
  Apply Password
@stop
@extends('layouts.navbar')
@section('content')
<div id="page-index" class="container">
   <div class="content">
      <div class="content-holder">
         <div class="week-selector">
            <label for="selectweek">Select a week</label>
            <select class="form-control" id="sel1"> 
               <option>1</option>
               <option>2</option>
               <option>3</option>
            </select>
         </div>
         @extends('layouts.usersearch')
         <div class="item">
            <div class="item-project-bar">
               <a href="">Project</a> <!-- GET project-title -->
               <div class="item-day-bar">
                  <a href="">Monday</a>                
                  <div class="item-user-bar">
                     <a href="">User</a>
                     <span class="glyphicon glyphicon-collapse-down" data-toggle="collapse" data-target=".list-of-users">
                     <div class="list-of-users">
                        <div class="list-entry">    
                           <div class="media-left entry--image"> 
                              <a href="#"> <!-- Link to User -->
                              <img class="media-object" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTA2YjZjZDIzMiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MDZiNmNkMjMyIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxNC41IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" alt="...">
                              </a>
                           </div>
                           <div class="media-body entry--info">
                              <p class="media-heading">Himanshu</p>
                              <p class="media-heading">0632386556</p>
                              <p class="media-heading">Amsterdam</p>
                           </div>
                        </div><!--End of user-->
                        <div class="list-entry">    
                           <div class="media-left entry--image">
                              <a href="#"> <!-- Link to User -->
                              <img class="media-object" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTA2YjZjZDIzMiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MDZiNmNkMjMyIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxNC41IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" alt="...">
                              </a>
                           </div>
                           <div class="media-body entry--info">
                              <p class="media-heading">test</p>
                              <p class="media-heading">0632386556</p>
                              <p class="media-heading">Utrecht</p>
                           </div>
                        </div><!--End of user-->
                     </div><!--End of user-list-->
                  </div> <!--End of header-users-->
               </div> <!--End of header-day-->
            </div> <!--End of header-project-->
         </div> <!--End of item-->
      </div>
   </div><!--End of content-->
</div><!--End of container-->
@stop