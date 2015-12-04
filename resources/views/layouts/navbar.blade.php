<nav class="navbar navbar-default ">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed navbar-left" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		 		<span class="sr-only">Toggle navigation</span>
		  		<span class="icon-bar"></span>
		  		<span class="icon-bar"></span>
		  		<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand logo-container" href="{{ url('homepage') }}"><img class="logo"  src="http://www.digitaslbi.com/Templates/assets/img/logo_digitaslbi--mobile.svg" /></a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="{{ url('homepage') }}">Home
			  		</a>
			  	</li>
				<li><a href="{{ url('edituser', [ Auth::user()->id ]) }}"> My profile
			  		</a>
			  	</li>
				<li><a href="{{ url('assignusers') }}"> Assign users
			  		</a>
			  	</li>
			  	@if(Auth::user()->userrole != 'author')
			  	<li class="dropdown">
	          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin</a>
	          		<ul class="dropdown-menu">
			            <li><a href="/admin/dashboard">Dashboard</a></li>
		                <li><a href="/admin/users">Users</a></li>
		                <li><a href="/admin/users/add">Add user</a></li>
	          		</ul>
        		</li>	
		  	  	
			  	<li><a href="{{ url('addproject') }}">Add project</a>
			  	</li>
			  	@endif
			  	<li class="dropdown">
			  		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Search</a>
			  		<ul class="dropdown-menu">
			            <li><a href="{{ url('search') }}">Users</a></li>
			            <li><a href="{{ url('projectsearch') }}">Project</a></li>
	          		</ul>
			  	</li>
			  	<li> 
			  	@if (Auth::check())
                    <a href="/logout"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> logout </a> 
                @endif
			  	</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div><!--/.container-fluid -->
</nav>


