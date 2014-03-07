<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
		<style>
			table form { margin-bottom: 0; }
			form ul { margin-left: 0; list-style: none; }
			.error { color: red; font-style: italic; }
			body { padding-top: 20px; }
		</style>
	</head>

	<body>

		<div class="navbar navbar-fixed-top">
		    <div class="navbar-inner">
		        <div class="container-fluid">
		            <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar"> <span class="icon-bar"></span>
		             <span class="icon-bar"></span>
		             <span class="icon-bar"></span>
		            </a>
		            <a href="#" class="brand">Laravel Crud</a>
		            <div class="nav-collapse collapse">
		                <ul class="nav">
		                	<li class="dropdown">     

		                        <a data-toggle="dropdown" class="dropdown-toggle" role="button" href=" {{ URL::to('services') }}"> Service

		                        </a>		                        
		                    </li>
		                    <li class="dropdown">     

		                        <a data-toggle="dropdown" class="dropdown-toggle" role="button" href=" {{ URL::to('users') }}"> User

		                        </a>		                        
		                    </li>
		                    <li class="dropdown">     

		                        <a data-toggle="dropdown" class="dropdown-toggle" role="button" href=" {{ URL::to('hostnames') }}"> Hostname

		                        </a>		                        
		                    </li>
		                    <li class="dropdown">     

		                        <a data-toggle="dropdown" class="dropdown-toggle" role="button" href=" {{ URL::to('networks') }}"> Networks

		                        </a>		                        
		                    </li>
		                </ul>
		               
		            </div>
		            <!--/.nav-collapse -->
		        </div>
		    </div>
		</div>

		<div class="container" style="margin-top:50px">
			@if (Session::has('message'))
				<div class="flash alert">
					<p>{{ Session::get('message') }}</p>
				</div>
			@endif

			@yield('main')
		</div>

	</body>

</html>