<nav class="navbar navbar-default">
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
		  	  	<li><a href="{{ url('homepage') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home
			  		</a>
			  	</li>
			  	<li><a href="{{ url('addproject') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add project
			  		</a>
			  	</li>
			  	<li><a href="{{ url('search') }}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search
			  		</a>
			  	</li>
			  	<li><a href="{{ url('auth/logout') }}"><span class="glyphicon glyphicon-off" aria-hidden="true">	</span> Logout
			  		</a>
			  	</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div><!--/.container-fluid -->
</nav>