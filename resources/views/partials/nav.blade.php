<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
	    
	<div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
		<a class="navbar-brand page-scroll" href="/">Laravel App</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
		   
		     <li><a class="page-scroll" href="/">Home</a></li>
		</ul>


                <ul class="nav navbar-nav navbar-right">

		    @if (\Auth::guest())
                    		<li><a class="page-scroll" href="/auth/register">Register</a></li>
				<li><a class="page-scroll" href="/auth/login">Login</a></li>
		   @else	


              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ \Auth::user()->name }}<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a class = "page-scroll" href="/auth/logout">Logout</a></li>
                </ul>
              </li>
 


			@endif
			
                </ul>
            </div>
	</div>

    </nav> 


