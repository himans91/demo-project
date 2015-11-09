@extends('layouts.master')
@section('title')
  Search
@stop
@extends('layouts.navbar')
@section('content')


   @if($projects->isEmpty())
   <div class="alert alert-danger" role="alert">Nothing found!<a href="{{ url('projectsearch') }}"> Try Again</a></div>
      @else 
         @foreach ($projects as $project)

            <div class="list-of-projects"> 

               <div class="media-left entry--image"> 
                  <a href="#"> <!-- Link to User -->
                  <img class="media-object" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTA2YjZjZDIzMiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MDZiNmNkMjMyIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxNC41IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" alt="...">
                  </a>
               </div>  
               <div class="media-body entry--info">
                  <Ul> 
                     <li><p class="media-heading"><strong>Project-title:</strong> {{$project->title}}</p></li>
                     <li><p class="media-heading"><strong>Telephone:</strong> {{$project->telephone}}</p></li>
                     <li><p class="media-heading"><strong>City:</strong> {{$project->city}}</p></li>
                     <a href="editproject/{id}"><span class="glyphicon glyphicon-cog" ></span></a>
                     <a class="show-users-list"><span class="glyphicon glyphicon-user" ></span></a>
                  </ul>
               </div>
            </div>  {{-- end of "list-of-projects" --}}
            
         @endforeach
   @endif
   <div class="all-users-list">
      @foreach($users as $user) 
         <div class="assign-members">   
            <div class="member--details">
               <p>{{$user->firstname}} {{ $user->surname }}</p>
               <p>{{$user->email}} </p></a>
               <p>{{$user->tel}}</p>
               <div id="AssignMember">
                  <input type="checkbox" class="CheckIn"/><p class="CheckboxStatus"> Check me in</p>
               </div>
            </div>
         </div><!--End of user-->
      @endforeach 
   </div>

@stop