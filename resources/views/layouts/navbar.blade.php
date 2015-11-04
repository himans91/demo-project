<nav class="navbar navbar-default ">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed navbar-left" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		 		<span class="sr-only">Toggle navigation</span>
		  		<span class="icon-bar"></span>
		  		<span class="icon-bar"></span>
		  		<span class="icon-bar"></span>
			</button>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="{{ url('edituser', [ Auth::user()->id ]) }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> My profile
			  		</a>
			  	</li>
			  	<li class="dropdown">
	          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Admin <span class="caret"></span></a>
	          		<ul class="dropdown-menu">
			            <li><a href="/admin/dashboard">Dashboard</a></li>
		            	@if(\SidneyDobber\User\AEUser::authorize('users'))
		                <li><a href="/admin/users"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Users</a></li>
		                <li><a href="/admin/users/add">Add user</a></li>
		            	@endif
	          		</ul>
        		</li>	
		  	  	<li><a href="{{ url('homepage') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home
			  		</a>
			  	</li>
			  	<li><a href="{{ url('addproject') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add project
			  		</a>
			  	</li>
			  	<li class="dropdown">
			  		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search <span class="caret"></span></a>
			  		<ul class="dropdown-menu">
			            <li><a href="{{ url('search') }}">Users</a></li>
			            <li><a href="{{ url('projectsearch') }}">Project</a></li>
	          		</ul>
			  	</li>
			  	<li> @if (Auth::check())
                    <a href="/logout"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> logout </a> 
                @endif
			  	</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div><!--/.container-fluid -->
</nav>